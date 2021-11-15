<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Entry;


class UserController extends Controller
{
    public function show (User $user){
        $entries = Entry::where('user_id', $user -> id)->get();
        //user -> entries
        return view('users.show', compact('user', 'entries'));
    }
}
