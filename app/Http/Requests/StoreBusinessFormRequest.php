<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBusinessFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // We could perform a gate check here
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
            'name'                        => 'required|max:255',
            'type'                        => 'required|in:salon,freelance,home,venue',
            'instagram_username'          => 'sometimes|max:50',
            'where_did_you_hear_about_us' => 'required|in:internet search,facebook,instagram,word of mouth,tiktok,other',
            'discount_code'               => 'sometimes|max:8',
        ];
    }

    /**
     * Get custom attributes for validator errors.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            'name' => 'business name',
            'type' => 'business type',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'where_did_you_hear_about_us.required' => 'Please tell us where you heard about us.',
            'where_did_you_hear_about_us.in' => 'Please tell us where you heard about us.',
        ];
    }
}
