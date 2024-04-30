<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegistrationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|regex:/^[А-Яа-яЁё\s-]+$/u',
            'password' => 'required|min:6',
            'number' => 'required|unique:users|regex:/^\+7(\d{3})\d{7}$/',
        ];
    }

    public function messages(): array
    {
        return [
            'required' => 'Это поле обязательно для заполнения',
            'unique' => 'Значение уже занято',
            'number.regex' => 'Введите корректный номер телефона',
            'name.regex' => 'Разрешены только кириллица, пробел и тире',
            'min' => 'Пароль должен содержать не меньше 6 символов',
        ];
    }
}
