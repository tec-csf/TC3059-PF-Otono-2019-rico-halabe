<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class Contact extends Controller
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
        $clients = DB::select('SELECT clients.*, b.quotes FROM clients JOIN (SELECT client_id, COUNT(*) as quotes FROM sessions GROUP BY client_id) AS b ON clients.id = b.client_id');
        return view('contact', ['clients' => $clients]);
    }
}
