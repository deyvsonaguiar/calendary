<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventRequest extends FormRequest
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

            'title' => 'required|min:3',
            'start' => 'date_format:Y-m-d H:i:s|before:end',
            'end' => 'date_format:Y-m-d H:i:s|after:start',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Preencha o campo Título',
            'title.min' => 'Título precisa ser de no mínimo 3 caracteres',
            'start.date_format' => 'Preencha a data no formato válido',
            'start.before' => 'A data/hora inicial deve ser menor do que a data/hora final',
            'end.date_format' => 'Preencha a data no formato válido',
            'end.after' => 'A data/hora final deve ser maior do que a data/hora inicial'
        ];
    }
}
