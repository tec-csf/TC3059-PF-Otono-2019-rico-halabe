<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Session;
use App\Tank;
use App\BasicMaterial;
use App\Decoration;
use App\Ornament;
use App\Fish;
use App\Package;
use App\TankOrnament;

class MaterialsController extends Controller
{
  public function getTanks(){
    $tanks = Tank::get();

    foreach ($tanks as $key => $tank) {
      $tank->img = env('APP_URL')."/Peceras/".str_replace('-', '', $tank->name)."/Pecera.png";
      $tank->img = str_replace(' ', '', $tank->img);

      $tank->preview = env('APP_URL')."/preview/Peceras/".str_replace('-', '', $tank->name).".png";
      $tank->preview = str_replace(' ', '', $tank->preview);
    }

    return response()->json($tanks);
  }

  public function getBasicMaterials($sessionId, $material){
    if($material != 'water' && $material != 'floor'){
      return response()->json([
        "El material que buscas no existe, intenta nuevamente."
      ]);
    }

    $session = Session::whereUid($sessionId)->first();
    if(!$session){
      return response()->json([
        "El UID no existe."
      ]);
    }

    $tank = Tank::whereId($session->tank_id)->first();
    if(!$tank){
      return response()->json([
        "La sesion debe de tener una pecera asignada."
      ]);
    }

    if($material == 'floor'){
      $water_type = BasicMaterial::whereId($session->water_id)->first();
      if(!$water_type){
        return response()->json([
          "La sesion debe de tener un tipo de agua asignada."
        ]);
      }
      $water_type = $water_type->water_type;
      $basicMaterial = BasicMaterial::whereMaterial($material)->whereWaterType($water_type)->get();

      foreach ($basicMaterial as $key => $mat) {
        $mat->img = env('APP_URL')."/Peceras/".str_replace('-', '', $tank->name)."/Suelo/".ucwords($mat->name).".png";
        $mat->img = str_replace(' ', '', $mat->img);
        $mat->preview = env('APP_URL')."/preview/Suelo/" . ucwords($mat->name) . ".png";
        $mat->preview = str_replace(' ', '', $mat->preview);
      }
    } else if($material == 'water'){
      $basicMaterial = BasicMaterial::whereMaterial($material)->get();

      foreach ($basicMaterial as $key => $mat) {
          if ($mat->water_type == 'sweet') {
              $mat->img = env('APP_URL')."/Peceras/".str_replace('-', '', $tank->name)."/Agua.png";
              $mat->img = str_replace(' ', '', $mat->img);
              $mat->preview = env('APP_URL')."/preview/Agua/dulce.jpeg";
              $mat->preview = str_replace(' ', '', $mat->preview);
          } else if ($mat->water_type == 'salty') {
              $mat->img = env('APP_URL')."/Peceras/".str_replace('-', '', $tank->name)."/Agua.png";
              $mat->img = str_replace(' ', '', $mat->img);
              $mat->preview = env('APP_URL')."/preview/Agua/salada.jpeg";
              $mat->preview = str_replace(' ', '', $mat->preview);
          }
      }
    }

    return response()->json($basicMaterial);
  }

  public function getDecoration($sessionId){

    $session = Session::whereUid($sessionId)->first();
    if(!$session){
      return response()->json([
        "El UID no existe."
      ]);
    }

    $tank = Tank::whereId($session->tank_id)->first();
    $water_type = BasicMaterial::whereId($session->water_id)->first();

    if(!$tank || !$water_type){
      return response()->json([
        "La sesion debe de tener una pecera y un tipo de agua asignada."
      ]);
    }

    $water_type = $water_type->water_type;
    $decoration = Decoration::whereWaterType($water_type)->get();
    $i = 1;

    if($water_type == 'sweet'){
      foreach ($decoration as $key => $mat) {
        $mat->img = env('APP_URL')."/Peceras/".str_replace('-', '', $tank->name)."/Plantas/Dulce/".$mat->name.".png";
        $mat->img = str_replace(' ', '', $mat->img);
        $mat->preview = env('APP_URL')."/preview/Plantas/" . $i . ".jpeg";
        $mat->preview = str_replace(' ', '', $mat->preview);
        $i = $i + 1;
      }
    } else {
      foreach ($decoration as $key => $mat) {
        $mat->img = env('APP_URL')."/Peceras/".str_replace('-', '', $tank->name)."/Plantas/Salada.png";
        $mat->img = str_replace(' ', '', $mat->img);
      }
    }


    return response()->json($decoration);
  }

  public function getOrnaments($sessionId){

    $session = Session::whereUid($sessionId)->first();
    if(!$session){
      return response()->json([
        "El UID no existe."
      ]);
    }

    $tank = Tank::whereId($session->tank_id)->first();
    $water_type = BasicMaterial::whereId($session->water_id)->first();

    if(!$tank || !$water_type){
      return response()->json([
        "La sesion debe de tener una pecera y un tipo de agua asignada."
      ]);
    }

    $water_type = $water_type->water_type;
    $ornaments = Ornament::join('tank_ornaments', 'ornaments.id', 'ornament_id')->where('tank_id', $tank->id)->get();

    foreach ($ornaments as $key => $mat) {
      $mat->img = env('APP_URL')."/Peceras/".str_replace('-', '', $tank->name)."/Adornos/".ucwords($mat->name).".png";
      $mat->img = str_replace(' ', '', $mat->img);
      $mat->preview = env('APP_URL')."/preview/Adornos/" . ucwords($mat->name) . ".png";
      $mat->preview = str_replace(' ', '', $mat->preview);
    }

    return response()->json($ornaments);
  }

  public function getFish($sessionId){
    $session = Session::whereUid($sessionId)->first();
    if(!$session){
      return response()->json([
        "El UID no existe."
      ]);
    }

    $tank = Tank::whereId($session->tank_id)->first();
    $water_type = BasicMaterial::whereId($session->water_id)->first();

    if(!$tank || !$water_type){
      return response()->json([
        "La sesion debe de tener una pecera y un tipo de agua asignada."
      ]);
    }

    $water_type = $water_type->water_type;
    $fish = Fish::whereWaterType($water_type)->get();

    if($water_type == 'sweet'){
      $water = "Dulce";
    } else {
      $water = "Salada";
    }

    foreach ($fish as $key => $combo) {
        $combo->description = unserialize($combo->description);
      $combo->img = env('APP_URL')."/Peceras/".str_replace('-', '', $tank->name)."/Peces/$water/".ucwords($combo->name).".png";
      $combo->img = str_replace(' ', '', $combo->img);
      $combo->preview = env('APP_URL')."/preview/Peces/" . ucwords($combo->name) . ".png";
      $combo->preview = str_replace(' ', '', $combo->preview);

    }

    return response()->json($fish);
  }

  public function getPackages($sessionId){
    $session = Session::whereUid($sessionId)->first();
    if(!$session){
      return response()->json([
        "El UID no existe."
      ]);
    }

    $tank = Tank::whereId($session->tank_id)->first();
    $water_type = BasicMaterial::whereId($session->water_id)->first();

    if(!$tank || !$water_type){
      return response()->json([
        "La sesion debe de tener una pecera y un tipo de agua asignada."
      ]);
    }

    $water_type = $water_type->water_type;
    $packages = Package::whereWaterType($water_type)->whereTankId($tank->id)->get();

    if($water_type == 'sweet'){
      $water = "Dulce";
    } else {
      $water = "Salada";
    }

    foreach ($packages as $key => $pkg) {
      $floor = BasicMaterial::whereId($pkg->floor_id)->first()->name;
      $decoration = Decoration::whereId($pkg->decoration_id)->first()->name;
      $ornament = Ornament::whereId($pkg->ornament_id_1)->first()->name;
      $fish = Fish::whereId($pkg->fish_id)->first()->name;

      $pkg->description = unserialize($pkg->description);

      $pkg->floor_url = env('APP_URL')."/Peceras/".str_replace('-', '', $tank->name)."/Suelo/".ucwords($floor).".png";
      $pkg->floor_url = str_replace(' ', '', $pkg->floor_url);

      if($water == "Salada")
        $pkg->decoration_url = env('APP_URL')."/Peceras/".str_replace('-', '', $tank->name)."/Plantas/Salada.png";
      else
        $pkg->decoration_url = env('APP_URL')."/Peceras/".str_replace('-', '', $tank->name)."/Plantas/$water/".ucwords($decoration).".png";
      $pkg->decoration_url = str_replace(' ', '', $pkg->decoration_url);

      $pkg->ornament_url = env('APP_URL')."/Peceras/".str_replace('-', '', $tank->name)."/Adornos/".ucwords($ornament).".png";
      $pkg->ornament_url = str_replace(' ', '', $pkg->ornament_url);

      $pkg->fish_url = env('APP_URL')."/Peceras/".str_replace('-', '', $tank->name)."/Peces/$water/".ucwords($fish).".png";
      $pkg->fish_url = str_replace(' ', '', $pkg->fish_url);
    }

    return response()->json($packages);
  }
}
