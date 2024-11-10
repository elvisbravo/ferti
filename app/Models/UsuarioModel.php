<?php 
    namespace App\Models;

    use CodeIgniter\Model;

    class PerfilModel extends Model
    {
        protected $table      = 'usuarios';
        protected $primaryKey = 'id';

        protected $useAutoIncrement = true;

        protected $returnType     = 'array';

        protected $allowedFields = ['id','usuario','clave','nombre', 'apellidos','numero_documento','nro_celular','estado','perfil_id','sede_id'];

        protected $useTimestamps = true;
        protected $createdField  = 'created_at';
        protected $updatedField  = 'updated_at';

    }

?>