<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class venta extends Model
{
    protected $table = 'venta';
    protected $primaryKey = 'id';
    protected $fillable = array('calzado','fec_compra','tipo_pago',
    'monto');
    protected $hiden = ['create_at','updated_at'];
    use HasFactory;
}
