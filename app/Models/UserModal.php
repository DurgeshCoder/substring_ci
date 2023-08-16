<?php

namespace App\Models;

use App\Entities\User;
use CodeIgniter\Model;

class UserModal extends Model
{

    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id', 'name', 'phone', 'city'];
    protected $returnType = User::class;
    protected $useTimestamps = true;

}