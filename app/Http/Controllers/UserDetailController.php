<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class UserDetailController extends Controller
{
    public function show($id)
    {
        // dd($id);

        $user = User::find($id)->userDetail;
        dd($user);
    }
}
