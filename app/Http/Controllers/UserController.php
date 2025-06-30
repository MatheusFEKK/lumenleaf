<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function Home ()
    {
        return view ('welcome', [
            'title' => 'Home - LumenLeaf'
        ]);
    }

    public function Tasks ()
    {
        return view('tasks', [
            'title' => 'Your Tasks - LumenLeaf'
        ]);
    }
}
