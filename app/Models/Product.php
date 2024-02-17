<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = [
        'name',
        'desc',
        'char',
        'image',
        'type_id',

    ];

    public function service_products()
    {
        return $this->belongsTo(Types::class, 'type_id', 'id');
    }


}
