<?php

namespace App\Http\Controllers;

use Event;
use Illuminate\Http\Request;

use App\Visitor;
use App\Events\EmailSignup;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class SignupController extends Controller
{

   public function signup()
   {
     return view('signup');
   }

   public function register(Request $request)
   {

     $this->validate($request, [
        'name' => 'required|min:3|max:150',
        'email' => 'required|email',
     ]);

     $data = [
       'name' => $request->input('name'),
       'email' => $request->input('email'),
       'phone' => $request->input('phone'),
       'occupation' => $request->input('occupation')
     ];

     $visitor = Visitor::create($data);

     Event::fire(new EmailSignup($visitor->id));

     return redirect('signup')->with('success', 'your account created!');
   }

}
