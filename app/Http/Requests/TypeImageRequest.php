<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TypeImageRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $id = $this->typeimage ? ',' . $this->typeimage->id : '';

        return $rules = [
            'name' => 'required|string|max:255|unique:type_images,name' . $id,
        ];
    }
}
