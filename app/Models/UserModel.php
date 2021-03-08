<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'user';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'username', 'first_name', 'last_name', 'e_mail', 'phone_number', 'avatar', 'password', 'salt', 'created_date', 'created_by', 'updated_date', 'updated_by'
    ];
    protected $returnType = 'App\Entities\User';
    protected $useTimestamps = false;
}
