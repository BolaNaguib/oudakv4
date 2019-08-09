<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use Mail;
class ContactUsController extends Controller
{
    // public function contactus(Request $request){
    	// $contact = new Contact();

    	// $contact->firstname= $request->firstname;
    	// $contact->lastname= $request->lastname;
    	// $contact->email= $request->email;
    	// $contact->phone= $request->phone;
    	// $contact->subject= $request->subject;
    	// $contact->textdes= $request->textdes;
    	// $contact->subscribe= $request->subscribe;
    	// $contact->save();
    	// return redirect()->back();


       public function contactus(Request $request) 
   {
    // $this->validate($request, [ 'firstname' => 'required', 'email' => 'required|email', 'message' => 'required' ]);
    Contact::create($request->all()); 

    Mail::send('email.mail',
       array(
           'name' => $request->get('firstname'),
           'email' => $request->get('email'),
           'user_message' => $request->get('textdes')
       ), function($message)
   {
       // $message->from('afzal@gmail.com');
       $message->to('mr.arslanmanzoor@gmail.com')->subject('Web Fabricant');
   });
// echo "string";
    return back()->with('success', 'Thanks for contacting us!'); 
   }
    
}
