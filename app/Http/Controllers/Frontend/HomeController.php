<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller; // Import the base Controller
use App\Models\Client;
use App\Models\Gallery;
use App\Models\Member;
use App\Models\Page;
use App\Models\Project;
use App\Models\Service;
use App\Models\Setting;
use App\Models\Slider;
use App\Models\PhotoSetting;
use App\Models\SubPage;
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
        // If you need to add conditions
        $menus = Page::select('pages.*')
            ->with(['subPages' => function($query) {
                $query->select('sub_pages.*', 'page_id')
                ->where('publish', '1');  // Example condition
            }])
            ->where('pages.publish', '1')
            ->where('on_menu', '1')
            ->orderBy('pages.menu_order')
            ->get()->toArray();

        $footer_menus = Page::select('pages.*')
            ->where('pages.publish', '1')
            ->where('show_footer', '1')
            ->orderBy('pages.menu_order')
            ->limit(5)
            ->get()->toArray();

        $submenus = SubPage::select('sub_pages.*')
            ->where('publish', '1')
            ->orderBy('menu_order')
            ->limit(5)
            ->get()->toArray();


        $sliders = Slider::where('publish', 1)->get();
        $projects = Project::all()->toArray();
        $services = Service::where('publish', 1)->get();
        $galleries = Gallery::all();
        // get all setting
        $facts_setting = Setting::where('path', 'facts')->get()->toArray();
        $global_setting = Setting::where('path', 'global')->get()->toArray();
        $clients = Client::all();
        $logos = PhotoSetting::all()->toArray();

        $members = Member::all()->take(3);

        return view('inner')
            ->with('sliders', $sliders)
            ->with('services', $services)
            //->with('galleries', $galleries)
            //->with('projects', $projects)
            ->with('clients', $clients)
            //->with('members', $members)
            ->with('logos', $logos)
            ->with('menus', $menus)
            ->with('footer_menus',$footer_menus )
            ->with('submenus',$submenus)
            ->with('facts_settings', $facts_setting)
            ->with('global_settings',$global_setting);
    }


    public function showmain()
    {
        dd("main");
    }

    public function showsub()
    {
        dd("sub page");
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
