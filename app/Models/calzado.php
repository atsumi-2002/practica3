<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class calzado extends Model
{
    protected $table = 'calzado';
    protected $primaryKey = 'id';
    protected $fillable = array('calzado','tipo','color',
    'talla','marca','genero','edad');
    protected $hiden = ['create_at','updated_at'];
    use HasFactory;
}
