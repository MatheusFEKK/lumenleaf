<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function Home ()
    {
        return view ('welcome', [
            'title' => 'Home - LumenLeaf',
            'username' => Auth::user()->nameUser,
            'useremail' => Auth::user()->emailUser,
        ]);
    }

    public function Tasks ()
    {
        return view('tasks', [
            'title' => 'Your Tasks - LumenLeaf',
            'username' => Auth::user()->nameUser,
            'useremail' => Auth::user()->emailUser,
        ]);
    }

    public function Signup()
    {
        return view('sign-up', [
            'title' => 'Sign up - LumenLeaf'
        ]);
    }

    public function Login()
    {
        return view('login', [
            'title' => 'Login - LumenLeaf' 
        ]);
    }

    public function createTask($noteTitle, $noteDescription)
    {
        
    }
}
