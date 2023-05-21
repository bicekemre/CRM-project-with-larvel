@extends('layout.main')
@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <div class="row g-2">
                                <div class="col-lg-auto">
                                    <div class="d-flex">
                                        <div class="avatar flex-shrink-0 me-3">
                                            <div class="avatar-title bg-light rounded-circle">
                                                <img src="assets/images/logo-sm.svg" alt="" height="28">
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h5 class="font-size-16 mb-1">Vuesy Admin Dashboard</h5>
                                            <p class="text-muted mb-0">Lorem ipsum dolor sit amet adipiscing elit</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-auto ms-sm-auto">
                                    <div class="avatar-group justify-content-sm-end">
                                        <div class="avatar-group-item">
                                            <a href="javascript: void(0);" class="d-block" data-bs-toggle="tooltip" data-placement="top" title="Emily Surface">
                                                <div class="avatar">
                                                    <div class="avatar-title rounded-circle bg-primary">
                                                        E
                                                    </div>
                                                </div>
                                            </a>
                                        </div><!-- end avatar group item -->
                                        <div class="avatar-group-item">
                                            <a href="javascript: void(0);" class="d-block" data-bs-toggle="tooltip" data-placement="top" title="James Scott">
                                                <div class="avatar">
                                                    <img src="assets/images/users/avatar-2.jpg" alt="" class="img-fluid rounded-circle">
                                                </div>
                                            </a>
                                        </div><!-- end avatar group item -->
                                        <div class="avatar-group-item">
                                            <a href="javascript: void(0);" class="d-block" data-bs-toggle="tooltip" data-placement="top" title="Lynn Hackett">
                                                <div class="avatar">
                                                    <div class="avatar-title rounded-circle bg-info">
                                                        L
                                                    </div>
                                                </div>
                                            </a>
                                        </div><!-- end avatar group item -->
                                        <div class="avatar-group-item">
                                            <a href="javascript: void(0);" class="d-block" data-bs-toggle="tooltip" data-placement="top" title="Add New">
                                                <div class="avatar">
                                                    <div class="avatar-title rounded-circle bg-light text-primary">
                                                        <i class="mdi mdi-plus fs-5"></i>
                                                    </div>
                                                </div>
                                            </a>
                                        </div><!-- end avatar group item -->
                                    </div><!-- end avatar-group -->
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </div>
                        <!--end card-body-->
                    </div>

                    <div class="card shadow-none border-0 bg-transparent">
                        <div class="task-board">
                            <div class="task-list">
                                <div class="card shadow-none h-100">
                                    <div class="card-header bg-transparent border-bottom d-flex align-items-start">
                                        <div class="flex-grow-1">
                                            <h4 class="card-title mb-0">Todo <span class="font-size-14 text-muted">(03)</span></h4>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle arrow-none font-size-16" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="uil uil-ellipsis-h text-muted"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">Edit</a>
                                                    <a class="dropdown-item" href="#">Delete</a>
                                                </div>
                                            </div> <!-- end dropdown -->
                                        </div>
                                    </div><!-- end card-header -->

                                    <div>
                                        <div class="text-center p-3">
                                            <a href="javascript: void(0);" class="btn btn-primary btn-soft w-100"><i class="mdi mdi-plus mr-1"></i> Add New</a>
                                        </div>

                                        <div data-simplebar class="tasklist-content p-3">
                                            <div id="todo-task" class="tasks">
                                                <div class="card task-box">
                                                    <div class="card-body">
                                                        <div class="d-flex align-items-start mb-3">
                                                            <div class="flex-grow-1">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="" id="task-todoCheck1">
                                                                    <label class="form-check-label text-primary" for="task-todoCheck1">DS-045</label>
                                                                </div>
                                                            </div>

                                                            <div class="flex-shrink-0 ms-2">
                                                                <div class="dropdown">
                                                                    <a href="#" class="dropdown-toggle font-size-16 text-muted" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                        <i class="mdi mdi-dots-horizontal"></i>
                                                                    </a>

                                                                    <div class="dropdown-menu dropdown-menu-end">
                                                                        <a class="dropdown-item" href="#">View</a>
                                                                        <a class="dropdown-item" href="#">Edit</a>
                                                                        <a class="dropdown-item" href="#">Remove</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <h5 class="font-size-15 mb-1">Dashboard UI</h5>

                                                        <p class="text-muted text-truncate">Sed ut perspiciatis unde omnis iste</p>


                                                    </div>
                                                    <div class="card-footer py-2 bg-transparent border-top d-flex align-items-center">
                                                        <div class="flex-grow-1">
                                                            <div class="avatar-group">
                                                                <div class="avatar-group-item">
                                                                    <a href="javascript: void(0);" class="d-block" data-bs-toggle="tooltip" data-bs-placement="top" title="Emily Surface">
                                                                        <div class="avatar-sm">
                                                                            <div class="avatar-title rounded-circle bg-primary">
                                                                                E
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="flex-shrink-0 ms-2">
                                                            <ul class="list-inline mb-0">
                                                                <li class="list-inline-item">
                                                                    <a href="" class="text-muted font-size-13"><i class="mdi mdi-comment-text-outline me-1"></i> 5 Comments</a>
                                                                </li>
                                                                <li class="list-inline-item ms-1">
                                                                    <a href="" class="text-muted font-size-13"><i class="mdi mdi-link-variant me-1"></i> 1 File</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end task card -->

                                                <div class="card task-box">
                                                    <div class="card-body">
                                                        <div class="d-flex mb-3 align-items-start">
                                                            <div class="flex-grow-1">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="" id="task-todoCheck2">
                                                                    <label class="form-check-label text-primary" for="task-todoCheck2">DS-046</label>
                                                                </div>
                                                            </div>

                                                            <div class="flex-shrink-0 ms-2">
                                                                <div class="dropdown">
                                                                    <a href="#" class="dropdown-toggle font-size-16 text-muted" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                        <i class="mdi mdi-dots-horizontal"></i>
                                                                    </a>

                                                                    <div class="dropdown-menu dropdown-menu-end">
                                                                        <a class="dropdown-item" href="#">View</a>
                                                                        <a class="dropdown-item" href="#">Edit</a>
                                                                        <a class="dropdown-item" href="#">Remove</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <h5 class="font-size-15 mb-1">Calendar App Page</h5>

                                                        <p class="text-muted text-truncate">Neque porro quisquam est</p>

                                                    </div><!-- end cardbody -->
                                                    <div class="card-footer py-2 bg-transparent border-top d-flex align-items-center">
                                                        <div class="flex-grow-1">
                                                            <div class="avatar-group">
                                                                <div class="avatar-group-item">
                                                                    <a href="javascript: void(0);" class="d-block" data-bs-toggle="tooltip" data-bs-placement="top" title="James Scott">
                                                                        <div class="avatar-sm">
                                                                            <img src="assets/images/users/avatar-9.jpg" alt="" class="img-fluid rounded-circle">
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="avatar-group-item">
                                                                    <a href="javascript: void(0);" class="d-block" data-bs-toggle="tooltip" data-bs-placement="top" title="Lynn Hackett">
                                                                        <div class="avatar-sm">
                                                                            <div class="avatar-title rounded-circle bg-info">
                                                                                E
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="flex-shrink-0 ms-2">
                                                            <ul class="list-inline mb-0">
                                                                <li class="list-inline-item">
                                                                    <a href="" class="text-muted font-size-13"><i class="mdi mdi-comment-text-outline me-1"></i> 41 Comments</a>
                                                                </li>
                                                                <li class="list-inline-item ms-1">
                                                                    <a href="" class="text-muted font-size-13"><i class="mdi mdi-link-variant me-1"></i> 21 Files</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end task card -->

                                                <div class="card task-box">
                                                    <div class="card-body">
                                                        <div class="d-flex align-items-start mb-3">
                                                            <div class="flex-grow-1">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="" id="task-todoCheck3">
                                                                    <label class="form-check-label text-primary" for="task-todoCheck3">DS-047</label>
                                                                </div>
                                                            </div>

                                                            <div class="flex-shrink-0 ms-2">
                                                                <div class="dropdown">
                                                                    <a href="#" class="dropdown-toggle font-size-16 text-muted" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                        <i class="mdi mdi-dots-horizontal"></i>
                                                                    </a>

                                                                    <div class="dropdown-menu dropdown-menu-end">
                                                                        <a class="dropdown-item" href="#">View</a>
                                                                        <a class="dropdown-item" href="#">Edit</a>
                                                                        <a class="dropdown-item" href="#">Remove</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <h5 class="font-size-15 mb-1">Authentication Page Design</h5>

                                                        <p class="text-muted text-truncate">In enim justo rhoncus ut</p>

                                                    </div>
                                                    <div class="card-footer py-2 bg-transparent border-top d-flex align-items-center">
                                                        <div class="flex-grow-1">
                                                            <div class="avatar-group-item">
                                                                <a href="javascript: void(0);" class="d-block" data-bs-toggle="tooltip" data-bs-placement="top" title="Emily Surface">
                                                                    <div class="avatar-sm">
                                                                        <div class="avatar-title rounded-circle bg-danger">
                                                                            E
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="flex-shrink-0 ms-2">
                                                            <ul class="list-inline mb-0">
                                                                <li class="list-inline-item">
                                                                    <a href="" class="text-muted font-size-13"><i class="mdi mdi-comment-text-outline me-1"></i> 24 Comments</a>
                                                                </li>
                                                                <li class="list-inline-item ms-1">
                                                                    <a href="" class="text-muted font-size-13"><i class="mdi mdi-link-variant me-1"></i> 32 Files</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end task card -->
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- end tasklist -->

                            <div class="task-list">
                                <div class="card shadow-none h-100">
                                    <div class="card-header bg-transparent border-bottom d-flex align-items-start">
                                        <div class="flex-grow-1">
                                            <h4 class="card-title mb-0">In Progress <span class="font-size-14 text-muted">(01)</span></h4>
                                        </div>
                                        <div class="flex-shrink-0 ms-2">
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle arrow-none font-size-16" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="uil uil-ellipsis-h text-muted"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">Edit</a>
                                                    <a class="dropdown-item" href="#">Delete</a>
                                                </div>
                                            </div> <!-- end dropdown -->
                                        </div>
                                    </div>

                                    <div>
                                        <div class="text-center p-3">
                                            <a href="javascript: void(0);" class="btn btn-primary btn-soft w-100"><i class="mdi mdi-plus mr-1"></i> Add New</a>
                                        </div>

                                        <div data-simplebar class="tasklist-content p-3">
                                            <div id="inprogress-task" class="tasks">
                                                <div class="card task-box">
                                                    <div class="card-body">
                                                        <div class="d-flex align-items-start mb-3">
                                                            <div class="flex-grow-1">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="" id="task-inprogressCheck1">
                                                                    <label class="form-check-label text-primary" for="task-inprogressCheck1">DS-044</label>
                                                                </div>
                                                            </div>

                                                            <div class="flex-shrink-0 ms-2">
                                                                <div class="dropdown">
                                                                    <a href="#" class="dropdown-toggle font-size-16 text-muted" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                        <i class="mdi mdi-dots-horizontal"></i>
                                                                    </a>

                                                                    <div class="dropdown-menu dropdown-menu-end">
                                                                        <a class="dropdown-item" href="#">View</a>
                                                                        <a class="dropdown-item" href="#">Edit</a>
                                                                        <a class="dropdown-item" href="#">Remove</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <h5 class="font-size-15 mb-1">Component Pages</h5>
                                                        <p class="text-muted text-truncate">Donec quam felis ultricies nec</p>
                                                    </div>
                                                    <div class="card-footer py-2 bg-transparent border-top d-flex align-items-center">
                                                        <div class="flex-grow-1">
                                                            <div class="avatar-group-item">
                                                                <a href="javascript: void(0);" class="d-block" data-bs-toggle="tooltip" data-bs-placement="top" title="James Scott">
                                                                    <div class="avatar-sm">
                                                                        <img src="assets/images/users/avatar-4.jpg" alt="" class="img-fluid rounded-circle">
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="flex-shrink-0 ms-2">
                                                            <ul class="list-inline mb-0">
                                                                <li class="list-inline-item">
                                                                    <a href="" class="text-muted font-size-13"><i class="mdi mdi-comment-text-outline me-1"></i> 24 Comments</a>
                                                                </li>
                                                                <li class="list-inline-item ms-1">
                                                                    <a href="" class="text-muted font-size-13"><i class="mdi mdi-link-variant me-1"></i> 23 Files</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- end card-footer -->
                                                </div><!-- end task card -->
                                            </div>
                                        </div><!-- end data - simplebar -->
                                    </div>
                                </div><!-- end card -->
                            </div><!-- end tasklist -->

                            <div class="task-list">
                                <div class="card shadow-none h-100">
                                    <div class="card-header bg-transparent border-bottom d-flex align-items-start">
                                        <div class="flex-grow-1">
                                            <h4 class="card-title mb-0">On Hold <span class="font-size-14 text-muted">(02)</span></h4>
                                        </div>
                                        <div class="flex-shrink-0 ms-2">
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle arrow-none font-size-16" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="uil uil-ellipsis-h text-muted"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">Edit</a>
                                                    <a class="dropdown-item" href="#">Delete</a>
                                                </div>
                                            </div> <!-- end dropdown -->
                                        </div>
                                    </div>

                                    <div>
                                        <div class="text-center p-3">
                                            <a href="javascript: void(0);" class="btn btn-primary btn-soft w-100"><i class="mdi mdi-plus mr-1"></i> Add New</a>
                                        </div>

                                        <div data-simplebar class="tasklist-content p-3">
                                            <div id="hold-task" class="tasks">
                                                <div class="card task-box">
                                                    <div class="card-body">
                                                        <div class="d-flex align-items-start mb-3">
                                                            <div class="flex-grow-1">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="" id="task-completeCheck11">
                                                                    <label class="form-check-label text-primary" for="task-completeCheck11">DS-041</label>
                                                                </div>
                                                            </div>

                                                            <div class="flex-shrink-0 ms-2">
                                                                <div class="dropdown">
                                                                    <a href="#" class="dropdown-toggle font-size-16 text-muted" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                        <i class="mdi mdi-dots-horizontal"></i>
                                                                    </a>

                                                                    <div class="dropdown-menu dropdown-menu-end">
                                                                        <a class="dropdown-item" href="#">View</a>
                                                                        <a class="dropdown-item" href="#">Edit</a>
                                                                        <a class="dropdown-item" href="#">Remove</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <h5 class="font-size-15 mb-1">Admin Layout Design</h5>

                                                        <p class="text-muted text-truncate">At vero eos et accusamus et </p>


                                                    </div>
                                                    <div class="card-footer py-2 bg-transparent border-top d-flex align-items-center">
                                                        <div class="flex-grow-1">
                                                            <div class="avatar-group">
                                                                <div class="avatar-group-item">
                                                                    <a href="javascript: void(0);" class="d-block" data-bs-toggle="tooltip" data-bs-placement="top" title="James Scott">
                                                                        <div class="avatar-sm">
                                                                            <img src="assets/images/users/avatar-7.jpg" alt="" class="img-fluid rounded-circle">
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="avatar-group-item">
                                                                    <a href="javascript: void(0);" class="d-block" data-bs-toggle="tooltip" data-bs-placement="top" title="Lynn Hackett">
                                                                        <div class="avatar-sm">
                                                                            <div class="avatar-title rounded-circle bg-info">
                                                                                L
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="flex-shrink-0 ms-2">
                                                            <ul class="list-inline mb-0">
                                                                <li class="list-inline-item">
                                                                    <a href="" class="text-muted font-size-13"><i class="mdi mdi-comment-text-outline me-1"></i> 14 Comments</a>
                                                                </li>
                                                                <li class="list-inline-item ms-1">
                                                                    <a href="" class="text-muted font-size-13"><i class="mdi mdi-link-variant me-1"></i> 52 Files</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end task card -->

                                                <div class="card task-box">
                                                    <div class="card-body">
                                                        <div class="d-flex align-items-start mb-3">
                                                            <div class="flex-grow-1">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="" id="task-completeCheck22">
                                                                    <label class="form-check-label text-primary" for="task-completeCheck22">DS-042</label>
                                                                </div>
                                                            </div>

                                                            <div class="flex-shrink-0 ms-2">
                                                                <div class="dropdown">
                                                                    <a href="#" class="dropdown-toggle font-size-16 text-muted" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                        <i class="mdi mdi-dots-horizontal"></i>
                                                                    </a>

                                                                    <div class="dropdown-menu dropdown-menu-end">
                                                                        <a class="dropdown-item" href="#">View</a>
                                                                        <a class="dropdown-item" href="#">Edit</a>
                                                                        <a class="dropdown-item" href="#">Remove</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <h5 class="font-size-15 mb-1">Brand Logo Design</h5>

                                                        <p class="text-muted text-truncate">Nemo enim ipsam voluptatem</p>
                                                    </div>
                                                    <div class="card-footer py-2 bg-transparent border-top d-flex align-items-center">
                                                        <div class="flex-grow-1">
                                                            <div class="avatar-group-item">
                                                                <a href="javascript: void(0);" class="d-block" data-bs-toggle="tooltip" data-bs-placement="top" title="Emily Surface">
                                                                    <div class="avatar-sm">
                                                                        <div class="avatar-title rounded-circle bg-primary">
                                                                            E
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="flex-shrink-0 ms-2">
                                                            <ul class="list-inline mb-0">
                                                                <li class="list-inline-item">
                                                                    <a href="" class="text-muted font-size-13"><i class="mdi mdi-comment-text-outline me-1"></i> 24 Comments</a>
                                                                </li>
                                                                <li class="list-inline-item ms-1">
                                                                    <a href="" class="text-muted font-size-13"><i class="mdi mdi-link-variant me-1"></i> 23 Files</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end task card -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end tasklist -->
                            <div class="task-list">
                                <div class="card shadow-none h-100">
                                    <div class="card-header bg-transparent border-bottom d-flex align-items-start">
                                        <div class="flex-grow-1">
                                            <h4 class="card-title mb-0">Completed <span class="font-size-14 text-muted">(03)</span></h4>
                                        </div>
                                        <div class="flex-shrink-0 ms-2">
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle arrow-none font-size-16" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="uil uil-ellipsis-h text-muted"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">Edit</a>
                                                    <a class="dropdown-item" href="#">Delete</a>
                                                </div>
                                            </div> <!-- end dropdown -->
                                        </div>
                                    </div>

                                    <div>
                                        <div class="text-center p-3">
                                            <a href="javascript: void(0);" class="btn btn-primary btn-soft w-100"><i class="mdi mdi-plus mr-1"></i> Add New</a>
                                        </div>

                                        <div data-simplebar class="tasklist-content p-3">
                                            <div id="completed-task" class="tasks">
                                                <div class="card task-box">
                                                    <div class="card-body">
                                                        <div class="d-flex align-items-start mb-3">
                                                            <div class="flex-grow-1">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="" id="task-completeCheck1">
                                                                    <label class="form-check-label text-primary" for="task-completeCheck1">DS-041</label>
                                                                </div>
                                                            </div>

                                                            <div class="flex-shrink-0 ms-2">
                                                                <div class="dropdown">
                                                                    <a href="#" class="dropdown-toggle font-size-16 text-muted" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                        <i class="mdi mdi-dots-horizontal"></i>
                                                                    </a>

                                                                    <div class="dropdown-menu dropdown-menu-end">
                                                                        <a class="dropdown-item" href="#">View</a>
                                                                        <a class="dropdown-item" href="#">Edit</a>
                                                                        <a class="dropdown-item" href="#">Remove</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <h5 class="font-size-15 mb-1">Admin Layout Design</h5>

                                                        <p class="text-muted text-truncate">At vero eos et accusamus et </p>

                                                    </div>
                                                    <div class="card-footer py-2 bg-transparent border-top d-flex align-items-center">
                                                        <div class="flex-grow-1">
                                                            <div class="avatar-group">
                                                                <div class="avatar-group-item">
                                                                    <a href="javascript: void(0);" class="d-block" data-bs-toggle="tooltip" data-bs-placement="top" title="James Scott">
                                                                        <div class="avatar-sm">
                                                                            <img src="assets/images/users/avatar-2.jpg" alt="" class="img-fluid rounded-circle">
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="avatar-group-item">
                                                                    <a href="javascript: void(0);" class="d-block" data-bs-toggle="tooltip" data-bs-placement="top" title="Lynn Hackett">
                                                                        <div class="avatar-sm">
                                                                            <div class="avatar-title rounded-circle bg-info">
                                                                                L
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="flex-shrink-0 ms-2">
                                                            <ul class="list-inline mb-0">
                                                                <li class="list-inline-item">
                                                                    <a href="" class="text-muted font-size-13"><i class="mdi mdi-comment-text-outline me-1"></i> 43 Comments</a>
                                                                </li>
                                                                <li class="list-inline-item ms-1">
                                                                    <a href="" class="text-muted font-size-13"><i class="mdi mdi-link-variant me-1"></i> 32 Files</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end task card -->

                                                <div class="card task-box">
                                                    <div class="card-body">
                                                        <div class="d-flex align-items-start mb-3">
                                                            <div class="flex-grow-1">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="" id="task-completeCheck2">
                                                                    <label class="form-check-label text-primary" for="task-completeCheck2">DS-042</label>
                                                                </div>
                                                            </div>

                                                            <div class="flex-shrink-0 ms-2">
                                                                <div class="dropdown">
                                                                    <a href="#" class="dropdown-toggle font-size-16 text-muted" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                        <i class="mdi mdi-dots-horizontal"></i>
                                                                    </a>

                                                                    <div class="dropdown-menu dropdown-menu-end">
                                                                        <a class="dropdown-item" href="#">View</a>
                                                                        <a class="dropdown-item" href="#">Edit</a>
                                                                        <a class="dropdown-item" href="#">Remove</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <h5 class="font-size-15 mb-1">Brand Logo Design</h5>

                                                        <p class="text-muted text-truncate">Nemo enim ipsam voluptatem</p>

                                                    </div>
                                                    <div class="card-footer py-2 bg-transparent border-top d-flex align-items-center">
                                                        <div class="flex-grow-1">
                                                            <div class="avatar-group">
                                                                <div class="avatar-group-item">
                                                                    <a href="javascript: void(0);" class="d-block" data-bs-toggle="tooltip" data-bs-placement="top" title="Emily Surface">
                                                                        <div class="avatar-sm">
                                                                            <div class="avatar-title rounded-circle bg-primary">
                                                                                E
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="flex-shrink-0 ms-2">
                                                            <ul class="list-inline mb-0">
                                                                <li class="list-inline-item">
                                                                    <a href="" class="text-muted font-size-13"><i class="mdi mdi-comment-text-outline me-1"></i> 12 Comments</a>
                                                                </li>
                                                                <li class="list-inline-item ms-1">
                                                                    <a href="" class="text-muted font-size-13"><i class="mdi mdi-link-variant me-1"></i> 32 Files</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end task card -->

                                                <div class="card task-box">
                                                    <div class="card-body">
                                                        <div class="d-flex align-items-start mb-3">
                                                            <div class="flex-grow-1">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="" id="task-completeCheck33">
                                                                    <label class="form-check-label text-primary" for="task-completeCheck33">DS-024</label>
                                                                </div>
                                                            </div>

                                                            <div class="flex-shrink-0 ms-2">
                                                                <div class="dropdown">
                                                                    <a href="#" class="dropdown-toggle font-size-16 text-muted" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                        <i class="mdi mdi-dots-horizontal"></i>
                                                                    </a>

                                                                    <div class="dropdown-menu dropdown-menu-end">
                                                                        <a class="dropdown-item" href="#">View</a>
                                                                        <a class="dropdown-item" href="#">Edit</a>
                                                                        <a class="dropdown-item" href="#">Remove</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <h5 class="font-size-15 mb-1">New Landing Pege</h5>

                                                        <p class="text-muted text-truncate">Aldus Page Maker including versions of </p>

                                                    </div>
                                                    <div class="card-footer py-2 bg-transparent border-top d-flex align-items-center">
                                                        <div class="flex-grow-1">
                                                            <div class="avatar-group">
                                                                <div class="avatar-group-item">
                                                                    <a href="javascript: void(0);" class="d-block" data-bs-toggle="tooltip" data-bs-placement="top" title="Emily Surface">
                                                                        <div class="avatar-sm">
                                                                            <div class="avatar-title rounded-circle bg-primary">
                                                                                O
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="flex-shrink-0 ms-2">
                                                            <ul class="list-inline mb-0">
                                                                <li class="list-inline-item">
                                                                    <a href="" class="text-muted font-size-13"><i class="mdi mdi-comment-text-outline me-1"></i> 05 Comments</a>
                                                                </li>
                                                                <li class="list-inline-item ms-1">
                                                                    <a href="" class="text-muted font-size-13"><i class="mdi mdi-link-variant me-1"></i> 43 Files</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end task card -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end tasklist -->
                        </div>
                    </div>
                </div><!-- end col -->
            </div><!-- end row -->

        </div> <!-- container-fluid -->
    </div>
@endsection