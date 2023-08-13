<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function Contact(){
        return view('admin.contact');
    }//End Method

    public function dashboard(){
        return view('admin.index');
    }//End Method
}
