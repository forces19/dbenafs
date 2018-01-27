<?php

namespace App\Http\Controllers;
use App\Contact;
use Session;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contact_list = Contact::orderBy('id', 'dsc')->paginate(5);
        $jumlah_contact = Contact::count();
        $currentpage = $contact_list->currentPage();
        return view('home', compact('contact_list','jumlah_contact', 'currentpage'));
    }
}
