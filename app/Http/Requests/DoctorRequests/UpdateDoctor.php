<?php

namespace App\Http\Requests\DoctorRequests;
use Illuminate\Foundation\Http\FormRequest;

class UpdateDoctor extends FormRequest
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
		  'doctor_name' => 'required',
		  'id_card' => 'required',
		  'experience' => 'required',
		  'commission_percentage' => 'required',
		  'total_commission' => 'required',
		);
        return $data;
    }
}
