<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateStockRequest extends FormRequest
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
            'subitem_id'=>'required',
            'dealer_id'=>'required',
            'gov_price'=>'required|numeric|min:1|max:9',
            'available_stock'=>'required|numeric|min:1|max:9',
            'receive_quantity'=>'numeric|min:1|max:9',
            'receive_at'=>'numeric|min:1|max:9',
            'sold_quantity'=>'numeric|min:1|max:9',
            'sold_at'=>'numeric|min:1|max:9',

            


        ];
    }
}
