<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function source ()
    {
        return $this->belongsTo(Source::class, 'id_source', 'id');
    }

    public function staff()
    {
        return $this->belongsTo(User::class, 'id_sales_staff', 'id');
    }

    public function revenue()
    {
        return $this->hasMany(Revenue::class, 'id_client', 'id');
    }

    public function service()
    {
        return $this->belongsTo(Service::class, 'id_service', 'id');
    }


    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'phone' => 'sometimes|numeric',
            'email' => 'required|email|unique:users',
            'address' => 'sometimes|string|max:255',
            'type' => 'required|string|max:255',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'This area is required.',
            'email.required' => 'This area is required.',
            'phone.numeric' => 'This area is must be numeric',
            'type.required' => 'This area is required.',
        ];
    }
}
