<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Price;
use App\Session;
use App\Tank;
use App\BasicMaterial;

class PriceController extends Controller
{
  public function getPrice($sessionId){
    $session = Session::whereUid($sessionId)->first();

    if(!$session){
      return response()->json([
        "El UID no existe."
      ]);
    }

    $id = $session->price_id;
    $session->rent = true;
    $session->save();

    if(!$id){
      return response()->json([
        "No se ha establecido un precio. Asegurate de tener una pecera y un tipo de agua seleccionada."
      ]);
    }
    $price = Price::whereId($id)->first();
    return response()->json($price);
  }

  public function rentPrice(Request $request){
    $session = new Session();
    $uid = $this->generateRandomString();
    $session->uid = $uid;

    $session->rent = true;

    if(!$request->liters || !$request->water_type){
      return response()->json([
        'Debes de enviar # de litros y tipo de agua'
      ]);
    }

    $tank = Tank::where('capacity', '>=', $request->liters)->orderBy('capacity')->first();

    if(!isset($tank)) {
        if($request->water_type == "sweet")
          $session->water_id = 1;
        else if ($request->water_type == "salty")
          $session->water_id = 2;

        $session->liters = $request->liters;

        $session->save();
        
        return response()->json([
            "uid" => $uid,
            "maintenance" => "Nuestro equipo se pondrá en contacto contigo para el mantenimiento de tu pecera."
        ]);
    }

    $session->tank_id = $tank->id;
    if($request->water_type == "sweet")
      $session->water_id = 1;
    else if ($request->water_type == "salty")
      $session->water_id = 2;

    $session->liters = $request->liters;

    $session->save();

    $entry = Session::whereUid($uid)->first();

    if($entry->tank_id != null && $entry->water_id != null){
      $prices = Price::orderBy('liters')->get();
      $tank = Tank::whereId($entry->tank_id)->first();
      $water = BasicMaterial::whereId($entry->water_id)->first();
      $p = null;
      foreach ($prices as $key => $price) {
        if($p == null || ($tank->capacity >= $price->liters && $price->liters >= $p->liters && $price->water_type == $water->water_type)){
          $p = $price;
        }
      }

      // $entry->tank_id = null;

      $entry->price_id = $p->id;
      $entry->save();
    }

    $entry = Session::whereUid($uid)->join('prices', 'price_id', 'prices.id')->first();
    $entry->rent = true;
    return response()->json([
      "uid" => $uid,
      "maintenance" => $entry->maintenance,
    ]);
  }

  private function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
  }
}
