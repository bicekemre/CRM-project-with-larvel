<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Purchase;
use App\Models\Supplier;
use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    public function index()
    {
        $purchases = Purchase::all();

        $products  = Product::all();

        $suppliers = Supplier::all();

        return view('accounting.purchases.index',compact('purchases', 'suppliers', 'products'));
    }

    public function create(Request $request)
    {
        $purchase = Purchase::create([
            'id_supplier' => $request->id_supplier,
            'id_product' => $request->id_product,
            'amount' => $request->amount,
            'quantity' => $request->quantity,
        ]);
        $purchase->save();
        return redirect()->route('purchases');
    }

    public function edit($id)
    {
        $purchase = Purchase::find($id);

        return view('accounting.purchases.update', compact('purchase'));
    }

    public function update(Request $request, $id)
    {
        $purchase = Purchase::find($id);

        $purchase->update([
            'id_supplier' => $request->id_supplier,
            'id_product' => $request->id_product,
            'amount' => $request->amount,
            'quantity' => $request->quantity,
        ])->save();

        return redirect()
            ->route('purchases')
            ->with('success', 'updated successfully.')
            ->withInput($request->except(['password']));
    }

    public function delete($id)
    {
        $purchase = Purchase::find($id);

        $purchase->delete();

        return redirect()
            ->route('purchases')
            ->with('success', ' deleted successfully.');
    }
}
