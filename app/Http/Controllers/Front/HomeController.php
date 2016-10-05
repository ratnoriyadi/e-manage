<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;


class HomeController extends Controller
{
    public function index() {
      return view('front.index');
    }

    public function language(Request $request, $lang) {
        $language = in_array($lang, config('app.languages')) ? $lang : config('app.locale');
        session()->set('locale', $language);
        return back();
    }
}
