<?php

namespace App\Controllers;

class Empresas extends BaseController
{
    public function index()
    {
        if (!session()->is_logged) {
			return redirect()->to(base_url('login'));
		}

        return view('empresas/index');
    }

    public function lista()
    {
        $empresa = model('EmpresaModel');

        $data = $empresa->where('estado', 1)->findAll();

        echo json_encode($data);
    }
}