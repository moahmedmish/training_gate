<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller; // Import the base Controller

use App\Models\Gallery;
use App\Models\Member;
use App\Models\Page;
use App\Models\Project;
use App\Models\Service;
use App\Models\Setting;
use App\Models\Slider;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function about()
    {
        $about = Page::where('title_en', 'About Us')->first();
        $yOfExperienceCount =  Setting::where('name', 'years of experience')->first()->value;
        $typesOfNaturalStoneCount =  Setting::where('name', 'types of natural stone')->first()->value;
        $m2ofnaturalstoneinstockCount =  Setting::where('name', 'm2 of natural stone in stock')->first()->value;
        $services = Service::where('publish', 1)->get();
        $projects = Project::all();
        $members = Member::all();


        return view('inner')
            ->with('about', $about)
            ->with('yOfExperienceCount', $yOfExperienceCount)
            ->with('typesOfNaturalStoneCount', $typesOfNaturalStoneCount)
            ->with('m2ofnaturalstoneinstockCount', $m2ofnaturalstoneinstockCount)
            ->with('services', $services)
            ->with('projects', $projects)
            ->with('members', $members)
            ;
    }

    public function serviceDetails(Service $service)
    {
        $services = Service::where('publish', 1)->get();
        $projects = Project::all();

        return view('service-details')
            ->with('services', $services)
            ->with('service', $service)
            ->with('projects', $projects)
            ;
    }

    public function collectionDetails()
    {
        $galleries = Gallery::paginate(10); // Paginate the galleries (10 items per page)
        $services = Service::where('publish', 1)->get();
        $projects = Project::all();
        $page = Page::where('route_name', 'collection')->first();
    
        return view('collection-details')
            ->with('galleries', $galleries)
            ->with('services', $services)
            ->with('projects', $projects)
            ->with('page', $page);
    }


    public function projectDetails(Project $project)
    {

        $services = Service::where('publish', 1)->get();
        $projects = Project::all();


        return view('project-details')
            ->with('project', $project)
            ->with('services', $services)
            ->with('projects', $projects)
            ;
    }


    public function contactDetails()
    {

        $galleries = Gallery::all();
        $services = Service::where('publish', 1)->get();
        $projects = Project::all();

        return view('contact')
            ->with('galleries', $galleries)
            ->with('services', $services)
            ->with('projects', $projects)

            ;
    }

    public function joinDetails()
    {

        $galleries = Gallery::all();
        $services = Service::where('publish', 1)->get();
        $projects = Project::all();

        return view('join')
            ->with('galleries', $galleries)
            ->with('services', $services)
            ->with('projects', $projects)

            ;
    }


    public function catalog()
    {

        $galleries = Gallery::all();
        $services = Service::where('publish', 1)->get();
        $projects = Project::all();

        return view('catalog')
            ->with('galleries', $galleries)
            ->with('services', $services)
            ->with('projects', $projects)

            ;
    }


}


