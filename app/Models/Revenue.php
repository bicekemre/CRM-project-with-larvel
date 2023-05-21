<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Revenue extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function client()
    {
        return $this->hasOne(Client::class, 'id', 'id_client');
    }
}
