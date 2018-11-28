<?php

namespace App\Http\Controllers\UI;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
      public function __construct()
      {
          //$this->middleware('auth');
      }

      public function addUser(Request $request)
      {
          return view('UI.edit-profile');
      }
      public function settings(Request $request)
      {
          return view('UI.settings');
      }
}
