<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class Quote extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index($id, $i)
    {
        $quote = DB::table('sessions')->where('uid', '=', $id)->get();
        $package = DB::table('packages')->where('id', '=', $quote[0]->package)->get();
        $price = DB::table('prices')->where('id', '=', $quote[0]->price_id)->get();
        $tank = DB::table('tanks')->where('id', '=', $quote[0]->tank_id)->get();
        $water = DB::table('basic_materials')->where('id', '=', $quote[0]->water_id)->get();
        $floor = DB::table('basic_materials')->where('id', '=', $quote[0]->floor_id)->get();
        $decoration = DB::table('decorations')->where('id', '=', $quote[0]->decoration_id)->get();
        $ornament = DB::table('ornaments')->where('id', '=', $quote[0]->ornament_id)->get();
        $fish = DB::table('fish')->where('id', '=', $quote[0]->fish_id)->get();
        return view('quote', [
            'index' => $i,
            'quote' => $quote,
            'package' => $package,
            'price' => $price,
            'tank' => $tank,
            'water' => $water,
            'floor' => $floor,
            'decoration' => $decoration,
            'ornament' => $ornament,
            'fish' => $fish,
        ]);
    }
}
