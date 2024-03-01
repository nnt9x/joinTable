<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    // orm
    function viewHome1()
    {
        // Lay du lieu
        $contacts = Contact::with('addresses')->get();
        // Tra ve du lieu
        return view('home1', ['contacts' => $contacts]);
    }

    // join bang
    function viewHome2()
    {
        // Lay du lieu
        $contacts = DB::table('contacts')->join('addresses', 'contacts.id', '=', 'addresses.contact_id')
            ->get();
        dd($contacts);

    }
}
