<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\UserDetail;

class UserDetailController extends Controller
{
    public function show($id)
    {
        // dd($id);

        // $user = User::find($id)->userDetail;
        // dd($user);

        $user_detail = UserDetail::find($id);
        dd($user_detail);
    }
}
