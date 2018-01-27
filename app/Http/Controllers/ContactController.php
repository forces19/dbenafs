<?php

namespace App\Http\Controllers;
use App\Contact;
use Session;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request){
        $data = $request->all();
        Contact::create($data);

        Session::flash('flash_message', 'Pesan berhasil dikirim');
        return view('welcome');
    }
}
