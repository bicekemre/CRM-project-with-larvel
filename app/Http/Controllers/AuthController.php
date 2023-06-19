<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Expense;
use App\Models\Refund;
use App\Models\Revenue;
use App\Models\Source;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        $remember = $request->has('remember');

        if (Auth::attempt($credentials, $remember)) {
            return redirect('/');
        } else {
            return redirect()->back()->withErrors([
                'email' => 'Invalid credentials',
            ]);
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        return redirect('/')->with('success', 'Logged out successfully');
    }

    public function dashboard()
    {
        $startYear = Carbon::now()->subYear();

        $startMonth = Carbon::now()->subMonth();

        $startWeek = Carbon::now()->subWeek();

        $startDay = Carbon::now()->subDay();

        $endDate = Carbon::now();

        $months = [];

        for ($i = 5; $i >= 0; $i--) {
            $month = Carbon::now()->subMonths($i);
            $months[] = $month->format('M');
        }


        $yearly = $this->getProfitsByDate($startYear, $endDate);

        $monthly = $this->getProfitsByDate($startMonth, $endDate);

        $weekly = $this->getProfitsByDate($startWeek, $endDate);

        $daily = $this->getProfitsByDate($startDay, $endDate);

        $clients = (new \App\Models\Client)->getClientsByDate($startYear, $endDate);

        $totalClients = Client::where(['type' => 'client'])->count();


        $data = [];

        for ($i = 5; $i >= 0; $i--) {
            $month = Carbon::now()->subMonths($i);
            $revenue = Revenue::whereMonth('payment_date', $month->month)->whereYear('payment_date', $month->year)->sum('amount');
            $expense = Expense::whereMonth('payment_date', $month->month)->whereYear('payment_date', $month->year)->sum('amount');
            $netProfit = $revenue - $expense;
            $data[] = $netProfit;
        }

        $sources  = Source::all();

        $percents = [];

        foreach ($sources as $source)
        {
            $clientsBySource = Client::where(['id_source' => $source->id])->count();

            $percents[] = ($totalClients == 0) ? 0 : ($clientsBySource / $totalClients) * 100;
        }



        return view('dashboard.index', compact(
            'yearly',
            'monthly',
            'weekly',
            'daily',
            'startDay',
            'startMonth',
            'startWeek',
            'startYear',
            'endDate',
            'clients',
            'months',
            'netProfit',
            'percents',
            'sources',
            'data'
        ));
    }


    public function getProfitsByDate($startDate, $endDate)
    {
        $revenue = Revenue::whereBetween('payment_date', [
            $startDate,
            $endDate
        ])->get();

        $expense = Expense::whereBetween('payment_date', [
            $startDate,
            $endDate
        ])->get();

        $refund = Refund::whereBetween('date', [
            $startDate,
            $endDate
        ])->get();

        $totalRevenue = $revenue->sum('amount');
        $totalExpense = $expense->sum('amount');
        $totalRefunds = $refund->sum('amount');

        $profit = $totalRevenue - $totalExpense - $totalRefunds;

        $profitPercentage = ($totalRevenue == 0) ? 0 : ($profit / $totalRevenue) * 100;


        return [
            'revenue' => $revenue,
            'expense' => $expense,
            'profit' => $profit,
            'profitPercentage' => $profitPercentage,
        ];

    }



}
