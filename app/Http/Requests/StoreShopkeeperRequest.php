<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreShopkeeperRequest extends FormRequest
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
            'hour_open' => 'required|date_format:H:i',
            'hour_close' => 'required|date_format:H:i',
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

            'hour_open.required' => 'L\'orario di apertura è obbligatorio.',
            'hour_open.date_format' => 'L\'orario di apertura deve essere nel formato hh:mm.',
            
            'hour_close.required' => 'L\'orario di chiusura è obbligatorio.',
            'hour_close.date_format' => 'L\'orario di chiusura deve essere nel formato hh:mm.',
            
            'address.required' => 'L\'indirizzo è obbligatorio.',
        ];
    }
}
