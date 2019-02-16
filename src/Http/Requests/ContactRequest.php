<?php

namespace CeddyG\ClaraContact\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'id_contact'            => 'numeric',
            'fk_contact_category'   => 'numeric',
            'mail_contact'          => 'required|string|max:255',
            'subject_contact'       => 'required|string|max:60',
            'text_contact'          => 'required',
            'created_at'            => 'string',
            'updated_at'            => 'string'
        ];
    }
}

