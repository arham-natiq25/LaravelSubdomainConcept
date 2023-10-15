<?php

namespace App\Http\Controllers\Subdomain;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function __invoke(Request $request,User $user) {
      return view('subdomain.home',[
        'user'=>$user
      ]);
    }
}
