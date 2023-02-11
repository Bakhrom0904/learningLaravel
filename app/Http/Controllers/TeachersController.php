<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TeachersController extends Controller
{
    public function create()
    {
        $teachers=DB::table('users')->get();
        return view('teachers.create',compact('teachers'));
    }

    public function store(Request $request)
    {
        DB::table('teachers')->insert([
           'name'=>$request->name,
            'address'=>$request->address,
            'phone'=>$request->phone,
            'email'=>$request->email,
            'status'=>0

        ]);
        return redirect('/teachers');
    }
}
