<?php

namespace App\Http\Controllers;

use App\Models\Aboutus;
use App\Models\ContactHeaderPhoto;
use App\Models\Features;
use App\Models\Home;
use App\Models\Plan;
use App\Models\Pricing;
use App\Models\ProjectHeaderPhoto;
use App\Models\Projects;
use App\Models\ServiceHeaderPhoto;
use App\Models\Services;
use App\Models\Whychoose;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function home()
    {
        $home_data = Home::all();
        $services_data = Services::all();
        $features_data = Features::all();
        $pricings_data = Pricing::all();
        $plan_data = Plan::all();
        $pgname='home';
        return view('front.home', compact('pgname','home_data','services_data','features_data','pricings_data','plan_data'));
    }
    public function about()
    {
        $home_data = Home::all();
        $services_data = Services::all();
        $features_data = Features::all();
        $aboutus_data = Aboutus::all();
        $whychoose_data = Whychoose::all();
        $pgname='about';
        return view('front.about', compact('pgname','home_data','services_data','features_data','aboutus_data','whychoose_data'));
    }
    public function service()
    {
        $home_data = Home::all();
        $services_data = Services::all();
        $services_header_data = ServiceHeaderPhoto::all();
        $pgname='service';
        return view('front.service', compact('pgname','home_data','services_data','services_header_data'));
    }
    public function service_details()
    {
        $home_data = Home::all();
        $services_data = Services::all();
        $services_header_data = ServiceHeaderPhoto::all();
        $pgname='service_details';
        return view('front.service-details', compact('pgname','home_data','services_data','services_header_data'));
    }
    public function project()
    {
        $home_data = Home::all();
        $services_data = Services::all();
        $projects = Projects::all();
        $projects_header_data = ProjectHeaderPhoto::all();
        $pgname='project';
        return view('front.project', compact('pgname','home_data','projects','services_data','projects_header_data'));
    }
    public function project_details()
    {
        $home_data = Home::all();
        $services_data = Services::all();
        $projects_header_data = ProjectHeaderPhoto::all();
        $projects = Projects::join('services','services.id','=','projects.project_service_id')
            ->select('projects.*', 'services.name as service_name')
            ->get();
        $pgname='project_details';
        return view('front.project-details', compact('pgname','home_data','services_data','projects','projects_header_data'));
    }
    /*public function blog()
    {
        $home_data = Home::all();
        $services_data = Services::all();
        $pgname='blog';
        return view('front.blog', compact('pgname','home_data','services_data'));
    }
    public function blog_details()
    {
        $home_data = Home::all();
        $services_data = Services::all();
        $pgname='blog_details';
        return view('front.blog-details', compact('pgname','home_data','services_data'));
    }
    public function blog_standard()
    {
        $home_data = Home::all();
        $services_data = Services::all();
        $pgname='blog_standard';
        return view('front.blog-standard', compact('pgname','home_data','services_data'));
    }*/
    public function contact()
    {
        $home_data = Home::all();
        $contacts_header_data = ContactHeaderPhoto::all();
        $services_data = Services::all();
        $pgname='contact';
        return view('front.contact', compact('pgname','home_data','services_data','contacts_header_data'));
    }
    public function error()
    {
        $home_data = Home::all();
        $services_data = Services::all();
        $pgname='contact';
        return view('front.error', compact('pgname','home_data','services_data'));
    }
}
