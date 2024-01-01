<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;

class PizzaController extends Controller
{
    public function index() {
        // get data from a database
        $pizzas = Pizza::all();
    
        return view('pizzas', [
          'pizzas' => $pizzas,
        ]);
      }
    
      public function show($id) {
        // use the $id variable to query the db for a record
        return view('detail', ['id' => $id]);
      }

}
