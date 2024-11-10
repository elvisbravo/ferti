<?php

namespace App\Controllers;

class Categorias extends BaseController
{
    public function index()
    {
        if (!session()->is_logged) {
			return redirect()->to(base_url('login'));
		}
        
        return view('categorias/index');
    }

    public function save()
    {
        $id = $this->request->getVar('idCategoria');
        $descripcion = $this->request->getVar('descripcion');
        $detalle = $this->request->getVar('detalle');

        $sede = $_COOKIE['idSede'];

        $categoria = model('CategoriaModel');

        $data = array(
            "descripcion"   => trim(strtoupper($descripcion)),
            "detalle"       => trim($detalle),
            "estado"        => true,
            "sede_id"       => $sede
        );

        if($id == 0) {

            $categoria->insert($data);

            $json = array(
                "respuesta" => "ok",
                "accion" => "insert",
                "mensaje" => "Se agrego correctamente"
            );
        } else {
            $categoria->update($id,$data);

            $json = array(
                "respuesta" => "ok",
                "accion" => "update",
                "mensaje" => "Se edito correctamente"
            );
        }

        echo json_encode($json);
    }

    public function getAll()
    {
        $sede = $_COOKIE['idSede'];

        $categoria = model('CategoriaModel');

        $data = $categoria->where('estado', true)->where('sede_id', $sede)->findAll();

        echo json_encode($data);
    }
}