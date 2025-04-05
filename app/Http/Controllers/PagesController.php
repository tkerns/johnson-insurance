<?php

namespace App\Http\Controllers;



class PagesController extends Controller
{
    public function home(){

        $title= '';
        $metaDesc= '';

        return view('pages.home', compact('title', 'metaDesc'));
    }

    public function about(){

        $title= '';
        $metaDesc= '';

        return view('pages.about', compact('title', 'metaDesc'));
    }

    public function contact(){

        $title= '';
        $metaDesc= '';

        return view('pages.contact', compact('title', 'metaDesc'));
    }

    public function service(){

        $title= '';
        $metaDesc= '';

        return view('pages.customer-service', compact('title', 'metaDesc'));
    }

    // Business Insurance

    public function business(){

        $title= '';
        $metaDesc= '';

        return view('pages.business-insurance.index', compact('title', 'metaDesc'));
    }

    // Personal Insurance

    public function personal(){

        $title= '';
        $metaDesc= '';

        return view('pages.personal-insurance.index', compact('title', 'metaDesc'));
    }


}
