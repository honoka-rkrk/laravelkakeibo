<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateExpence extends FormRequest
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
            'category_id'=>'required',
            'money'=>'required|integer',
            'write_date'=>'required|date',
            'memo'=>'max:50',
        ];
    }

    public function attributes(){
        return[
            'category_id'=>'分類',
            'money'=>'金額',
            'write_date'=>'日付',
            'memo'=>'メモ',
        ];
    }
}
