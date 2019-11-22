<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
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
    public function index()
    {
        $quotes = DB::select('SELECT *,
                            	CASE
                                	WHEN sessions.client_id IS NULL
                                    THEN NULL
                                    ELSE (SELECT clients.first_name FROM clients WHERE clients.id = sessions.client_id)
                                END AS first_name,
                                CASE
                                	WHEN sessions.client_id IS NULL
                                    THEN NULL
                                    ELSE (SELECT clients.last_name FROM clients WHERE clients.id = sessions.client_id)
                                END AS last_name
                            FROM sessions');

        return view('home', ['quotes' => array_reverse($quotes)]);
    }
}
