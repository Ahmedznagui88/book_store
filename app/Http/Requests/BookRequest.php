<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
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
            'title' => 'required|min:2|max:100',
            'author' => 'required|min:2|max:50',
            'cover' => 'required|image|mimes:jpeg,jpeg,png,webp',
            'plot' => 'required|min:10|max:1000',

        ];

        
    }

    public function messages(){
        return [
            'required' => 'il campo :attribute è richiesto',
            'min' => 'il campo :attribute deve esssere di :min caratteri ',
            'max' => 'il campo :attribute deve esssere al massimo di :max caratteri',
            'image' => 'il file deve esseere un\'immagine',
            'mimes' => 'le estensione acettate sono :values',
        ];
    }
}
