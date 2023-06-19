
@extends('layout.main')
@section('page-name', 'Users-Update')
@section('breadcrumb')
    <li class="breadcrumb-item"><a href="/users">Users</a></li>
@endsection
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
                                <h4 class="card-title">Update Supplier</h4>
                            </div>
                            <!-- end card header -->
                            <div class="card-body">
                                <form method="POST" action="{{route('users.update',$user->id)}}" class="mt-4 pt-2">
                                    @csrf
                                    <input type="hidden" value="">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <div class="form-floating form-floating-custom mb-3">
                                                    <input type="text" id="input-username" placeholder="Enter User Name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$user->name}}" required autocomplete="name" autofocus>
                                                    <label for="input-username">{{ __('Name') }}</label>
                                                    @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                    <div class="form-floating-icon">
                                                        <i class="uil uil-users-alt"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <div class="form-floating form-floating-custom mb-3">
                                                    <input type="email" id="input-email" placeholder="Enter Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{$user->email}}" required autocomplete="email">
                                                    <div class="invalid-feedback">
                                                        Please Enter Email
                                                    </div>
                                                    <label for="input-email">{{ __('Email Address') }}</label>
                                                    @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                    <div class="form-floating-icon">
                                                        <i class="uil uil-envelope-alt"></i>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label">Role</label>
                                                <select class="form-control" name="role" id="role">
                                                    @foreach($roles as $role)
                                                        <option value="{{ $role->id }}">{{$role->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="mb-3">

                                                    <label class="form-label">Service</label>
                                                    <select name="id_service" class="form-select">
                                                        @isset($user->service->id_service)<option selected value="{{ $user->service->id }}">{{ $user->service->name }}</option>@endisset
                                                            @foreach($services as $service)
                                                                <option value="{{ $service->id }}">{{$service->name}}</option>
                                                            @endforeach
                                                    </select>

                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <button type="submit" class="btn btn-success"><i class="uil uil-check me-2"></i> Save</button>
                                        </div>
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
