<?php

namespace App\Http\Controllers;

use App\Models\Address;
use Illuminate\Http\Request;

class AdressesController extends Controller
{
   public function index(Request $request) {
    $adresses = Address::all();

    return $adresses;
   }

   public function findOne(Request $r) {
    $adresses = Address::find($r->id);
    return $adresses;
   }

   public function insert(Request $r) {
    $rawData = $r->only(['address']);

    $address = Address::create($rawData);
    return $address;
}
}
