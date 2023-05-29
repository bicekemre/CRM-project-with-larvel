<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function product()
    {
        return $this->belongsTo(Product::class, 'id_product', 'id');
    }

    public function supplier()
    {
        return $this->belongsTo(Supplier::class,'id_supplier', 'id');
    }
}
