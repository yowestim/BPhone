<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelUser extends Model
{
    protected $table = 'users';
    protected $primarykey = 'id_users';
}
