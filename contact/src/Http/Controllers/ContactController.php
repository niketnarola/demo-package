<?php

namespace Ssn\Contact\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Ssn\Contact\Models\Contact;
use Ssn\Contact\Mail\ContactMailable;
use Mail;
class ContactController extends Controller
{
	public function index()
	{
		return view('contact::contact');
	}

	public function send(Request $request)
	{
		Mail::to(config('contact.send_email_to'))->send(new ContactMailable($request->message));
		Contact::create($request->all());
		return redirect(route('contact'));
	}
}
?>