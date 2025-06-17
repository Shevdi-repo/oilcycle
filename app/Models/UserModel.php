<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'pemasok'; 
    protected $primaryKey = 'id';

    protected $allowedFields = ['username', 'nomorHp', 'password', 'created_at', 'updated_at'];
}
