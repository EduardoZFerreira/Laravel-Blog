<?php

namespace App\Http\Controllers;

class PagesController extends Controller{
    public function getIndex(){
        return view('Pages.welcome');
    }

    public function getAbout(){
        $first = "Eduardo";
        $last = "Ferreira";
        $email = "eduardo@acm.com.br";
        $full = $first . ' ' . $last;
        $data = [];
        $data['name'] = $full;
        $data['email'] = $email;
        return view('Pages.about')->withData($data);
    }

    public function getContact(){
        return view('Pages.contact');
    }

    public function postContact(){

    }
}