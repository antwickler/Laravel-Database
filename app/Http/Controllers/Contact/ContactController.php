<?php

namespace App\Http\Controllers\Contact;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Contacts;

class ContactController extends Controller
{
    public function index()
    {
        $contact = Contacts::all();
        return view('contact.index')->with('contact', $contact);
    }

    public function create()
    {
        return view('contact.create');
    }

    public function store(Request $request)
    {
        //dd( $request->all());
        Contacts::create( $request->all() );
        return redirect('contact');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
