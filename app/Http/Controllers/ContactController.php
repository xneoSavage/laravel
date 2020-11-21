<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;
class ContactController extends Controller
{
    public function submit(ContactRequest $req) {

        $contact = new Contact();
        $contact->name = $req->input('name');
        $contact->email = $req->input('email');
        $contact->subject = $req->input('subject');
        $contact->message = $req->input('message');
        //попробовать написать контакт с временем без передачи значения пользователя
        $contact->save();

        return redirect()->route('home')->with('success', 'Message added');
    }
    public function alldata() {
        $contact = new Contact;
        //$contact->orderBy('id','asc')->skip(1)->take(1)->get()]
        return view('/pages/messages', ['data' => $contact->all()]);
    }
    public function showOneMessage($id) {
        $contact = new Contact;
        return view('/pages/one-message', ['data' => $contact->find($id)]);
    }
    public function updateMessage($id) {
        $contact = new Contact;
        return view('/pages/contact-update', ['data' => $contact->find($id)]);
    }
    public function updateMessageSubmit($id, ContactRequest $req) {

        $contact = Contact::find($id);
        $contact->name = $req->input('name');
        $contact->email = $req->input('email');
        $contact->subject = $req->input('subject');
        $contact->message = $req->input('message');
        //попробовать написать контакт с временем без передачи значения пользователя
        $contact->save();

        return redirect()->route('contact-data-one', $id)->with('success', 'Message updated');
    }
    public function deleteMessage($id) {
        Contact::find($id)->delete();
        return redirect()->route('contact-data')->with('success', 'Message deleted');
    }

}
