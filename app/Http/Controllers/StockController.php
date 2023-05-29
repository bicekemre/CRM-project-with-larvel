<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Purchase;
use App\Models\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Arr;
class StockController extends Controller
{
    public function products()
    {
        $url = '/products/';

        $table = Schema::getColumnListing('products');

        $excludedColumns = ['id', 'created_at', 'updated_at'];

        $columns = array_diff($table, $excludedColumns);

        $contents = Product::all();


        return view('accounting.stock.index', compact('columns', 'contents', 'url') );
    }

    public function suppliers()
    {
        $url = '/suppliers/';

        $table = Schema::getColumnListing('suppliers');

        $excludedColumns = ['id', 'created_at', 'updated_at'];

        $columns = array_diff($table, $excludedColumns);

        $contents = Supplier::all();


        return view('accounting.stock.index', compact('columns', 'contents', 'url') );
    }
    public function purchases()
    {
        $url = '/purchases/';

        $table = Schema::getColumnListing('purchases');

        $excludedColumns = ['id', 'created_at', 'updated_at'];

        $columns = array_diff($table, $excludedColumns);

        $contents = Purchase::all();

        return view('accounting.stock.index', compact('columns', 'contents', 'url') );
    }


}
