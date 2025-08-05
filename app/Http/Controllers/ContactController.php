<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
    public function index() {
        $contacts = Contact::all();

        foreach ($contacts as $contact) {
            $contact->nome = decrypt($contact->nome);
            $contact->email = decrypt($contact->email);
            $contact->telefone = decrypt($contact->telefone);
            $contact->data_nascimento = $contact->data_nascimento;
        }
        return view('contact', compact('contacts'));
    }

    public function storeDataEncrypt() {
        $contact = new Contact();

        $contact->nome = encrypt('Matheus');
        $contact->email = encrypt('matheushsouto@gmail.com');
        $contact->telefone = encrypt('42984038928');
        $contact->data_nascimento = '1997-10-10';

        $contact->save();
    }
}
