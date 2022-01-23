<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    /**
     * Write Your Code..
     *
     * @return string
    */
    public function index()
    {
        $users = User::select('*')
                        ->whereNotNull('last_seen')        
                        ->orderBy('last_seen','DESC')
                        ->paginate(10);

        return view('users', compact('users'));
    }    
}