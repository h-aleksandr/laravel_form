<?php

namespace App\Http\Requests;

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
     * @return array
     */
    public function rules()
    {
        return [
            'name'=>'required',
            'email'=>'required|email',
            'subject'=>'required|min:2|max:50',
            'message'=>'required|min:5'
        ];
    }

    public function messages()
    {
        return [
            'name.required'=>'Поле "Ваше имя" является обязательным',
            'email.required'=>'Поле "Ваш email" является обязательным',
            'subject.required'=>'Поле "Тема сообщения" является обязательным',
            'message.required'=>'Поле "Ваше сообщение" является обязательным',
            'email.email'=>'Поле "Ваш email" должно содержать данные типа email',
            'subject.min:2'=>'Название темы должно содержать не менее 2-х символов',
            'subject.max:50'=>'Название темы должно содержать не более 50-ти символов',
            'message.min:5'=>'Содержимое сообщения должно содержать не менее 5-ти символов',
            
        ];
    }
       
}
