<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelTransaction extends Model
{
    protected $table = 'transaction';
    protected $primaryKey = 'id_transaction';
}
