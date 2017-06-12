<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Mail;
class SendMailController extends Controller
{
    public function contact(Request $request)
    {
    	$name = $request->input('Name');
    	$email = $request->input('Emil');
    	$fax = $request->input('Fax');
    	$subject = $request->input('Subject');

    	$content = [
    		'name'=> $name, 
    		'email'=> $email,
    		'fax'=> $fax,
    		'subject'=> $subject
    		];

    	$receiverAddress = 'your email';

    	Mail::to($receiverAddress)->send(new ContactMail($content));

    	dd('mail send successfully');
    }
}
