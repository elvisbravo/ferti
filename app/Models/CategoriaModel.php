<?php 
    namespace App\Models;

    use CodeIgniter\Model;

    class CategoriaModel extends Model
    {
        protected $table      = 'categorias';
        protected $primaryKey = 'id';

        protected $useAutoIncrement = true;

        protected $returnType     = 'array';

        protected $allowedFields = ['id','descripcion','detalle', 'sede_id','estado'];

        protected $useTimestamps = false;
        protected $createdField  = 'created_at';
        protected $updatedField  = 'updated_at';

    }

?>