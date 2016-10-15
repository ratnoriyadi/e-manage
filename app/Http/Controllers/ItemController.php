<?php

namespace App\Http\Controllers;

use DB;

class ItemController extends Controller
{
    //

    public function in_warehouse()
    {
        $data['items'] = DB::table('item_in_warehouse')
                      ->get();

        return view('front.items.in_warehouse.in_warehouse', $data);
    }

    public function in_warehouse_add()
    {
        return view('front.items.in_warehouse.add');
    }
}
