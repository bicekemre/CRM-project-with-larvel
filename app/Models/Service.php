<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function clients()
    {
        return $this->hasMany(Client::class, 'id_service', 'id');
    }
    public function revenues()
    {
        return $this->hasMany(Revenue::class, 'id_service', 'id');
    }

    public function getTotalIncomeAttribute()
    {
        return $this->revenues()->sum('amount');
    }

    public function admins()
    {
        $role = Role::where(['name' => 'admin'])->get()->first();

        $roleId = $role->id;

        return $this->belongsToMany(User::class)->whereHas('roles', function ($query) use ($roleId) {
            $query->where('id', $roleId);
        });
    }

    public function staffs()
    {
        return $this->belongsToMany(User::class);
    }



}
