<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Expense;
use App\Models\Invoice;
use App\Models\Refund;
use App\Models\Revenue;
use App\Models\Service;
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

        $profits = Revenue::getProfits();

        return view('accounting.summary', compact(
            'expenses',
            'revenues',
            'profits',
        ));
    }

    public function  invoices()
    {
        $invoices = Invoice::all();

        return view('accounting.invoices', compact('invoices'));
    }

    public function create(Request $request)
    {
        $number = rand(100000, 999999);

        $invoice = Invoice::create([
            'number' => $number,
            'billing_name' => $request->billing_name,
            'date' => $request->date,
            'total_amount' => $request->total_amount,
            'instalment' => $request->instalment,
            'type' => $request->type,
            'status' => $request->status,
        ]);
        $invoice->save();
        return redirect()->route('invoices');
    }

    public function edit($id)
    {
        $invoice = Invoice::find($id);

        return view('accounting.update', compact('invoice'));
    }

    public function update(Request $request, $id)
    {
        $invoice = Invoice::find($id);

        $invoice->update([
            'billing_name' => $request->billing_name,
            'date' => $request->date,
            'total_amount' => $request->total_amount,
            'instalment' => $request->instalment,
            'type' => $request->type,
            'status' => $request->status,
        ])->save();

        return redirect()
            ->route('invoices')
            ->with('success', 'updated successfully.')
            ->withInput($request->except(['password']));
    }

    public function delete($id)
    {
        $invoice = Invoice::find($id);

        $invoice->delete();

        return redirect()
            ->route('invoices')
            ->with('success', ' deleted successfully.');
    }



    public function  products()
    {
        return view('accounting.products');
    }
}
