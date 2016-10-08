<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;

class ItemController extends Controller
{
    //

    public function in_warehouse() {
      $data['items'] = DB::table('emanage_item_in_warehouse')
                      ->get();
      return view('front.items.in_warehouse.in_warehouse', $data);
    }

    public function in_warehouse_add() {
      return view('front.items.in_warehouse.add');
    }
}
