<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Developers;
use App\Models\Appoint;
use App\Models\Time;
use Illuminate\Support\Facades\Auth;
use App\Model\User;


class AdminController extends Controller
{
    //

    public function developer(){
        $developer = new developers;

        return view('admin.addprogrammer' , compact('developer'));
    }


    public function instructors(){
        $developer = developers::all();

        return view('admin.instructor' , compact('developer'));

    }
    public function tutorial(){

        return view('admin.freetutorial');
    }

    public function developers(Request $request){

        $developer = new developers;

        $brand_image = $request->file('image');
        $name_gen = hexdec(uniqid());
        $img_ext = strtolower($brand_image->getClientOriginalExtension());
        $img_name = $name_gen.'.'.$img_ext;
        $up_location = 'image/';
        $last_img = $up_location.$img_name;
        $brand_image->move($up_location, $img_name);

        Developers::insert([

            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'course' => $request->course,
            'message' => $request->message,
             'image' => $last_img,

    ]);

    return redirect()->back()->with('success', 'Congratulation developer created successfully');



    }

    public function bookaclass(){

        $tst = Time::all();


        return view('admin.class' , compact('tst'));
        
    }

    public function students(){

        $book =  Appoint::latest()->paginate(5);

        return view('admin.student' , compact('book'));
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
            'time' => $request->time,
            'user_id' => Auth::user()->id,
        ]);

         

        return redirect()->back()->with('success', 'Congratulation you hav successfully book a class');

    }

    public function classtimetable(Request $request){

        Time::insert([

            'time' => $request->time,
        
        ]);


    }


}
