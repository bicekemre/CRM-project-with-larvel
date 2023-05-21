<?php

use App\Http\Controllers\AccountingController;
use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('dashboard.index');
});


Route::controller(ClientController::class)->group(function () {
   Route::get('/clients', 'index')->name('clients.index');

   Route::get('/client-add/{type}', 'create')->name('clients.insert');

   Route::post('/client-create/{type}', 'store')->name('clients.create');

   Route::get('/client-edit/{id}/{type}', 'edit')->name('clients.edit');

   Route::put('/client-update/{id}/{type}', 'update')->name('clients.update');

   Route::get('/leads', 'leads')->name('leads');

   Route::get('/leads-change/{id}', 'changeLead')->name('leads.change');

   Route::get('/client/delete/{id}', 'delete')->name('client.delete');
});

Route::controller(AccountingController::class)->group(function () {
    Route::get('/accounting', 'index')->name('accounting');

    Route::get('/summary', 'summary')->name('summary');

    Route::get('/deal-without-incomes', 'dealWithoutIncomes')->name('deal-without-incomes');

    Route::get('/payments', 'payments')->name('payments');

    Route::get('/waitinig-payment-deals', 'waitingPaymentDeals')->name('waitinig-payment-deals');

    Route::get('/unpaid-deals', 'unpaidDeals')->name('unpaid-deals');

    Route::get('/expenses', 'expenses')->name('expenses');

    Route::get('/invoices', 'invoices')->name('invoices');

    Route::get('/refunds', 'refunds')->name('refunds');

    Route::get('/products', 'products')->name('products');

    Route::get('/suppliers', 'suppliers')->name('suppliers');

    Route::get('/purchases', 'purchases')->name('purchases');
});



Route::get('/calendar', function () {
    return view('calendar.index');
});
Route::get('/profile', function () {
    return view('user.profile');
});
Route::get('/chat', function () {
    return view('user.chat');
});
Route::get('/taskboard', function () {
    return view('user.taskboard');
});
Route::get('/settings', function () {
    return view('user.settings');
});
