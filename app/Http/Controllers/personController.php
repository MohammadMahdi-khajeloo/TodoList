<?php

namespace App\Http\Controllers;

use App\Models\person;
use Illuminate\Http\Request;

class personController extends Controller
{
   public function index(){

       $persons= person::all();

return view("person.index")->with(compact("persons"));


   }
}
