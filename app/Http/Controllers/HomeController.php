<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Gallery;
use App\Models\Member;
use App\Models\Project;
use App\Models\Service;
use App\Models\Setting;
use App\Models\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
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
    public function index()
    {
        $sliders = Slider::where('publish', 1)->get();
        $projects = Project::all();
        $services = Service::where('publish', 1)->get();
        $galleries = Gallery::all();
        $clients = Client::all();
        $members = Member::all()->take(3);
        $yOfExperienceCount =  Setting::where('name', 'years of experience')->first()->value;
        $typesOfNaturalStoneCount =  Setting::where('name', 'types of natural stone')->first()->value;
        $m2ofnaturalstoneinstockCount =  Setting::where('name', 'm2 of natural stone in stock')->first()->value;

        return view('home')
            ->with('sliders', $sliders)
            ->with('services', $services)
            ->with('galleries', $galleries)
            ->with('projects', $projects)
            ->with('clients', $clients)
            ->with('members', $members)
            ->with('yOfExperienceCount', $yOfExperienceCount)
            ->with('typesOfNaturalStoneCount', $typesOfNaturalStoneCount)
            ->with('m2ofnaturalstoneinstockCount', $m2ofnaturalstoneinstockCount)

            ;
    }


}

//
//namespace App\Http\Controllers;
//
//use App\Models\Slider;
//use Illuminate\Http\Request;
//
//class HomeController extends Controller
//{
//    /**
//     * Create a new controller instance.
//     *
//     * @return void
//     */
//    public function __construct()
//    {
////        $this->middleware('auth');
//    }
//
//    /**
//     * Show the application dashboard.
//     *
//     * @return \Illuminate\Contracts\Support\Renderable
//     */
//    public function index()
//    {
//        $sliders = Slider::where('publish', 1)->get();
//        return view('home1')->with('sliders', $sliders);
//    }
//}
