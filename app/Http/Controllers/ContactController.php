<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller {
    //creating method
    public function submit(ContactRequest $req) {

    	$contact = new Contact;

    	$contact->name = $req->input('name');
    	$contact->email = $req->input('email');
    	$contact->subject = $req->input('subject');
    	$contact->message = $req->input('message');
    	
    	$contact->save();

    	return redirect()->route('home')->with('success', 'Сообщение успешно добавлено!');
    }


    public function allData () {

    	$contact = new Contact;

    	//return view('messages', ['data' => [$contact->find(2)]]);	// Вывод одной строки из таблицы по id ("делаем" массив из строки)
    	
    	//return view('messages', ['data' => [$contact->inRandomOrder()->first()]]); // Вывод первой случайной строки из таблицы ("делаем" массив из строки)

    	//return view('messages', ['data' => $contact->inRandomOrder()->get()]); // Получение в случайном порядке всех строк из таблицы ("не делаем" массив, поскольку получем массив ВСЕХ строк таблицы)

    	//return view('messages', ['data' => $contact->orderBy('id', 'desc')->get()]); // Вывод всех строк по с сортировкий по определенному полю(orderBy())

    	//return view('messages', ['data' => $contact->orderBy('id', 'desc')->take(1)->get()]); // Вывод всех строк по с сортировкий по определенному полю(orderBy()) и укзанием количества строк, которое хотим вывести(take())

    	//return view('messages', ['data' => $contact->orderBy('id', 'asc')->skip(1)->take(2)->get()]); // Вывод всех строк по с сортировкий по определенному полю(orderBy()), указанием количества строк, которое хотим пропустить(skip()) и укзанием количества строк, которое хотим вывести(take())

    	//return view('messages', ['data' => $contact->where('subject', '=', 'доменное имя')->get()]); // Вывод строк по сравнению ('поле' 'сравнение' 'значение')

    	return view('messages', ['data' => $contact->all()]);
    }

   
    public function showOneMessage($id) {

    	$contact = new Contact;

    	return view('one-message', ['data' => $contact->find($id)]);
    }

	public function updateMessage($id) {

    	$contact = new Contact;

    	return view('update-message', ['data' => $contact->find($id)]);
    }    


    public function updateMessageSubmit($id, ContactRequest $req) {
    	$contact = Contact::find($id);

    	$contact->name = $req->input('name');
    	$contact->email = $req->input('email');
    	$contact->subject = $req->input('subject');
    	$contact->message = $req->input('message');
    	
    	$contact->save();

    	return redirect()->route('contact-data-one', $id)->with('success', 'Сообщение успешно отредактировано!');
    }

    public function deleteMessage($id) {

    	Contact::destroy($id);

    	return redirect()->route('contact-data')->with('success', 'Сообщение было удалено!');
    }    
}
