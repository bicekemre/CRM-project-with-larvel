@extends('layout.main')
@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row align-items-start">
                                <div class="col-sm">
                                    <div>
                                        <button type="button" class="btn btn-light mb-4" data-bs-toggle="modal" data-bs-target="#addInvoiceModal"><i class="mdi mdi-plus me-1"></i> Add Invoice</button>
                                    </div>
                                </div>
                                <div class="col-sm-auto">
                                    <div class="d-flex gap-1">
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="datepicker-range">
                                            <span class="input-group-text"><i class="uil uil-calender"></i></span>
                                        </div>
                                        <div class="dropdown">
                                            <a class="btn btn-link text-body shadow-none dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="uil uil-ellipsis-h"></i>
                                            </a>

                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a class="dropdown-item" href="#">Action</a></li>
                                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="table-responsive mt-4 mt-sm-0">
                                <table class="table align-middle table-nowrap table-check">
                                    <thead>
                                    <tr class="bg-transparent">
                                        <th style="width: 30px;">
                                            <div class="form-check font-size-16">
                                                <input type="checkbox" name="check" class="form-check-input" id="checkAll">
                                                <label class="form-check-label" for="checkAll"></label>
                                            </div>
                                        </th>
                                        @if( isset($columns->id_supplier) )
                                            <th>Supplier Name</th>
                                        @endif
                                        @if( isset($columns->id_product) )
                                            <th>Product Name</th>
                                        @endif
                                        @isset($columns)
                                            @foreach($columns as $column)
                                                <th>{{ $column }}</th>
                                            @endforeach
                                        @endisset

                                        <th style="width: 120px;">A<ction</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @isset($contents)
                                        @foreach($contents as $content)
                                            <tr>
                                                <td style="width: 30px;">
                                                    <div class="form-check font-size-16">
                                                        <input type="checkbox" name="check" class="form-check-input" id="checkAll">
                                                        <label class="form-check-label" for="checkAll"></label>
                                                    </div>
                                                </td>
                                                @foreach($columns as $column)
                                                    <td>
                                                      {{ $content->$column }}
                                                    </td>
                                                @endforeach
                                                <td>
                                                    <div class="dropdown">
                                                        <button class="btn btn-light btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="uil uil-ellipsis-h"></i>
                                                        </button>
                                                        <ul class="dropdown-menu dropdown-menu-end">
                                                            <li><a class="dropdown-item" href="{{ $url . 'edit/' . $content->id }}">Edit</a></li>
                                                            <li><a class="dropdown-item" href="{{ $url . 'delete/' . $content->id }}">Delete</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr><!-- end tr -->
                                        @endforeach
                                    @endisset
                                    </tbody><!-- end tbody -->
                                </table><!-- end table -->
                            </div>

                            <div class="row g-0 text-center text-sm-start">
                                <div class="col-sm-6">
                                    <div>
                                        <p class="mb-sm-0">Showing 1 to 10 of 57 entries</p>
                                    </div>
                                </div>
                                <!-- end col -->
                                <div class="col-sm-6">
                                    <ul class="pagination pagination-rounded justify-content-center justify-content-sm-end mb-sm-0">
                                        <li class="page-item disabled">
                                            <a href="#" class="page-link"><i class="mdi mdi-chevron-left"></i></a>
                                        </li>
                                        <li class="page-item">
                                            <a href="#" class="page-link">1</a>
                                        </li>
                                        <li class="page-item active">
                                            <a href="#" class="page-link">2</a>
                                        </li>
                                        <li class="page-item">
                                            <a href="#" class="page-link">3</a>
                                        </li>
                                        <li class="page-item">
                                            <a href="#" class="page-link">4</a>
                                        </li>
                                        <li class="page-item">
                                            <a href="#" class="page-link">5</a>
                                        </li>
                                        <li class="page-item">
                                            <a href="#" class="page-link"><i class="mdi mdi-chevron-right"></i></a>
                                        </li>
                                    </ul>
                                </div><!-- end col -->
                            </div><!-- end row -->
                        </div>
                        <!-- end card body -->
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->


        </div> <!-- container-fluid -->
    </div>
@endsection