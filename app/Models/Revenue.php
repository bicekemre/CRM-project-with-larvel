<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Revenue extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public static function getProfits(): array
    {
        $totalExpense = Expense::sum('amount');
        $totalRevenue = Revenue::sum('amount');
        $totalRefunds = Refund::sum('amount');

        $profit =  ($totalRevenue - $totalExpense);

        $profitPercentage = ($totalRevenue == 0) ? 0 : ($profit / $totalRevenue) * 100;


        return ['totalExpense' =>$totalExpense,
            'totalRevenue' => $totalRevenue,
            'totalRefunds' => $totalRefunds,
            'profit' => $profit,
            'profitPercentage' => $profitPercentage
        ];
    }

    public function client()
    {
        return $this->hasOne(Client::class, 'id', 'id_client');
    }

    public function service()
    {
        return $this->belongsTo(Service::class, 'id_service', 'id');
    }
    public function invoice()
    {
        return $this->belongsTo(Invoice::class, 'id_invoice', 'id');
    }


}
