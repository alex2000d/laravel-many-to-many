<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
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
            'name_project' => 'required|max:255',
            'description' => 'required|max:255',
            'name' => 'required|max:255',
            'surname' => 'required|max:255',
            'github' => 'required|max:255',
            'image' => 'nullable|image|max:4084',
            'type_id' => 'nullable|exists:types,id'

        ];
       
    }

    public function messages(){
            
        return [
             'name_project.required' => 'il nome del progetto è obbligatorio',
             'name_project.max' => 'il nome del progetto deve essere lungo al massimo 255 caratteri',
             'description.required' => 'la descrizione è obbligatoria',
             'description.max' => 'la descrizione deve essere lunga al massimo 255 caratteri',
             'name.required' => 'il nome è obbligatorio',
             'name.max' => 'il nome deve essere lunga al massimo 255 caratteri',
             'surname.required' => 'il cognome è obbligatorio',
             'surname.max' => 'il cognome deve essere lungo al massimo 255 caratteri',
             'github.required' => 'il link github è obbligatorio',
             'surname.max' => 'il link github deve essere lungo al massimo 255 caratteri',
             'image.image'=> 'il file deve essere un immagine',
             'image.max'=> 'immagine deve essere grande al massimo 4084 kb',
             'type_id.exists' => 'la tipologia selezionata non esiste',
         ];
    }
}
