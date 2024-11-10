<?php 
    namespace App\Models;

    use CodeIgniter\Model;

    class SedeModel extends Model
    {
        protected $table      = 'sedes';
        protected $primaryKey = 'id';

        protected $useAutoIncrement = true;

        protected $returnType     = 'array';

        protected $allowedFields = ['id','descripcion','anexo', 'telefono','email','fecha_registro','estado','empresa_id','ubigeo_id','logo', 'tipo_envio_sunat'];

        protected $useTimestamps = false;
        protected $createdField  = 'created_at';
        protected $updatedField  = 'updated_at';

    }

?>