<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function index()
    {
        $suppliers = Supplier::all();


        return view('accounting.suppliers.index',compact('suppliers'));
    }

    public function create(Request $request)
    {
        $supplier = Supplier::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'code' => rand(10000, 99999),
        ]);
        $supplier->save();
        return redirect()->route('suppliers');
    }

    public function edit($id)
    {
        $supplier = Supplier::find($id);

        return view('accounting.suppliers.update', compact('supplier'));
    }

    public function update(Request $request, $id)
    {
        $supplier = Supplier::find($id);

        $supplier->update([
            'name' => $request->name,
            'brand' => $request->brand,
            'price' => $request->stock,
        ])->save();

        return redirect()
            ->route('suppliers')
            ->with('success', 'updated successfully.')
            ->withInput($request->except(['password']));
    }

    public function delete($id)
    {
        $supplier = Supplier::find($id);

        $supplier->delete();

        return redirect()
            ->route('suppliers')
            ->with('success', ' deleted successfully.');
    }

}
