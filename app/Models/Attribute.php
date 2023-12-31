<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Attribute extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'attributes';

    protected $dates = ['deleted_at'];

    protected $fillable = [
      'attribute_name',
      'display_attrname',
      'estatus',
      'is_specification'
    ];

    public function attributeterm(){
        $instance = $this->hasMany(AttributeTerm::class,'attribute_id','id');
        $instance->getQuery()->where('estatus','=', 1)->orderBy('sorting','asc');
        return $instance;
    }
}
