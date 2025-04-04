<?php

namespace App\Http\Controllers;



class PagesController extends Controller
{
    public function home(){

        $title= '';
        $metaDesc= '';

        return view('pages.home', compact('title', 'metaDesc'));
    }
}
