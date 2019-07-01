<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelItem extends Model
{
    protected $table = 'item';
    // public function color()
    // {
    //     return $this->belongsTo(ModelColor::class);
    // }
    protected $primaryKey = "id_item";
}
