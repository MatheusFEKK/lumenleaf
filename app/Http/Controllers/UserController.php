<?php

namespace App\Http\Controllers;

use App\Http\Requests\userNote;
use App\Models\Notes;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

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
        $notes = Notes::where('idUser', Auth::user()->idUser)->get();

        return view('tasks', [
            'title' => 'Your Tasks - LumenLeaf',
            'username' => Auth::user()->nameUser,
            'useremail' => Auth::user()->emailUser,
            'tasksUser' => $notes,
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

    public function createTask(userNote $request)
    {
        $data = [
            'noteTitle' => $request->noteTitle,
            'noteDescription' => $request->noteDescription,
            'idUser' => Auth::user()->idUser,
        ];

        if (Notes::create($data))
        {
            return redirect ('/tasks');
        }else{
            return redirect ('/tasks')
                ->withErrors($data);
        }


    }
}
