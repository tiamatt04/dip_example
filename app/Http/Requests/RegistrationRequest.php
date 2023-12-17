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
            'name' => 'required|regex:/^[А-Яа-яЁё\s-]+$/u',
            'surname' => 'required|regex:/^[А-Яа-яЁё\s-]+$/u',
            'patronymic' => 'nullable|regex:/^[А-Яа-яЁё\s-]+$/u',
            'login' => 'required|unique:users|regex:/^[A-Za-z0-9-]+$/u',
            'email' => 'required|unique:users|email',
            'password' => 'required|min:6',
            'repeatPassword' => 'required|same:password',
        ];
    }

    public function messages()
    {
        return [
            'required' => 'Это поле обязательно для заполнения',
            'unique' => 'Значение уже занято',
            'same' => 'Пароли не совпадают',
            'name.regex' => 'Разрешены только кириллица, пробел и тире',
            'surname.regex' => 'Разрешены только кириллица, пробел и тире',
            'patronymic.regex' => 'Разрешены только кириллица, пробел и тире',
            'login.regex' => 'Разрешены только латиница, цифры и тире',
            'email' => 'Введите корректный адрес',
            'min' => 'Пароль должен содержать не меньше 6 символов',
        ];
    }
}
