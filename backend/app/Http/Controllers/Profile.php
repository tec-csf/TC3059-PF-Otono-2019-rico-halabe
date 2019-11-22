<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use Hash;

class Profile extends Controller
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
        $user = Auth::user();
        return view('profile', ['user' => $user]);
    }

    public function update(Request $request)
    {
        $new_password = $request->input('new_password');
        $confirm_new_password = $request->input('confirm_new_password');
        $current_user = Auth::user();

        if ($new_password != $confirm_new_password)
        {
            return redirect('/perfil')->with(['status' => 0, 'response' => 'Nueva Contraseña y Confirmar Nueva Contraseña deben ser iguales.']);
        }
        else if (strlen($new_password) < 6)
        {
            return redirect('/perfil')->with(['status' => 0, 'response' => 'Nueva Contraseña debe contener más de 6 caracteres.']);
        }

        DB::table('users')->where('id', '=', $current_user->id)->update(['password' => Hash::make($new_password) ]);

        return redirect('/perfil')->with(['status' => 1, 'response' => 'Se ha actualizado tu contraseña correctamente.']);;
    }
}
