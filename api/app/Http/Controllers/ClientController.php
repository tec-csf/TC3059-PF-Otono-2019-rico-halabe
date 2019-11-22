<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
use App\Newsletter;
use App\Session;

class ClientController extends Controller
{
  public function setCustomer(Request $request){

    if(!$request->uid){
      return response()->json([
        "Status" => 1,
        "Description" => "Must include Session UID"
      ]);
    }

    if(!$request->first_name){
      return response()->json([
        "Status" => 1,
        "Description" => "Must include first_name"
      ]);
    }

    if($request->last_name == null){
      $request->last_name = " ";
    }

    if(!$request->phone_number){
      return response()->json([
        "Status" => 1,
        "Description" => "Must include phone_number"
      ]);
    }

    if(!$request->email){
      return response()->json([
        "Status" => 1,
        "Description" => "Must include email"
      ]);
    }

    $id = Client::where([
        ['first_name', '=', $request->first_name],
        ['last_name', '=', $request->last_name],
        ['email', '=', $request->email],
        ['phone_number', '=', $request->phone_number]
    ])->first();

    if (isset($id)) {
        Session::whereUid($request->uid)->update(["client_id" => $id->id]);

        return response()->json([
          "Description" => "Client saved successfully",
          "Status" => 0
        ]);
    }
    else {
        $client = new Client($request->all());
        $client->save();

        Session::whereUid($request->uid)->update(["client_id" => $client->id]);

        return response()->json([
          "Description" => "Client saved successfully",
          "Status" => 0
        ]);
    }
  }

  public function saveToNewsletter($email) {

      $client = Newsletter::whereEmail($email)->first();

      if (!$client){
        $client = new Newsletter();
        $client->email = $email;
        $client->save();
      }

      return response()->json([
          "success" => "User Email saved successfully"
      ]);
  }
}
