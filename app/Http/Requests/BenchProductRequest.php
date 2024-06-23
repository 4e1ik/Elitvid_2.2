<?php

namespace App\Http\Requests;

//use App\Http\Controllers\PostController;
use Illuminate\Foundation\Http\FormRequest;

class BenchProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|filled|min:3|max:100',
            'material' => 'required|filled|min:3|max:100',
            'size' => 'max:50',
            'size1' => 'max:50',
            'size2' => 'max:50',
            'size3' => 'max:50',
            'size4' => 'max:50',
            'size5' => 'max:50',
            'weight' => 'max:50',
            'weight1' => 'max:50',
            'weight2' => 'max:50',
            'weight3' => 'max:50',
            'weight4' => 'max:50',
            'weight5' => 'max:50',
            'price' => 'max:50',
            'price1' => 'max:50',
            'price2' => 'max:50',
            'price3' => 'max:50',
            'price4' => 'max:50',
            'price5' => 'max:50',
            'collection' => 'required|filled',
            'image.*.image' => 'required|image',
        ];
    }

    public function messages()
    {
        return [

        ];
    }
}
