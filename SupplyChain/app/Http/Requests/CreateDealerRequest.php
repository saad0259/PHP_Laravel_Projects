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
            'cnic'=>'required|max:13|min:13',
            'phone'=>'required|max:11|min:11',
            'address'=>'required|max:100',
            'longitude'=>'required',
            'latitude'=>'required'
        ];
    }
}
