<?php

namespace App\Http\Controllers;

use App\Models\DolarRate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Food;
use App\Models\Specialdishes;
use App\Models\Testimonial;


class HomeController extends Controller
{
    /**
     * Variable containing navigation data.
     *
     */
    private $navdata = [
        ["text" => "home", "href" => "#home"],
        ["text" => "about", "href" => "#about"],
        ["text" => "menu", "href" => "#menu"],
        ["text" => "reviews", "href" => "#testimonial"],
        ["text" => "book", "href" => "#book"],
        ["text" => "contact", "href" => "#contact"],
    ];

    /**
     * Display a home page of RestoApp with all info.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $navdata = $this->navdata;
        $fooddata = food::all();
        $dishesdata = specialdishes::all();
        $testimonialdata = testimonial::all();
        $rate = DolarRate::where('name', 'dolar_rate')->value('rate');
        return view("home.index", compact('navdata', 'fooddata', 'dishesdata', 'testimonialdata', 'rate'));
    }
}
