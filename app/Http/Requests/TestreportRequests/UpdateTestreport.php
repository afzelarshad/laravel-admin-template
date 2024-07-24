<?php

namespace App\Http\Requests\TestreportRequests;
use Illuminate\Foundation\Http\FormRequest;

class UpdateTestreport extends FormRequest
{
    /**
     * Determine if the role is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $data = 		array (
		  'patient_name' => 'required',
		  'lab_test' => 'required',
		  'referral' => 'required',
		  'telephone' => 'required',
		  'total_price' => 'required',
		);
        return $data;
    }
}
