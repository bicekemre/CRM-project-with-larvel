@extends('layout.main')
@section('page-name', 'Permissions')
@section('breadcrumb')
    <li class="breadcrumb-item"><a href="/roles">Roles</a></li>
@endsection
@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">

                            <div class="table-responsive">
                                <table class="table table-centered align-middle table-nowrap table-hover mb-0">
                                    <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Permissions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @isset($permissions)
                                        @foreach($permissions as $permission)
                                            <tr>
                                                <td>
                                                    <div class="avatar">
                                                        {{ $permission->id }}
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="avatar">
                                                        {{ $permission->name }}
                                                    </div>
                                                </td>
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