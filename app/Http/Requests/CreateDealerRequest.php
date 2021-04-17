<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateDealerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
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
        return [
            'name'=>'required|max:75',
            'owner'=>'required|max:50',
            'cnic'=>'required|numeric|min:3600000000000|max:3699999999999',
            'phone'=>'required|numeric|min:3000000000|max:3999999999',
            'address'=>'required|max:100',
            'longitude'=>'required|numeric|between:-90.99999999999,90.99999999999',
            'latitude'=>'required|numeric|between:-180.99999999999,180.99999999999'
        ];
    }
}
