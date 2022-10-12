<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreContactRequest extends FormRequest
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
            'first_name' => 'required|min:3|max:16',
            'last_name' => 'required|min:3|max:16',
            'email' => 'required|email',
            'subject' => 'required|min:3|max:64',
            'content' => 'required|min:3',
        ];
    }

    public function withValidator($validator)
    {
        $messages = $validator->messages();

        foreach ($messages->all() as $message) {
            toastr($message, 'error', 'error', ['extendedTimeOut' => 0, 'timeOut' => 0]);
        }

        return $validator->errors()->all();
    }
}
