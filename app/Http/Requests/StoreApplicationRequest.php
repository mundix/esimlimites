<?php

namespace App\Http\Requests;

use App\Traits\Api\JsonFailValidationTrait;
use Illuminate\Foundation\Http\FormRequest;

class StoreApplicationRequest extends FormRequest
{

    use JsonFailValidationTrait;

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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'first_name' => ['required'],
            'last_name' => ['required'],
            'location' => ['required'],
            'plan_type' => ['required'],
            'iccid' => ['required', 'numeric'],
            'provider' => ['required'],
            'validity' => ['required'],
            'status' => ['required', 'numeric'],
            'payment' => ['required', 'numeric'],
            'qty' => ['required', 'numeric'],
        ];
    }
}
