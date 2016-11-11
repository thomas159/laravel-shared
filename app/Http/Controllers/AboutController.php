<?php namespace App\Http\Controllers;


use App\Http\Requests\ContactFormRequest;
class AboutController extends Controller {

    public function create()
    {
        return view('about.contact');
    }

    
  public function store(ContactFormRequest $request)
{

    \Mail::send('emails.contact',
        array(
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'user_message' => $request->get('message')
        ), function($message)
    {
        $message->from('thomas159@gmail.com');
        $message->to('thomas159@gmail.com', 'Admin')->subject('New contact');
    });

  return \Redirect::route('contact')->with('message', 'Thanks for contacting us!');

}



}