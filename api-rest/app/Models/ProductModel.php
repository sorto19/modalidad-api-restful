<?php 

namespace App\Models;
use CodeIgniter\Model;

class ProductModel extends Model 
{
    protected $table = 'product';
    protected $primariKey='id';
    protected $allowedFields= ['Nombre_producto', 'description'];

    
}

