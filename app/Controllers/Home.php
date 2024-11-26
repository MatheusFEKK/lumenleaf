<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index($homepage = 'LumenLeaf - Home')
    {
        $data['title'] = $homepage;

        return view('templates/header', $data).
                view('welcome_lumenleaf').
            view('templates/footer');
    }
}
