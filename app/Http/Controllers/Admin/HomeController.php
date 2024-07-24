<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use App\Models\Doctor;
use App\Models\Labtest;
use App\Models\Testreport;

class HomeController extends Controller {
  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct() {
    $this->middleware('auth');
  }

  /**
   * Show the application dashboard.
   *
   * @return \Illuminate\Contracts\Support\Renderable
   */
  public function index() {

    // Preparing count for Dashboard Array
      $doctors= Doctor::count();
      $labtests=LabTest::count();
      $testreports=Testreport::count();
    // Preparing Dashboard card Array.
    $dashboard_cards = [
        ['testreports', $testreports, Route('admin.testreports.index'), 'fa fa-users'],
        ['labtests', $labtests, Route('admin.labtests.index'), 'fa fa-users'],
        ['doctors', $doctors, Route('admin.doctors.index'), 'fa fa-users'],
      // ['News', $news, 'news.index'],
    ];
    $module_names = [
      'singular' => 'dashboard',
      'plural' => 'dashboard',
    ];
    return kview('home', compact('dashboard_cards', 'module_names'));
  }
}
