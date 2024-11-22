<?php

namespace App\Http\Requests\V1;

use App\Rules\ValidateSerialRule;
use Illuminate\Foundation\Http\FormRequest;

class SetBillingDayRequest extends FormRequest
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
            'serial' => ['required', new ValidateSerialRule()],
            'billing_day' => 'required|integer|min:1|max:31',
        ];
    }
}
