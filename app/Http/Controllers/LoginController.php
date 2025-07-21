<?php

namespace App\Http\Controllers;

use App\Http\Requests\userRegistration;
use App\Models\UserModel;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function authenticate (Request $request)
    {
        $credentials = $request->validate([
            'emailUser' => ['required', 'email'],
            'passwordUser' => ['required'],
        ]);

        $user = UserModel::where('emailUser', $request->emailUser)->first();

        if ($user)
        {
            if (Hash::check($request->passwordUser, $user->passwordUser))
            {
                Auth::login($user);
                $request->session()->regenerate();

                return redirect('/');
            }else{
                return redirect ('/login')->withErrors(['passwordUser' => 'Password Invalid']);
            }
        }else{
            return redirect ('/')->withErrors(['emailUser' => 'Account not founded']);
        }

        return redirect ('/login')->withErrors($credentials);
    }

    public function register(userRegistration $request)
    {
        
        $data = [
            'nameUser' => $request->name,
            'emailUser' => $request->email,
            'passwordUser' => Hash::make($request->password)
        ];
    
        if (UserModel::create($data))
        {
            return redirect ('/');
        }else{
            return redirect ('/');
        }
        
    }

    public function logout()
    {
       if (Auth::logout())
       {
            return redirect ('/login');
       }
    }
}
