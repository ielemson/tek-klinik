<?php

namespace App\Http\Controllers;

use App\Mail\BookMeeting;
use App\Mail\ContactFormMail;
use App\Models\Service;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Captcha;

class GeneralController extends Controller
{
    public function index(){
        $services = Service::where("status",1)->get();
            // $services = Service::with('children')
            // ->whereNull('parent_id')
            // ->where('status', 'active')
            // ->get();
        $sliders = Slider::where("status",true)->get();
        return view("index",compact("services","sliders"));
    }
    
    public function about(){
        $services = Service::where("status",1)->get();
        return view("about",compact("services"));
    }
    public function career(){
        $services = Service::where("status",1)->get();
        return view("careers",compact("services"));
    }

    public function contact(){
        $services = Service::where("status",1)->get();
        return view("contact",compact("services"));
    }

       public function book_meeting(){
        $services = Service::where("status",1)->get();
        return view("bookmeeting",compact("services"));
    }
    public function our_service($slug){
        $service = Service::where("slug",$slug)->first();
        $services = Service::where("status",1)->get();
        return view('ourservice',compact("service","services"));
    }
    public function our_services(){
          $services = Service::where("status",1)->get();
        return view('ourservices',compact("services"));
    }

    public function contact_submit(Request $request){

        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string',
            'organization' => 'required|string',
            'services' => 'required|string',
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
    public function schedule_meeting(Request $request){

        $validator = Validator::make($request->all(), [
            'fname' => 'required|string',
            'sname' => 'required|string',
            'meetingDate' => 'required',
            'meetingTime' => 'required',
            'email' => 'required|email',
            'message_body' => 'required|string',
            'captcha' => 'required|captcha',
        ]);

        
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        // Send the email
        $data = $request->all();
        Mail::to('info@tek-klinik.com')->send(new BookMeeting($data));

        return response()->json(['message' => 'Your message has been sent successfully!']);
        
        return response()->json([
            'message' => 'Your meeting has been booked successfully'
        ], 200);
    }

    public function refreshCaptcha()
    {
        return response()->json(['captcha'=> captcha_img()]);
    }

 
}
