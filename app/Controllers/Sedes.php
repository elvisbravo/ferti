<?php

namespace App\Controllers;

class Sedes extends BaseController
{
    public function index()
    {
        if (!session()->is_logged) {
			return redirect()->to(base_url('login'));
		}

        return view('sedes/index');
    }

    public function renderSedes()
    {
        $id = $_COOKIE['codEmpresa'];

        $sede = model('SedeModel');

        $data = $sede->where('estado', 1)->where('empresa_id', $id)->findAll();

        echo json_encode($data);
    }

    public function create_cookie_empresa()
    {
        $id = $this->request->getVar('id');

        $empresa = model('EmpresaModel');

        $data = $empresa->where('id', $id)->first();

        response()->deleteCookie('empresa');
        response()->deleteCookie('codEmpresa');

        response()->setCookie('codEmpresa', $id, time() - 604800);
        response()->setCookie('empresa', $data['razon_social'], time() - 604800);

        echo json_encode(1);
    }

    public function create_cookie($id)
    {
        $sede = model('SedeModel');

        $data = $sede->where('id', $id)->first();

        response()->deleteCookie('sedeFerti');
        response()->deleteCookie('idSede');


        response()->setCookie('idSede', $id, time() - 604800);
        response()->setCookie('sedeFerti', $data['descripcion'], time() - 604800);

        echo json_encode(1);
    }
}