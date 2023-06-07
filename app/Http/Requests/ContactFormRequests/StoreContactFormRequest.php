<?php

namespace App\Http\Requests\ContactFormRequests;

use App\Models\ContactFormInterest;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreContactFormRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'full_name' => ['required'],
            'email' => ['required', 'email'],
            'contact_form_interest_id' => ['nullable', Rule::exists(ContactFormInterest::class, 'id'),],
            'message' => ['nullable'],
        ];
    }
}
