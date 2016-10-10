<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Redirect;
use Session;

class HomeController extends Controller
{
    protected $redirectTo = '/';

    public function index()
    {
        return view('front.index');
    }

    public function language($lang)
    {
        $language = in_array($lang, config('app.languages')) ? $lang : config('app.fallback_locale');
        session()->set('locale', $language);

        return back();
    }

    public function doLogin()
    {
        $rules = [
        'username'  => 'required',
        'password'  => 'required',
      ];

        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            return Redirect::to('login')
          ->withErrors($validator)
          ->withInput(Input::except('password'));
        } else {
            $userdata = [
          'username'  => Input::get('username'),
          'password'  => Input::get('password'),
        ];

            if (Auth::attempt($userdata)) {
                return Redirect::to('/');
            } else {
                return Redirect::to('/login');
            }
        }
    }

    public function doLogout()
    {
        Auth::logout();

        return Redirect::to('/login');
    }
}
