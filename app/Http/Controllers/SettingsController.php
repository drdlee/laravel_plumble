<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setting;
use Session;

class SettingsController extends Controller
{
    public function __construct(){
      $this->middleware('admin');
    }

    public function edit(){
      return view('admin.settings.settings')->with('settings', Setting::first());
    }

    public function update(){
      $settings = Setting::first();
      $this->validate(request(), [
        'site_name' => 'required',
        'address' => 'required',
        'contact_number' => 'required',
        'contact_email' => 'required|email',
      ]);

      $settings->site_name = request('site_name');
      $settings->address = request('address');
      $settings->contact_number = request('contact_number');
      $settings->contact_email = request('contact_email');
      $settings->save();

      Session::flash('success', 'Settings updated');
      return redirect()->back();
    }
}
