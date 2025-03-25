<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Main extends BaseController
{
    public function index($homepage = 'LumenLeaf - Home', $navbar = 'LOGIN', $navbrand = 'LUMENLEAF')
    {
        $data['title'] = $homepage;
        $data['info'] = $navbar;
        $data['navbrand'] = $navbrand;

        return view('templates/header', $data).
                view('welcome_lumenleaf').
            view('templates/footer');
    }
}
