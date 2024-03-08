<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ScamReportingRequest extends FormRequest
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
            'full_name' => 'nullable|string',
            'country' => 'nullable|string',
            'email' => 'nullable|email',
            'phone_number' => 'nullable|string',
            'lost_amount' => 'nullable|string',
            'deposit_method' => 'nullable|string',
            'transaction_date' => 'nullable|string',
            'wallet_addresses' => 'nullable|string',
            'message' => 'nullable|string',
        ];
    }
}
