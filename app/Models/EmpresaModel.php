<?php 
    namespace App\Models;

    use CodeIgniter\Model;

    class EmpresaModel extends Model
    {
        protected $table      = 'empresas';
        protected $primaryKey = 'id';

        protected $useAutoIncrement = true;

        protected $returnType     = 'array';

        protected $allowedFields = ['id','ruc','razon_social', 'nombre_comeercial','direccion_fiscal','email','telefono','usuario_sol','clave_sol','clave_certificado', 'logo', 'fecha_expiracion_certificado', 'fecha_registro', 'estado', 'ubigeo_id'];

        protected $useTimestamps = false;
        protected $createdField  = 'created_at';
        protected $updatedField  = 'updated_at';

    }

?>