<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Revenue;
use App\Models\Service;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function  dealWithoutIncomes()
    {
        $revenues = Revenue::all();

        $services = Service::all();

        $profits = Revenue::getProfits();

        return view('accounting.payments.deal-without-incomes', compact(
            'revenues',
            'services',
            'profits',
        ));
    }

    public function  payments()
    {
        $revenues = Revenue::all();

        $clients = Client::all();

        $services = Service::all();

        return view('accounting.payments.payments', compact('revenues', 'clients', 'services'));
    }

    public function waitingPaymentDeals()
    {
        $revenues = Revenue::where(['payment_status' => 0])->get();

        return view('accounting.payments.waiting-payment-deals', compact('revenues'));
    }

    public function unpaidDeals()
    {
        $revenues = Revenue::where(['payment_status' => 0])->get();
        return view('accounting.payments.unpaid-deals', compact('revenues'));
    }

    public function create(Request $request)
    {
        $revenue = Revenue::create([
            'amount' => $request->amount,
            'id_client' => $request->id_client,
            'id_service' => $request->id_service,
            'desc' => $request->desc,
            'payment' => $request->payment,
            'payment_date' => $request->payment_date,
        ]);
        $revenue->save();
        return $this->payments();
    }


    public function edit($id)
    {
        $revenue = Revenue::find($id);


        return view('accounting.payments.update', compact('revenue'));
    }

    public function update(Request $request, $id)
    {
        $revenue = Revenue::find($id);

        $revenue->update([
            'amount' => $request->amount,
            'id_client' => $request->id_client,
            'id_service' => $request->id_service,
            'desc' => $request->desc,
            'payment' => $request->payment,
            'payment_date' => $request->payment_date,
        ])->save();

        return redirect()
            ->route('payments')
            ->with('success', 'updated successfully.')
            ->withInput($request->except(['password']));
    }

    public function delete($id)
    {
        $revenue = Revenue::find($id);

        $revenue->delete();

        return redirect()
            ->route('payments')
            ->with('success', ' deleted successfully.');
    }
}
