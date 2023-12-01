<?php

namespace App\Models;

use CodeIgniter\Model;

class MyModel extends Model{
    protected $table = "records";
    protected $primaryKey = "id";
    protected $allowedFields = ["name", "email", "password", "repeat_password"];

}


?>