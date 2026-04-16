<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBookingRequest extends FormRequest
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
            // foreach ($variable as $key => $value) {
            //     # code...
            // }
            // 'name' => 'string',
            // 'surname' => 'string',
            // 'phone' => 'min:11',
            // 'date' => 'string',
            // 'sauna' => 'boolean',
            // 'vat' => 'boolean',
            // 'cost' => 'integer',
            // 'count_of_persons' => 'integer',
            // 'isConfirm' => 'boolean'
        ];
    }
}
