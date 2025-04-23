<?php

namespace App\Http\Controllers;
use App\Mail\MYtestmail;
use Illuminate\Http\Request;
use App\Models\contact;
use Illuminate\support\Facades\Mail;



class SiteController extends Controller
{
    public function index()
    {
        return view( 'index');
    }

    public function services()
    {
        return view('services' , ['name'=> 'Jensi']);
    }
    public function serviceProvider($id)
    {

        return view('services',);

    }
    public function about()
    {
        return view('about');
    }
    public function contact()
    {
        return view('contact');
    }
    public function product()
    {
        return view('our-product');
    }
    public function login()
    {
        return view('login');
    }
    public function registration()
    {
        return view('registration');
    }
    public function contactSave( Request $request)
    {
        $request->validate([
        'name' => "required",
        'email' => "required",
        'subject' => "required",
        'message' => "required",
        'picture'=> "required|image| mimes:png,jpg|max:2048"
        ]);
//file upload code start here
$uploadImageName = $request->file('picture');
$imageName = time().'.'.$uploadImageName->getClientOriginalExtension();
$destinationpath = public_path('upload');
$uploadImageName->move($destinationpath,$imageName);
//file upload code end here

        $name = $request->input('name');
        $email = $request->input('email');
        $subject = $request->input('subject');
        $message = $request->input('message');

        $contact = new contact();
        $contact->name=$name;
        $contact->email=$email;
        $contact->subject=$subject;
        $contact->message=$message;
        $contact->picture=$imageName;


        $contact->save();
        dd('contact us form successfuly submitted');
    }
     public function sendEmail(Request $request){
        //dd($request->all());
$email = $request->input('email');
        $details = [
            "email"=>$email,
            "title" => "Email subscribe",
            "body" => "This is test mail by laravel SMTP"
        ];
        Mail::to($email)->send(new Mytestmail($details));
        dd('mail sent successfully');


     }



}
