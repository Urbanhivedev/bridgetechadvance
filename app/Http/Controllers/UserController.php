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

        Appoint::insert([

            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'phone' => $request->phone,
            'course' => $request->course,
            'developer' => $request->developer,
            'date' => $request->date,
            'date' => $request->time,
            'user_id' => Auth::user()->id,
        ]);

         

        return redirect()->back()->with('success', 'Congratulation you hav successfully book a class');

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
