<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateShopkeeperRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|unique:shopkeepers|max:100|min:3',
            'p_iva' => 'required|max:11|min:3',
            'image' => 'nullable|image|max:255',
            'hour' => 'required',
            'address' => 'required',
        ];
    }
    
    public function messages()
    {
        return [
            'name.required' => 'Il nome è obbligatorio.',
            'name.min' => 'Il nome deve essere lungo almeno :min caratteri.',
            'name.max' => 'Il nome non può superare i :max caratteri.',
            'name.unique:shopkeepers' => 'Il nome esiste già',
            'p_iva.required' => 'La partita iva è obbligatoria.',
            'p_iva.max' => 'La partita iva non deve superare :max',
            'p_iva.min' => 'La partita iva non deve essere minore di :min',
            'hour.required' => 'L\'orario è obbligatorio.',
            'address.required' => 'L\'indirizzo è obbligatorio.',
        ];
    }
}
}
