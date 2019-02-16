<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

use Sentinel;

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
    
    public function all($keys = null)
    {
        $aAttribute = parent::all($keys);
        
        if (Sentinel::check())
        {
            $aAttribute['fk_users'] = Sentinel::getUser()->id;
        }
        
        return $aAttribute;
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
            'fk_users'              => 'numeric',
            'fk_contact_category'   => 'numeric',
            'subject_contact'       => 'required|string|max:60',
            'text_contact'          => 'required',
            'created_at'            => 'string',
            'updated_at'            => 'string'
        ];
    }
}

