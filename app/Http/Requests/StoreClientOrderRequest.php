<?php

namespace App\Http\Requests;

use App\Traits\Api\JsonFailValidationTrait;
use Illuminate\Foundation\Http\FormRequest;

class StoreClientOrderRequest extends FormRequest
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
            'client_email' => ['required'],
            'client_name' => ['required'],
            'client_contact' => ['required'],
            'client_order_number' => ['required'],
            'channel' => ['required'],
            'client_imei' => ['required'],
            'qr_image' => ['required'],
            'template' => ['required'],
        ];
    }
}
