<?php

namespace App\Http\Controllers;

use App\Models\Expense;
use App\Models\Service;
use Illuminate\Http\Request;

class ExpenseController extends Controller
{

    public function  index()
    {
        $expenses = Expense::all();

        $services = Service::all();

        return view('accounting.expenses.expenses', compact('expenses','services'));
    }

    public function create(Request $request)
    {
        $expense = Expense::create([
            'amount' => $request->amount,
            'id_service' => $request->id_service,
            'desc' => $request->desc,
            'payment' => $request->payment,
            'payment_date' => $request->payment_date,
        ]);
        $expense->save();
        return redirect()->route('expenses');
    }

    public function edit($id)
    {
        $expense = Expense::find($id);

        return view('accounting.expenses.update', compact('expense'));
    }

    public function update(Request $request, $id)
    {
        $expense = Expense::find($id);

        $expense->update([
            'amount' => $request->amount,
            'id_service' => $request->id_service,
            'desc' => $request->desc,
            'payment' => $request->payment,
            'payment_date' => $request->payment_date,
        ])->save();

        return redirect()
            ->route('expenses')
            ->with('success', 'updated successfully.')
            ->withInput($request->except(['password']));
    }

    public function delete($id)
    {
        $expense = Expense::find($id);

        $expense->delete();

        return redirect()
            ->route('expenses')
            ->with('success', ' deleted successfully.');
    }



}
