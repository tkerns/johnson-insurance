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

    public function news(){

        $title= '';
        $metaDesc= '';

        return view('pages.news', compact('title', 'metaDesc'));
    }

    // Business Insurance

    public function business(){

        $title= '';
        $metaDesc= '';

        return view('pages.business-insurance.index', compact('title', 'metaDesc'));
    }

    public function aviation(){

        $title= '';
        $metaDesc= '';

        return view('pages.business-insurance.aviation', compact('title', 'metaDesc'));
    }

    public function commercialAuto(){

        $title= '';
        $metaDesc= '';

        return view('pages.business-insurance.commercial-auto-trucking', compact('title', 'metaDesc'));
    }

    public function commercialProperty(){

        $title= '';
        $metaDesc= '';

        return view('pages.business-insurance.commercial-property', compact('title', 'metaDesc'));
    }

    public function cyber(){

        $title= '';
        $metaDesc= '';

        return view('pages.business-insurance.cyber-liability', compact('title', 'metaDesc'));
    }

    public function employmentPractices(){

        $title= '';
        $metaDesc= '';

        return view('pages.business-insurance.employment-practices', compact('title', 'metaDesc'));
    }

    public function equipment(){

        $title= '';
        $metaDesc= '';

        return view('pages.business-insurance.equipment', compact('title', 'metaDesc'));
    }

    public function generalLiability(){

        $title= '';
        $metaDesc= '';

        return view('pages.business-insurance.general-liability', compact('title', 'metaDesc'));
    }

    public function liquor(){

        $title= '';
        $metaDesc= '';

        return view('pages.business-insurance.liquor', compact('title', 'metaDesc'));
    }

    public function marine(){

        $title= '';
        $metaDesc= '';

        return view('pages.business-insurance.ocean-marine', compact('title', 'metaDesc'));
    }

    public function professionalLiability(){

        $title= '';
        $metaDesc= '';

        return view('pages.business-insurance.professional-liability', compact('title', 'metaDesc'));
    }

    public function businessUmbrella(){

        $title= '';
        $metaDesc= '';

        return view('pages.business-insurance.umbrella', compact('title', 'metaDesc'));
    }

    public function workersComp(){

        $title= '';
        $metaDesc= '';

        return view('pages.business-insurance.workers-comp', compact('title', 'metaDesc'));
    }

    // Personal Insurance

    public function personal(){

        $title= '';
        $metaDesc= '';

        return view('pages.personal-insurance.index', compact('title', 'metaDesc'));
    }

    public function atv(){

        $title= '';
        $metaDesc= '';

        return view('pages.personal-insurance.atv', compact('title', 'metaDesc'));
    }

    public function personalAuto(){

        $title= '';
        $metaDesc= '';

        return view('pages.personal-insurance.auto', compact('title', 'metaDesc'));
    }

    public function homeowners(){

        $title= '';
        $metaDesc= '';

        return view('pages.personal-insurance.homeowner', compact('title', 'metaDesc'));
    }

    public function rv(){

        $title= '';
        $metaDesc= '';

        return view('pages.personal-insurance.rv', compact('title', 'metaDesc'));
    }

    public function snowmachine(){

        $title= '';
        $metaDesc= '';

        return view('pages.personal-insurance.snowmachine', compact('title', 'metaDesc'));
    }

    public function personalUmbrella(){

        $title= '';
        $metaDesc= '';

        return view('pages.personal-insurance.umbrella', compact('title', 'metaDesc'));
    }

    public function watercraft(){

        $title= '';
        $metaDesc= '';

        return view('pages.personal-insurance.watercraft', compact('title', 'metaDesc'));
    }


}
