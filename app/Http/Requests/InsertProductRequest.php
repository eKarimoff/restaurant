<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InsertProductRequest extends FormRequest
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
            'name' =>'required',
            'amount'=>'required',
            'unit_id' =>'required|in:1,2,3'
        ];
    }
}
