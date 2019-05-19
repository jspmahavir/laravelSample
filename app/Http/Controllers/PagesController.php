<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home() {
        $tasks = [
            'Go To Home',
            'Work back',
            'Go to Office'
        ];
        return view('welcome')->with([
            'foo' => 'bar',
            'tasks' => $tasks
        ]);
   }

    public function contact() {
        return view('contact');
   }

    public function aboutus() {
        return view('aboutus');
    }
}
