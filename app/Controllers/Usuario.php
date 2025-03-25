<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Usuario extends BaseController
{
    public function login($homepage = 'Página de Login - LumenLeaf', $navbar = 'SIGNUP', $navbrand = 'LUMENLEAF')
    {
        $data['title'] = $homepage;
        $data['info'] = $navbar;
        $data['navbrand'] = $navbrand;

        return view ('templates/header', $data).
            view('login').
            view('templates/footer');
    }

    public function signup($homepage = 'Página de Cdastro - LumenLeaf', $navbar = 'LOGIN', $navbrand = 'LUMENLEAF')
    {
        $data['title'] = $homepage;
        $data['info'] = $navbar;
        $data['navbrand'] = $navbrand;

        return view ('templates/header', $data).
            view('signup').
            view('templates/footer');

    }
}
