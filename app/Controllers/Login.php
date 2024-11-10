<?php

namespace App\Controllers;

class Login extends BaseController
{
    public function index()
    {
        if(session()->is_logged) {
            return redirect()->to(base_url('empresas'));
        }
        return view('login/index');
    }

    public function acceder()
    {
        $user = $this->request->getVar('user');
        $password = $this->request->getVar('password');

        $user = trim($user);
        $password = trim($password);

        $modelUser = model('UsuarioModel');

        $verificar = $modelUser->join('perfil', 'perfil.id = usuarios.perfil_id')->where('usuarios.usuario', $user)->where('usuarios.clave', $password)->where('usuarios.estado', 1)->first();

        if (!$verificar) {
            $data = array(
                "respuesta" => "error",
                "mensaje"   => "Usuario y/o contraseña no coindicen"
            );

            echo json_encode($data);
            exit();
        }

        session()->set([
			'id_user' => $verificar->id,
			'nombre' => $verificar->nombre,
			'apellidos' => $verificar->apellidos,
			'usuario' => $user,
			'id_perfil' => $verificar->perfil_id,
			'perfil' => $verificar->descripcion,
			'is_logged' => true
		]);

        $data = array(
            "respuesta" => "ok",
            "mensaje"   => "Accediendo...",
            "datos"     => $verificar
        );

        echo json_encode($data);
    }

    public function signout(){
		session()->destroy();

        response()->deleteCookie('empresa');
        response()->deleteCookie('codEmpresa');

        response()->deleteCookie('sedeFerti');
        response()->deleteCookie('idSede');

        return redirect()->to(base_url('login'));
	}
}
