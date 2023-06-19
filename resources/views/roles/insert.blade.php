@extends('layout.main')
@section('page-name', 'Roles-Create')
@section('breadcrumb')
    <li class="breadcrumb-item"><a href="/roles">Roles</a></li>
@endsection
@section('content')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-header d-flex align-items-center">
                            <h4 class="card-title">Create Role</h4>
                        </div>
                        <!-- end card header -->
                        <div class="card-body">
                            <form action="/roles/store" method="POST" autocomplete="off" novalidate>
                                @method('POST')
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="name" class="form-label">Name</label>
                                            <input type="text" class="form-control" id="name" name="name">
                                            @error('name')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>




                                    </div>
                                </div>
                                <div class="row">
                                    <label class="form-label">Permissions</label>
                                    @isset($permissions)
                                        @foreach($permissions as $permission)
                                            <div class="col-lg-4">
                                                <div class="mb-3">
                                                    <div class="form-check mt-3">
                                                        <input type="checkbox" class="form-check-input" name="permissions[]" value="{{ $permission->id }}" id="permission{{ $permission->id }}">
                                                        <label class="form-check-label" for="permission{{ $permission->id }}">{{ $permission->name }}</label>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endisset
                                    @error('permissions')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-primary">Create Role</button>
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
@endsection