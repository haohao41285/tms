<?php

namespace App\Http\Requests;

use App\Rules\reCaptchaRule;
use Illuminate\Foundation\Http\FormRequest;

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

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|max:255|min:6',
            'email' => 'email:rfc,dns',
            'message' => 'required|max:1000|min:10',
            'g-recaptcha-response' => ['required', new reCaptchaRule]

        ];
    }

    public function messages()
    {
        return [
            'name.required' => __('fe.validate.name.required'),
            'name.max' => __('fe.validate.name.max', ['max' => 255]),
            'name.min' => __('fe.validate.name.min', ['min' => 6]),

            'email.email' => __('fe.validate.email.required'),

            'message.required' => __('fe.validate.message.required'),
            'message.max' => __('fe.validate.message.max', ['max' => 1000]),
            'message.min' => __('fe.validate.message.min', ['min' => 10]),

            'g-recaptcha-response.required' => __('fe.validate.google-recaptcha.required'),
        ];
    }
}
