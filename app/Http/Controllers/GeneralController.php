<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Captcha;

class GeneralController extends Controller
{
    public function index(){
        $services = Service::where("status",1)->get();
        return view("welcome",compact("services"));
    }
    
    public function about(){
        $services = Service::where("status",1)->get();
        return view("about",compact("services"));
    }

    public function contact(){
        $services = Service::where("status",1)->get();
        return view("contact",compact("services"));
    }

    public function our_service($slug){
        $service = Service::where("slug",$slug)->first();
        $services = Service::where("status",1)->get();
        return view('ourservices',compact("service","services"));
    }

    public function contact_submit(Request $request){

        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'subject' => 'required|string',
            'message_body' => 'required|string',
            'captcha' => 'required|captcha',
        ]);

        
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        // Send the email
        $data = $request->all();
        Mail::to('info@tek-klinik.com')->send(new ContactFormMail($data));

        return response()->json(['message' => 'Your message has been sent successfully!']);
        
        return response()->json([
            'message' => 'Your message has been sent successfully!'
        ], 200);
    }

    public function refreshCaptcha()
    {
        return response()->json(['captcha'=> captcha_img()]);
    }
}
