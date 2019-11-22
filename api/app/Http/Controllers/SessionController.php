<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Session;
use App\Client;
use App\Price;
use App\Tank;
use App\BasicMaterial;
use Illuminate\Support\Facades\Mail;
use App\Mail\ConfirmationMail;
use DB;

class SessionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      if(!$request->uid){
        return array(
          "Error" => 400,
          "MessageError" => "No UID sended"
        );
      } elseif (Session::whereUid($request->uid)->first()) {
        return array(
          "Error" => 411,
          "MessageError" => "The UID sended alredy exists"
        );
      }

      $entry = new Session($request->all());
      $entry->save();

      return response()->json([
        "Status" => "Success",
        "Message" => "Session with UID: $entry->uid successfully created",
        "UID" => $entry->uid
      ]);
      // return array(
      //   "Status" => "Success",
      //   "Message" => "Session with UID: $entry->uid successfully created",
      //   "UID" => $entry->uid
      // );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      if (!$id) {
        return array(
          "Error" => 400,
          "MessageError" => "No UID sended"
        );
      }

      if(!Session::whereUid($id)->first()){
        return array(
          "Error" => 403,
          "MessageError" => "The UID doesen't exist."
        );
      }

      if(Session::whereUid($id)->first()->price_id != null)
        $entry = Session::whereUid($id)->join('prices', 'prices.id', 'price_id')->first();
      else
        $entry = Session::whereUid($id)->first();

      if (!$entry) {
        return array(
          "Error" => 412,
          "MessageError" => "The UID doesen't exist"
        );
      }

      // if($entry->plant_id != '')
      //   $entry->plant_id = unserialize($entry->plant_id);
      // if($entry->ornament_id != '')
      //   $entry->ornament_id = unserialize($entry->ornament_id);
      // if($entry->rock_id != '')
      //   $entry->rock_id = unserialize($entry->rock_id);

      return response()->json([$entry]);
      // return array(
      //   $entry
      // );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
      if(!$request->uid){
        return array(
          "Error" => 400,
          "MessageError" => "No UID sended"
        );
      } elseif (!Session::whereUid($request->uid)->first()) {
        return array(
          "Error" => 412,
          "MessageError" => "The UID doesen't exist"
        );
      }

      // if($request->plant_id != '')
      //   $request->merge(['plant_id' => serialize($request->plant_id)]);
      // if($request->ornament_id != '')
      //   $request->merge(['ornament_id' => serialize($request->ornament_id)]);
      // if($request->rock_id != '')
      //   $request->merge(['rock_id' => serialize($request->rock_id)]);

      $entry = Session::whereUid($request->uid)->update($request->all());
      $entry = Session::whereUid($request->uid)->first();

      if($entry->tank_id != null && $entry->water_id != null){
        $prices = Price::orderBy('liters')->get();
        $tank = Tank::whereId($entry->tank_id)->first();
        $water = BasicMaterial::whereId($entry->water_id)->first();
        $p = null;
        foreach ($prices as $key => $price) {
          if($p == null || ($tank->capacity >= $price->liters && $price->liters > $p->liters && $price->water_type == $water->water_type)){
            $p = $price;
          }
        }

        $entry->price_id = $p->id;
        $entry->save();
      }

      return response()->json([
        "Status" => "Success",
        "Message" => "Session with UID: $entry->uid successfully updated"
      ]);
      // return array(
      //   "Status" => "Success",
      //   "Message" => "Session with UID: $entry->uid successfully updated"
      // );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
      Session::whereUid($request->uid)->delete();
      return response()->json([
        "Message" => "Successfully destroy session: ".$request->uid
      ]);
    }

    public function sendConfirmation($uid){

      $session = Session::whereUid($uid)->first();
      $email = Client::whereId($session->client_id)->first()->email;

      if (isset($session->liters)) {
          $water = DB::table('basic_materials')->where('id', '=', $session->water_id)->first();
          $price = DB::table('prices')->where('id', '=', $session->price_id)->first();

          $quote = [
              'rent'=> $session->rent,
              'price'=> $price,
              'liters' => $session->liters,
              'water'=>$water,
          ];
      } else {
          $package = DB::table('packages')->where('id', '=', $session->package)->first();
          $price = DB::table('prices')->where('id', '=', $session->price_id)->first();
          $tank = DB::table('tanks')->where('id', '=', $session->tank_id)->first();
          $water = DB::table('basic_materials')->where('id', '=', $session->water_id)->first();
          $floor = DB::table('basic_materials')->where('id', '=', $session->floor_id)->first();
          $decoration = DB::table('decorations')->where('id', '=', $session->decoration_id)->first();
          $ornament = DB::table('ornaments')->where('id', '=', $session->ornament_id)->first();
          $fish = DB::table('fish')->where('id', '=', $session->fish_id)->first();

          $quote = [
            'rent'=> $session->rent,
            'package'=>$package,
            'price'=>$price,
            'tank'=>$tank,
            'water'=>$water,
            'floor'=>$floor,
            'decoration'=>$decoration,
            'ornament'=>$ornament,
            'fish'=>$fish
          ];
      }

      Mail::to($email)->send(new ConfirmationMail($quote));
    }
}
