@extends('layout.main')
@section('page-name', $type . '-create')
@section('breadcrumb')
    <li class="breadcrumb-item"><a href="/{{ $type }}">{{ $type }}</a></li>
@endsection
@section('content')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-header d-flex align-items-center">
                            <h4 class="card-title">Create Client</h4>
                        </div>
                        <!-- end card header -->
                        <div class="card-body">
                            <form action="/client-create/{{ $type }}" class="needs-validation" method="POST" autocomplete="off" novalidate>
                                @method('POST')
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="name" class="form-label">Name</label>
                                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" required>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                            @error('name')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label for="phone-mask" class="form-label">Phone</label>
                                            <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone-mask" name="phone" required>
                                            <div class="valid-feedback alert-danger">
                                                This area must be numeric
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label for="email-input" class="form-label">Email</label>
                                            <input class="form-control @error('email') is-invalid @enderror" type="email" id="email-input" name="email">
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Staff Sales</label>
                                            <select name="id_sales_staff" class="form-select">
                                                <option value="">Select</option>
                                                @isset($staffs)
                                                    @foreach($staffs as $staff)
                                                        <option value="{{ $staff->id }}">{{ $staff->name }}</option>
                                                    @endforeach
                                                @endisset
                                            </select>
                                        </div>
                                    </div>
                                    <!-- end col -->

                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="address" class="form-label">Address</label>
                                            <input type="text" class="form-control" id="address" name="address">
                                        </div>
                                        <input type="hidden" name="type" value="{{ $type }}">
                                        <div class="mb-3">
                                            <label class="form-label">Source</label>
                                            <select name="id_source" class="form-select">
                                                <option value="">Select</option>
                                                @isset($sources)
                                                    @foreach($sources as $source)
                                                        <option value="{{ $source->id }}">{{ $source->name }}</option>
                                                    @endforeach
                                                @endisset
                                            </select>
                                        </div>

                                        <div class="mb-3">
                                            <div class="form-floating">
                                                <textarea name="source_desc" class="form-control" placeholder="Source description" id="floatingTextarea2" style="height: 100px"></textarea>
                                                <label for="floatingTextarea2">Source description</label>
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <button type="submit" class="btn btn-success"><i class="uil uil-check me-2"></i> Save</button>
                                        </div>
                                    </div>
                                    <!-- end col -->
                                </div>
                                <!-- end row -->
                            </form>

                            <!-- end form -->
                        </div>
                        <!-- end card body -->
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container-fluid -->
    </div>

@endsection
@section('script')
    <script src="{{ asset('assets/libs/imask/imask.min.js') }}"></script>
    <script src="{{ asset('assets/js/pages/form-mask.init.js') }}"></script>
    <script src="{{ asset('assets/js/pages/form-validation.init.js') }}"></script>

@endsection