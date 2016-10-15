<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['recent_items'] = DB::table('item_in_warehouse')
                                -> join('sold_item', 'item_in_warehouse.id_item', '=', 'sold_item.id_item')
                                -> select('item_in_warehouse.*')
                                -> get();
        return view('home', $data);
    }
}
