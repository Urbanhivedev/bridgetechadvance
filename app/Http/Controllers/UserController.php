<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appoint;
use App\Models\Time;
use App\Model\User;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    public function index(){
  
        #if a session value is a certain number return a certain page (consider using template literals to dynamically change page)
        return view('user.freestudent_tutorial');
    }

    public function students(){

        $book =  Appoint::latest()->paginate(5);

        return view('user.student' , compact('book'));
    }

    public function class(){
        $tst = Time::all();

        return view('user.class' , compact('tst'));
    }


    public function bookclass(Request $request){

    //if payment goes through ,THEN PUT THESE IN THE DATABASE AND SAY YOU HAVE SUCCESSFULLY BOOKED , OTHERWISE REDIRECT THEM WITH PAYMENT UNSUCCESSFUL ,
   // PLEASE TRY TO BOOK AGAIN 

        Appoint::insert([

            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'phone' => $request->phone,
            'course' => $request->developer, /*i made course to be the same as developer so it wont be empty in the database */
            'developer' => $request->developer,
            'date' => $request->date,
            'date' => $request->time,
            'user_id' => Auth::user()->id,
        ]);

         

        return redirect()->back()->with('success', 'Congratulations! You have successfully booked a class.');

    }

    public function bookaclass(){

        $tst = Time::all();


        return view('user.class' , compact('tst'));
        
    }

    public function classtimetable(Request $request){

        Time::insert([

            'time' => $request->time,
        
        ]);


    }


}
