<?php

namespace App\Http\Controllers;
use App/User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function edit(User $user)

    {
            $time = strtotime($user ->tanggal_lahir);

            $user['tgl'] = date ('d',$time);
            $user['bln'] = date ('m',$time);
            $user['thn'] = date ('y',$time);
           
            return view('user.edit', compact('user'));
    }
}
