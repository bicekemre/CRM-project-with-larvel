@extends('layout.main')
@section('content')
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
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
                            <form action="/client-update/  {{$client->id}} / {{$client->type}}" method="POST">
                                @method('PUT')
                                @csrf
                                <input type="hidden" value="{{ $client->id }}">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="name" class="form-label">Name</label>
                                            <input type="text" class="form-control" id="name" value="{{ $client->name }}" name="name">
                                            @error('name')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label for="phone-mask" class="form-label">Phone</label>
                                            <input type="text" class="form-control" id="phone-mask" value="{{ $client->phone }}" name="phone">
                                            @error('phone')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label for="email-input" class="form-label">Email</label>
                                            <input class="form-control" type="email" id="email-input" value="{{ $client->email }}" name="email">
                                            @error('email')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Staff Sales</label>
                                            <select name="id_sales_staff" class="form-select">
                                                @isset($client->id_staff_sales)<option selected value="{{ $client->staff->id }}">{{ $client->staff->name }}</option>@endisset

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
                                            <input type="text" class="form-control" id="address" value="{{ $client->address }}" name="address">
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Type</label>
                                            <select value="{{ $client->type }}" name="type" class="form-select">
                                                <option value="client">Client</option>
                                                <option value="lead">Lead</option>
                                            </select>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Source</label>
                                            <select name="id_source" class="form-select">
                                                <option value="{{ $client->source->id }}">{{ $client->source->name }}</option>
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
    <!-- form mask -->
    <script src="{{ asset('assets/libs/imask/imask.min.js') }}"></script>
    <script src="{{ asset('assets/js/pages/form-mask.init.js') }}"></script>
@endsection