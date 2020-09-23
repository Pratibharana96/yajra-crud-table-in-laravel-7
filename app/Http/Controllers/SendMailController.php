<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use Illuminate\Http\Request;
use Mail;
use App\Mail\SendMail;
use App\Event\UserCreate;
class SendMailController extends Controller
{
    public function index()
    {
       
        return view('welcome');
    }
    public function event()
    {
        event(new UserCreate("Email has been send on your Gmail address"));
    }
    public function send(Request $request)
    {
    $this->validate($request,[
        'name'=>'required',
        'email' =>'required|email',
        'message' =>'required',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg'
    ]);
    $toname="pratibharana";
    $toemail="pratibharana596@gmail.com";
    $data = array(
        'name' => $request->name,
        'email' =>$request->email,
        'message' =>$request->message,
        'image'   =>$request->image,
        'url_file' => $request->file('image')	
        
    );
  	
    Mail::to('pratibharana596@gmail.com')
    ->send(new SendMail($data));
    return back()->with('success', 'Thanks for contacting us!');
   
   
    }

}
