<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NewsletterSubscriber;
use App\Contact;
use Mail;
class ContactUsController extends Controller
{
    
       public function contactus(Request $request) 
   {
    // $this->validate($request, [ 'firstname' => 'required', 'email' => 'required|email', 'message' => 'required' ]);
    Contact::create($request->all());

     if($request->input('subscribe') != '')
     {
      // echo "string";die();
      $this->validate($request, [
            'email' => 'required|email|max:255',
        ]);

        $subscriber = NewsletterSubscriber::where($request->only('email'))->first();

        $subscriber = NewsletterSubscriber::create($request->only('email'));

       
     }


    Mail::send('email.mail',
       array(
           'name' => $request->get('firstname'),
           'email' => $request->get('email'),
           'user_message' => $request->get('textdes')
       ), function($message)
   {
       $message->from('example@gmail.com');
       $message->to('example@gmail.com')->subject('Oudak');
   });

    return back()->with('success', 'Thanks for contacting us!'); 
   }

}
