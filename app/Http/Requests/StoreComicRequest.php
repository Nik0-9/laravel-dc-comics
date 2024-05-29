<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComicRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|max:255|min:3',
            'description' => 'required|min:10',
            'image' => 'required|max:255',
            'type' => 'nullable',
            'series' => 'nullable',
            'price' => 'required|min:4'
        ];
    }
    public function messages(){
        return[
            'title.required'=> 'Questo campo è obbligatorio',
            'title.max'=> 'Il campo deve avere massimo :max caratteri',
            'title.min'=> 'Il campo deve avere minimo :min caratteri',
            'description.required'=> 'La descrizione è obbligatorio',
            'description.max'=> 'Il campo deve avere massimo :max caratteri' ,
            'description.min'=> 'Il campo deve avere minimo :min caratteri',
            'image.required'=> 'Questo campo è obbligatorio',
            'image.max' => 'Il campo deve avere massimo :max caratteri',
            'price.required' => 'Questo campo è obbligatorio',
            'price.min' => 'Il campo deve avere :min caratteri'
        ];
    }     
}
