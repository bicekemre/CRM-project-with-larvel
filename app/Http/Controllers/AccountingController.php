<?php

namespace App\Http\Controllers;

use App\Models\Expense;
use App\Models\Revenue;
use Illuminate\Http\Request;

class AccountingController extends Controller
{
    public function index()
    {
        return view('accounting.index');
    }

    public function  summary()
    {
        $expenses = Expense::all();

        $revenues = Revenue::all();

        $totalExpense = Expense::sum('amount');
        $totalRevenue = Revenue::sum('amount');

        $profit =  ($totalRevenue - $totalExpense);
        $profitPercentage =  ($profit / $totalRevenue) * 100;

        return view('accounting.summary', compact(
            'expenses', 'revenues',
            'totalRevenue', 'totalExpense',
            'profit', 'profitPercentage',
        ));
    }


    public function  dealWithoutIncomes()
    {
        $revenues = Revenue::all();



        return view('accounting.deal-without-incomes', compact('revenues'));
    }

    public function  invoices()
    {
        return view('accounting.invoices');
    }

    public function  payments()
    {
        return view('accounting.payments');
    }

    public function  waitingPaymentDeals()
    {
        return view('accounting.waitinig-payment-deals');
    }

    public function  unpaidDeals()
    {
        return view('accounting.unpaid-deals');
    }

    public function  expenses()
    {
        return view('accounting.expenses');
    }

    public function  refunds()
    {
        return view('accounting.refunds');
    }

    public function  products()
    {
        return view('accounting.products');
    }
}
