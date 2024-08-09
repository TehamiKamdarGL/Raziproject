<?php

namespace App\Http\Controllers;

use App\Mail\DemoMail;
use App\Models\Appointment;
use App\Models\Staff;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class WebsiteController extends Controller
{
    public function webIndex(){
        return view('website.index');
    }
    public function webServices(){
        return view('website.services');
    }
    public function webContact(){
        return view('website.contact');
    }
    public function webBooknow(){
        $staff = Staff::all();
        return view('website.booknow', compact('staff'));
    }
    public function bookCustomer(Request $request){
        $book = new Appointment();

        $book->name = $request->name;
        $book->email = $request->email;
        $book->date = $request->date;
        $book->time = $request->time;
        $book->service = $request->stylist;
        $book->phone = $request->phone;
        $book->message = $request->message;

        $appointment = [
            'name'=> $request->name,
            'email'=> $request->email,
            'phone'=> $request->phone,
            'date'=> $request->date,
            'time'=> $request->time,
            'stylist'=> $request->stylist,
            'message'=> $request->message,
        ];

        Mail::to($request->email)->send(new DemoMail($appointment));

        $book->save();
        return redirect('booknow')->with('success', 'Appointment Scheduled');

    }
    public function webShop(){
        return view('website.shop');
    }
}
