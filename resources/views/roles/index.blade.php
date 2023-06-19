@extends('layout.main')
@section('page-name', 'Roles')
@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="col-sm-12">
                                <div class="text-sm-end">
                                    <a href="/roles/create" type="button"
                                       class="btn btn-success btn-rounded waves-effect waves-light mb-2 me-2">
                                        <i class="mdi mdi-plus me-1"></i> New Role
                                    </a>
                                </div>
                            </div><!-- end col-->
                            <div class="table-responsive">
                                <table class="table table-centered align-middle table-nowrap table-hover mb-0">
                                    <thead>
                                    <tr>
                                        <th scope="col">Role</th>
                                        <th scope="col">Permissions</th>
                                        <th scope="col">Users</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @isset($roles)
                                        @foreach($roles as $role)
                                            <tr>
                                                <td>
                                                    <div class="avatar">
                                                        {{ $role->name }}
                                                    </div>
                                                </td>
                                                <td>
                                                    @isset($roles->permissions)<h5 class="font-size-15">@foreach($roles->permissions as $permission) {{ $permission->name  ?? ''}},@endforeach</h5>@endisset
                                                </td>
                                                <td>{{ count($role->users) }}</td>

                                                <td><a href="/roles/edit/{{ $role->id }}" class="btn badge-outline-info">Edit</a>
                                                    <a href="/roles/delete{{ $role->id }}" class="btn badge-outline-danger">Delete</a></td>
                                            </tr>
                                        @endforeach
                                    @endisset

                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div> <!-- container-fluid -->
    </div>
@endsection