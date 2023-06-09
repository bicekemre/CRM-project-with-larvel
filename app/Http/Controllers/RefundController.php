<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Refund;
use Illuminate\Http\Request;

class RefundController extends Controller
{
    public function  index()
    {
        $refunds = Refund::paginate(10);

        $clients = Client::all();

        return view('accounting.refunds.index', compact('refunds', 'clients'));
    }

    public function create(Request $request)
    {


        $refund = Refund::create([
            'id_client' => $request->id_client,
            'amount' => $request->amount,
            'date' => $request->date,
            'payment' => $request->payment,
        ]);
        $refund->save();
        return redirect()->route('refunds');
    }

    public function edit($id)
    {
        $refund = Refund::find($id);

        return view('accounting.refunds.update', compact('refund'));
    }

    public function update(Request $request, $id)
    {
        $refund = Refund::find($id);

        $refund->update([
            'id_client' => $request->id_client,
            'amount' => $request->amount,
            'date' => $request->date,
            'payment' => $request->payment,
        ])->save();

        return redirect()
            ->route('refunds')
            ->with('success', 'updated successfully.')
            ->withInput($request->except(['password']));
    }

    public function delete($id = null, Request $request = null)
    {
        if ($id) {
            $selected = [$id];
        } else {
            $selected = $request->id;
        }

        if ($selected) {
            Refund::whereIn('id', $selected)->delete();

            return redirect()->route('refunds')->with('success', 'Selected items have been deleted successfully.');
        }

        return redirect()->route('refunds')->with('error', 'No items selected or an error occurred.');
    }


}
