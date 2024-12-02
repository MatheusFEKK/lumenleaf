<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Usuario extends BaseController
{
    public function login($homepage = 'Página de Login - LumenLeaf', $navbar = 'SIGNUP')
    {
        $data['title'] = $homepage;
        $data['info'] = $navbar;

        return view ('templates/header', $data).
            view('login').
            view('templates/footer');
    }
}
