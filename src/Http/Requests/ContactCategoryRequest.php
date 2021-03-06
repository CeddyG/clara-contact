<?php

namespace CeddyG\ClaraContact\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactCategoryRequest extends FormRequest
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
            'id_contact_category' => 'numeric',
	    'name_contact_category' => 'string|max:45',
	    'created_at' => 'string',
	    'updated_at' => 'string'
        ];
    }
}

