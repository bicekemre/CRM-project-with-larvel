@extends('layout.main')
@section('page-name', 'Accounting')
@section('breadcrumb')
@endsection
@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="row gallery-wrapper">
                                        <div class="element-item col-xl-4 col-sm-6 project designing development" data-category="designing development">
                                            <div class="gallery-box card">
                                                <div class="gallery-container">
                                                    <a href="/summary" title="">
                                                        <i class="fa fa-chart-bar fa-4x mt-4"></i>
                                                        <div class="gallery-overlay"></div>
                                                        <h4 class="mt-4 mb-4">Summary</h4>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="element-item col-xl-4 col-sm-6 photography" data-category="photography">
                                            <div class="gallery-box card">
                                                <div class="gallery-container">
                                                    <a href="/payments" title="">
                                                        <i class="fa fa-money-bill-alt fa-4x mt-4"></i>
                                                        <div class="gallery-overlay"></div>
                                                        <h4 class="mt-4 mb-4">Payments</h4>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="element-item col-xl-4 col-sm-6 project development" data-category="development">
                                            <div class="gallery-box card">
                                                <div class="gallery-container">
                                                    <a href="/deal-without-incomes" title="">
                                                        <i class="fa fa-calculator fa-4x mt-4"></i>
                                                        <div class="gallery-overlay"></div>
                                                        <h4 class="mt-4 mb-4">Deal Without Incomes</h4>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="element-item col-xl-4 col-sm-6 project designing" data-category="project designing">
                                            <div class="gallery-box card">
                                                <div class="gallery-container">
                                                    <a href="/waiting-payments-deal" title="">
                                                        <i class="fa fa-file-invoice-dollar fa-4x mt-4"></i>
                                                        <div class="gallery-overlay"></div>
                                                        <h4 class="mt-4 mb-4">Waiting Payments Deal</h4>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="element-item col-xl-4 col-sm-6 project designing" data-category="project designing">
                                            <div class="gallery-box card">
                                                <div class="gallery-container">
                                                    <a href="/unpaid-deals" title="">
                                                        <i class="fa fa-money-check-alt fa-4x mt-4"></i>
                                                        <div class="gallery-overlay"></div>
                                                        <h4 class="mt-4 mb-4">Unpaid Deals</h4>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="element-item col-xl-4 col-sm-6 photography" data-category="photography">
                                            <div class="gallery-box card">
                                                <div class="gallery-container">
                                                    <a href="/expenses" title="">
                                                        <i class="fa fa-money-bill fa-4x mt-4"></i>
                                                        <div class="gallery-overlay"></div>
                                                        <h4 class="mt-4 mb-4">Expenses</h4>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="element-item col-xl-4 col-sm-6 photography" data-category="photography">
                                            <div class="gallery-box card">
                                                <div class="gallery-container">
                                                    <a href="/invoices" title="">
                                                        <i class="fa fa-file-invoice fa-4x mt-4"></i>
                                                        <div class="gallery-overlay"></div>
                                                        <h4 class="mt-4 mb-4">Invoices</h4>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="element-item col-xl-4 col-sm-6 photography" data-category="photography">
                                            <div class="gallery-box card">
                                                <div class="gallery-container">
                                                    <a href="/refunds" title="">
                                                        <i class="fa fa-chart-pie fa-4x mt-4"></i>
                                                        <div class="gallery-overlay"></div>
                                                        <h4 class="mt-4 mb-4">Refunds</h4>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="element-item col-xl-4 col-sm-6 photography" data-category="photography">
                                            <div class="gallery-box card">
                                                <div class="gallery-container">
                                                    <a href="/products" title="">
                                                        <i class="fa fa-layer-group  fa-4x mt-4"></i>
                                                        <div class="gallery-overlay"></div>
                                                        <h4 class="mt-4 mb-4">Products</h4>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="element-item col-xl-4 col-sm-6 photography" data-category="photography">
                                            <div class="gallery-box card">
                                                <div class="gallery-container">
                                                    <a href="/suppliers" title="">
                                                        <i class="fas fa-truck  fa-4x mt-4"></i>
                                                        <div class="gallery-overlay"></div>
                                                        <h4 class="mt-4 mb-4">Suppliers</h4>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="element-item col-xl-4 col-sm-6 photography" data-category="photography">
                                            <div class="gallery-box card">
                                                <div class="gallery-container">
                                                    <a href="/purchases" title="">
                                                        <i class="fa fa-shopping-cart  fa-4x mt-4"></i>
                                                        <div class="gallery-overlay"></div>
                                                        <h4 class="mt-4 mb-4">Purchases</h4>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end row -->
                                </div>
                            </div>
                            <!-- end row -->
                        </div>
                        <!-- ene card body -->
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col -->
            </div>

            <!-- end row -->

        </div> <!-- container-fluid -->
    </div>
@endsection