<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
//    public function rules()
//    {
//        return [
//            'amount'  => 'required|numeric',
//            'id_service'  => 'required',
//            'date'  => 'required|date',
//        ];
//    }

    public function service()
    {
        return $this->belongsTo(Service::class, 'id_service', 'id');
    }


}
