<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testreport as Table;
use Exception;
use App\Http\Requests\TestreportRequests\UpdateTestreport as UpdateRequest;
use App\Http\Requests\TestreportRequests\AddTestreport as AddRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use App\Models\Doctor;
use App\Models\Labtest;
use Illuminate\Support\Facades\Lang;

class TestreportController extends Controller {
  protected $handle_name = "testreport";
  protected $handle_name_plural = "testreports";

  public function index() {
    $all_count = Table::count();
    $trashed_count = Table::onlyTrashed()->count();
    return kview($this->handle_name_plural . '.index', [
      'ajax_route' => route('admin.' . $this->handle_name_plural . '.ajax'),
      'delete_route' => route('admin.' . $this->handle_name_plural . '.delete'),
      'create_route' => route('admin.' . $this->handle_name_plural . '.create'),
      'table_status' => 'all', //all , trashed
      'all_count' => $all_count,
      'module_names' => [
        'singular' => $this->handle_name,
        'plural' => $this->handle_name_plural,
      ],
      'doctors' => Doctor::all(),
      'trashed_count' => $trashed_count,
    ]);
  }
  public function create() {
      $doctors = Doctor::all();
      $labtests = Labtest::all();
    $index_route = route('admin.' . $this->handle_name_plural . '.index');
    return kview($this->handle_name_plural . '.manage', [
      'index_route' => $index_route,
      'form_action' => route('admin.' . $this->handle_name_plural . '.store'),
      'edit' => 0,
      'module_names' => [
        'singular' => $this->handle_name,
        'plural' => $this->handle_name_plural,
      ],
        'doctors' => $doctors,
        'labtests' => $labtests,
    ]);
  }
  public function edit(Request $request) {
      $doctors = Doctor::all();
      $labtests = Labtest::all();
    $ecrypted_id = $request->encrypted_id;
    $id = Crypt::decryptString($ecrypted_id);
    $data = Table::where('id', '=', $id)->first();
    $data['lab_test'] = explode(",", $data['lab_test']);
    $index_route = route('admin.' . $this->handle_name_plural . '.index');
    return kview($this->handle_name_plural . '.manage', [
      'index_route' => $index_route,
      'form_action' => route('admin.' . $this->handle_name_plural . '.update'),
      'edit' => 1,
      'data' => $data,
      'module_names' => [
        'singular' => $this->handle_name,
        'plural' => $this->handle_name_plural,
      ],
        'doctors' => $doctors,
        'labtests' => $labtests,
    ]);
  }
  public function show(Request $request) {
    $ecrypted_id = $request->encrypted_id;
    $id = Crypt::decryptString($ecrypted_id);
    $data = Table::where('id', '=', $id)->first();
      $doctors = Doctor::where('id', '=', $data->referral)->first();

      return kview($this->handle_name_plural . '.show', [
      'form_action' => route('admin.' . $this->handle_name_plural . '.update'),
      'edit' => 1,
      'data' => $data,
      'doctor' => $doctors,
      'module_names' => [
        'singular' => $this->handle_name,
        'plural' => $this->handle_name_plural,
      ],
    ]);
  }
  public function store(AddRequest $request) {
    try {
        $doctors = Doctor::where('id', '=', $request->referral)->first();
        $labTestIds=$request->input('lab_test');
        $labtests = implode(',', $labTestIds);
        (float)$commissionPercentage = $doctors->commission_percentage;
        $totalCommission = 0;
        $totalPrice = 0;
        foreach ($labTestIds as $labTestId) {
            $labtest = Labtest::where('id', '=', $labTestId)->first();
            $testPrice = $labtest->price;
            $totalPrice += $testPrice;
            $totalCommission +=  $testPrice/100 *$commissionPercentage;
        }
        $doctors->total_commission += $totalCommission;

        $doctors->save();

        $data = ['patient_name' => $request->patient_name, 'lab_test' => $labtests, 'referral' => $request->referral, 'telephone' => $request->telephone, 'total_price'=>$totalPrice ];
      $table = Table::create($data);

      return redirect()->to(route('admin.' . $this->handle_name_plural . '.index'))->with('success', 'New ' . ucfirst($this->handle_name) . ' has been added.');
    } catch (Exception $e) {
      return $e->getMessage();
      return redirect()->back()->with('error', $e->getMessage());
    }
  }
  public function update(UpdateRequest $request) {
    try {
        $doctors = Doctor::where('id', '=', $request->referral)->first();
        $labTestIds=$request->input('lab_test');
        $labtests = implode(',', $labTestIds);
        (float)$commissionPercentage = $doctors->commission_percentage;
        $totalCommission = 0;
        $totalPrice = 0;
        foreach ($labTestIds as $labTestId) {
            $labtest = Labtest::where('id', '=', $labTestId)->first();
            $testPrice = $labtest->price;
            $totalPrice += $testPrice;
            $totalCommission +=  $testPrice/100 *$commissionPercentage;
        }
        $data = ['patient_name' => $request->patient_name, 'lab_test' => $labtests, 'referral' => $request->referral, 'telephone' => $request->telephone, 'total_price' => $request->total_price, ];
      $where = [
        'id' => $request->id
      ];
      $updated_model = Table::updateOrCreate($where, $data);

      return redirect()->to($updated_model->show_route)->with('success', ucfirst($this->handle_name) . ' has been updated');
    } catch (Exception $e) {
      return redirect()->back()->with('error', $e->getMessage());
    }
  }
  public function ajax(Request $request) {
      $doctors = Doctor::all();
      $labtests = Labtest::all();
    $current_page = $request->page_number;
    if (isset($request->limit)) {
      $limit = $request->limit;
    } else {
      $limit = 10;
    }
    $offset = (($current_page - 1) * $limit);
    $modalObject = new Table();
    if (isset($request->string)) {
      $string = $request->string;
      $modalObject = $modalObject->where('name', 'like', "%" . $request->string . "%");
      // $modalObject = $modalObject->orWhere('name','like',"%".$request->string."%");
    }

    $all_trashed = $request->all_trashed;
    if ($all_trashed == "trashed") {
      $modalObject = $modalObject->onlyTrashed();
    }

    $total_records = $modalObject->count();
    $modalObject = $modalObject->offset($offset);
    $modalObject = $modalObject->take($limit);
    $data = $modalObject->get();


    if (isset($request->page_number) && $request->page_number != 1) {
      $page_number = $request->page_number + $limit - 1;
    } else {
      $page_number = 1;
    }
    $pagination = array(
      "offset" => $offset,
      "total_records" => $total_records,
      "item_per_page" => $limit,
      "total_pages" => ceil($total_records / $limit),
      "current_page" => $current_page,
    );
    return kview($this->handle_name_plural . '.ajax', compact('data', 'page_number', 'limit', 'offset', 'pagination','doctors', 'labtests'));
  }
  public function delete(Request $request) {
    if (isset($request->action)) {
      $action = $request->action;
      $is_bulk = $request->is_bulk;
      $data_id = $request->data_id;
    }
    switch ($action) {
      case 'restore':
        try {
          if ($is_bulk == 1) {
            $data_id = explode(",", $data_id);
            $table = Table::onlyTrashed()->whereIn('id', $data_id);
            $table->restore();
            return 1;
          } else {
            $table = Table::onlyTrashed()->find($data_id);
            $table->restore();
            return 1;
          }
        } catch (Exception $e) {
          return redirect()->back()->with('error', $e->getMessage());
        }
        break;
      case 'trash':
        try {
          if ($is_bulk == 1) {
            $data_id = explode(",", $data_id);
            $table = Table::whereIn('id', $data_id);
            $table->delete();
            return 1;
          } else {
            $table = Table::find($data_id);
            $table->delete();
            return 1;
          }
        } catch (Exception $e) {
          return redirect()->back()->with('error', $e->getMessage());
        }
        break;
      case 'delete':
        try {
          if ($is_bulk == 1) {
            $data_id = explode(",", $data_id);
            $table = Table::withTrashed()->whereIn('id', $data_id)->get();
            foreach ($table as $tbl) {
              // $detach_relationship = $tbl->relationship()->detach();
              $tbl->forceDelete();
            }
            return 1;
          } else {
            $table = Table::withTrashed()->find($data_id);
            // $detach_relationship = $table->relationship()->detach();
            $data = $table->forceDelete();
            return 1;
          }
        } catch (Exception $e) {
          return redirect()->back()->with('error', $e->getMessage());
        }
        break;
      default:
        return 0;
    }
  }
}
