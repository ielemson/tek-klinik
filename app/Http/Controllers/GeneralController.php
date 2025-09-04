<?php

namespace App\Http\Controllers;

use App\Mail\BookMeeting;
use App\Mail\ContactFormMail;
use App\Models\Service;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;

class GeneralController extends Controller
{
    public function index()
    {
        $services = Service::where("status", 1)->get();
        $sliders = Slider::where("status", true)->get();

        return view("index", compact("services", "sliders"));
    }

    public function about()
    {
        $services = Service::where("status", 1)->get();
        return view("about", compact("services"));
    }

    public function career()
    {
        $services = Service::where("status", 1)->get();
        return view("careers", compact("services"));
    }

    public function contact()
    {
        $services = Service::where("status", 1)->get();
        return view("contact", compact("services"));
    }

    public function bookMeeting()
    {
        $services = Service::where("status", 1)->get();
        return view("bookmeeting", compact("services"));
    }

    public function ourService($slug)
    {
        $service = Service::where("slug", $slug)->first();
        $services = Service::where("status", 1)->get();

        return view("ourservice", compact("service", "services"));
    }

    public function ourServices()
    {
        $services = Service::where("status", 1)->get();
        return view("ourservices", compact("services"));
    }

    public function contactSubmit(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'         => 'required|string|max:255',
            'email'        => 'required|email',
            'phone'        => 'required|string',
            'organization' => 'required|string',
            'services'     => 'required|string', // change to array if multiple values
            'captcha'      => 'required|captcha',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        Mail::to('info@tek-klinik.com')->send(new ContactFormMail($request->all()));

        return response()->json([
            'message' => 'Your message has been sent successfully!'
        ], 200);
    }

    public function scheduleMeeting(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'fname'        => 'required|string',
            'sname'        => 'required|string',
            'meetingDate'  => 'required|date',
            'meetingTime'  => 'required',
            'email'        => 'required|email',
            'message_body' => 'required|string',
            'captcha'      => 'required|captcha',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        Mail::to('info@tek-klinik.com')->send(new BookMeeting($request->all()));

        return response()->json([
            'message' => 'Your meeting has been booked successfully!'
        ], 200);
    }

    public function refreshCaptcha()
    {
        return response()->json(['captcha' => captcha_img()]);
    }
}
