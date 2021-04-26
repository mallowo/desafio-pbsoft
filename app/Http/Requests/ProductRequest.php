<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'name'=>'required',
            'category'=>'required',
            'price'=>'required|numeric',
            'qnt'=>'required|numeric',
        ];
    }

    public function messages()
    {
        return[
            'name.required' => 'Coloque o nome!',
            'category.required' => 'Coloque uma categoria!',
            'price.required' => 'Coloque um valor no preço!',
            'qnt.required' => 'Coloque um valor na quantidade!',

            'price.numeric' => 'Apenas números são permitidos na lacuna preço!',
            'qnt.numeric' => 'Apenas números são permitidos na lacuna quantidade!',

        ];
    }
}
