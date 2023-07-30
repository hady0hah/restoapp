<?php

namespace App\Http\Controllers;

use App\Models\DolarRate;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RateController extends  Controller
{
    /**
     * Check if current user is admin.
     *
     * @return Boolean true/false
     */
    public function GetIsAdmin()
    {
        return Auth::id() && Auth::user()->usertype = "1" ? true : false;
    }

    /**
     * Display Dolar Rate Entry
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

//        $data = DolarRate::all();
        $data = DolarRate::where('name', 'dolar_rate')->value('rate');
        $user = Auth::id() ? Auth::user() : null;
//        dump($user);
        $isAdmin = $this->GetIsAdmin();
        $rate = DolarRate::where('name', 'dolar_rate')->value('rate');
        return view("admin.change_dolar_rate", compact("data", "isAdmin", "user","rate"));
    }

//    /**
//     * Show the form for creating a new testimonial entry.
//     *
//     * @return \Illuminate\Http\Response
//     */
//    public function create()
//    {
//        $user = Auth::id() ? Auth::user() : null;
//        $isAdmin = $this->GetIsAdmin();
//        return view("admin.pages.review.createreview", compact("user", "isAdmin"));
//    }

    /**
     * Store a newly created testimonial entry in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $isAdmin = $this->GetIsAdmin();
        if($isAdmin === true){

            $data = new DolarRate();
            $data->rate = $request->rate;
            $data->name = 'dolar_rate';

            $data->save();

            return redirect()->route('rate.index')->with('msg', 'New entry created');
        }
        return redirect()->route('rate.index')->with('msg', "Can't create entry" );
    }


    /**
     * Update the specified entry in storage.
     *
     * @param  \Illuminate\Http\Request  $request
//     * @param  $rate->id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $isAdmin = $this->GetIsAdmin();
        if($isAdmin === true){

            $data = DolarRate::where('name','dolar_rate')->firstOrFail();

            $data->name = 'dolar_rate';
            $data->rate = $request->rate;

            $data->save();

            return redirect()->route('rate.index')->with('msg', 'Dolar Rate entry was edited !');
        }
        return redirect()->route('rate.index')->with('msg', "Can't edit Dolar Rate !" );
    }

}
