<?php

namespace App\Http\Controllers;



class PagesController extends Controller
{
    public function home(){

        $title= 'Home | Johnson Insurance Group';
        $metaDesc= '';

        return view('pages.home', compact('title', 'metaDesc'));
    }

    public function about(){

        $title= 'About | Johnson Insurance Group';
        $metaDesc= '';

        return view('pages.about', compact('title', 'metaDesc'));
    }

    public function contact(){

        $title= 'Contact | Johnson Insurance Group';
        $metaDesc= '';

        return view('pages.contact', compact('title', 'metaDesc'));
    }

    public function service(){

        $title= 'Customer Service | Johnson Insurance Group';
        $metaDesc= '';

        return view('pages.customer-service', compact('title', 'metaDesc'));
    }

    public function news(){

        $title= 'News | Johnson Insurance Group';
        $metaDesc= '';

        return view('pages.news', compact('title', 'metaDesc'));
    }


    public function business(){

        $title= 'Business Insurance | Johnson Insurance Group';
        $metaDesc= '';

        return view('pages.business', compact('title', 'metaDesc'));
    }


    public function personal(){

        $title= 'Personal Insurance | Johnson Insurance Group';
        $metaDesc= '';

        return view('pages.personal', compact('title', 'metaDesc'));
    }


}
