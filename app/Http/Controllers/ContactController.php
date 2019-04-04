<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;
use DB;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact-us');
    }

   public function store(Request $request)
   {
       $name = $request->input('name');
       $email = $request->input('email');
       $text = $request->input('text');
       DB::table('contacts')->insert([
           ['name' => $name, 'email' => $email, 'text' => $text]
       ]);
       echo "Your message has been sent. We will send answer to you within 3 days. Thanks.<br/>";
       echo '<a href = "/contact-us">Click Here</a> to go back.';
   }
}
