<?php

use App\Http\Controllers\{AccountingController,
    ClientController,
    ExpenseController,
    PaymentController,
    ProductController,
    PurchaseController,
    RefundController,
    ServiceController,
    SupplierController};
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

   Route::get('/client/profile/{id}','profile')->name('client.profile');

   Route::get('/leads', 'leads')->name('leads');

   Route::get('/leads-change/{id}', 'changeLead')->name('leads.change');

   Route::get('/client/delete/{id}', 'delete')->name('client.delete');
});

Route::controller(AccountingController::class)->group(function () {
    Route::get('/accounting', 'index')->name('accounting');

    Route::get('/summary', 'summary')->name('summary');

    Route::get('/invoices', 'invoices')->name('invoices');

    Route::post('/invoice/create', 'create')->name('invoice.create');

    Route::get('/invoice/edit/{id}', 'edit')->name('invoice.edit');

    Route::put('/invoice/update/{id}', 'update')->name('invoice.update');

    Route::get('/invoice/delete/{id}', 'delete')->name('invoice.delete');
});


Route::controller(ServiceController::class)->group(function () {
    Route::get('/services', 'service')->name('services');

    Route::get('/services/{id}', 'show')->name('services.show');

    Route::get('/clients-services/{id}', 'clients')->name('clients-services');

    Route::get('/clients-revenues/{id}', 'revenue')->name('clients-revenues');

    Route::get('/clients-staffs/{id}', 'staff')->name('clients-staffs');

});

Route::controller(PaymentController::class)->group(function () {
    Route::get('/deal-without-incomes', 'dealWithoutIncomes')->name('deal-without-incomes');

    Route::get('/payments', 'payments')->name('payments');

    Route::post('/payment/create', 'create')->name('payment.create');

    Route::get('/payment/edit/{id}', 'edit')->name('payment.edit');

    Route::put('/payment/update/{id}', 'update')->name('payment.update');

    Route::get('payment/delete/{id}', 'delete')->name('payment.delete');

    Route::get('/waiting-payment-deals', 'waitingPaymentDeals')->name('waiting-payment-deals');

    Route::get('/unpaid-deals', 'unpaidDeals')->name('unpaid-deals');
});

Route::controller(ExpenseController::class)->group(function (){
    Route::get('/expenses', 'index')->name('expenses');

    Route::post('/expense/create', 'create')->name('expense.create');

    Route::get('/expense/edit/{id}', 'edit')->name('expense.edit');

    Route::put('/expense/update/{id}', 'update')->name('expense.update');

    Route::get('/expense/delete/{id}', 'delete')->name('expense.delete');
});

Route::controller(RefundController::class)->group(function (){
    Route::get('/refunds', 'index')->name('refunds');

    Route::post('/refund/create', 'create')->name('refund.create');

    Route::get('/refund/edit/{id}', 'edit')->name('refund.edit');

    Route::put('/refund/update/{id}', 'update')->name('refund.update');

    Route::get('/refund/delete/{id}', 'delete')->name('refund.delete');
});


Route::controller(ProductController::class)->group(function (){
    Route::get('/products', 'index')->name('products');

    Route::post('products/create', 'create')->name('products.create');

    Route::get('/products/edit/{id}', 'edit')->name('products.edit');

    Route::put('/products/update/{id}', 'update')->name('products.update');

    Route::get('/products/delete/{id}', 'delete')->name('products.delete');
});

Route::controller(SupplierController::class)->group(function (){
    Route::get('/suppliers', 'index')->name('suppliers');

    Route::post('/suppliers/create', 'create')->name('suppliers.create');

    Route::get('/suppliers/edit/{id}', 'edit')->name('suppliers.edit');

    Route::put('/suppliers/update/{id}', 'update')->name('suppliers.update');

    Route::get('/suppliers/delete/{id}', 'delete')->name('suppliers.delete');
});


Route::controller(PurchaseController::class)->group(function (){
    Route::get('/purchases', 'index')->name('purchases');

    Route::post('/purchases/create', 'create')->name('purchases.create');

    Route::get('/purchases/edit/{id}', 'edit')->name('purchases.edit');

    Route::put('/purchases/update/{id}', 'update')->name('purchases.update');

    Route::get('/purchases/delete/{id}', 'delete')->name('purchases.delete');
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
