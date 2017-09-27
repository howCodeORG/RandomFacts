<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fact;

class FactController extends Controller
{
  public function randFact() {
    $fact = Fact::all()->random(1);
    return view("welcome", ["fact"=>$fact[0]->fact]);
  }
}
