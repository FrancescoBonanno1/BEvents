<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreOperatorRequest extends FormRequest
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
            'name' => 'required|min:1|max:50',
            'engagement_price' => 'required|numeric|min:0|max:50',
            'description' => 'required|min:1|max:300',
            'phone' => 'required|min:1|max:50',
            'image' => 'required|min:1|max:50',
            'address' => 'required|min:1|max:50',
            'foundation_year' => 'required',
        ];
    }
}
