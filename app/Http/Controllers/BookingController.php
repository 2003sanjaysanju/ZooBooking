<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

class BookingController extends Controller
{
    public function bookingForm(){
        return view('bookTicket.form');
    }
    public function booking(Request $request){
        if($request){
            $validatedData = $request->validate([
                'name' => 'required',
                'phone' => 'required|string|regex:/^([0-9\s\-\+\(\)]*)$/|max:10', // Adjust max length as needed
                'email' => 'required|email|unique:bookings,email',
                'address' => 'required',
                'number_of_members' => 'required|integer|min:1|max:99',
                'date' => 'required|date',
                'time' => 'required',  // Restrict to a maximum of 99 members
            ]);        
            // Generate a random ticket ID
                $randomTicketId = strtoupper(substr(str_shuffle('abcdefghijklmnopqrstuvwxyz'), 0, 3)) . rand(1000, 999999);
                // Add the ticket ID to the validated data
                $validatedData['ticket_id'] = $randomTicketId;
                $data = Booking::create($validatedData);
            return view('bookTicket.ticket',compact('data'));
        }
        else{
            dd("sorry bye bye");
        }
    }

    public function ticket(){
        return view('bookTicket.checkTicket');
    }
    public function checkTicket(Request $request){
        $validatedData = $request->validate([
            'email' => 'required|email',  // Restrict to a maximum of 99 members
        ]);    
        $data = Booking::where('email',$validatedData['email'])->first();
        if($data){
            return view('bookTicket.ticket',compact('data'));
        }else{
            return view('bookTicket.notAvailable');
        }
    }
}
