@extends('layout.main')
@section('content')
<div class="page-content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-xl-3">
                <div class="card">
                    <div class="card-body p-0">
                        <div class="user-profile-img">
                            <img src="assets/images/pattern-bg.jpg" class="profile-img profile-foreground-img rounded-top" style="height: 120px;" alt="">
                            <div class="overlay-content rounded-top">
                                <div>
                                    <div class="user-nav p-3">
                                        <div class="d-flex justify-content-end">
                                            <div class="dropdown">
                                                <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="bx bx-dots-horizontal font-size-20 text-white"></i>
                                                </a>

                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                                    <li><a class="dropdown-item" href="#">Another action</a>
                                                    </li>
                                                    <li><a class="dropdown-item" href="#">Something else
                                                            here</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end user-profile-img -->

                        <div class="mt-n5 position-relative">
                            <div class="text-center">
                                <img src="assets/images/users/avatar-3.jpg" alt="" class="avatar-xl rounded-circle img-thumbnail">

                                <div class="mt-3">
                                    <h5 class="mb-1">Marie N.</h5>
                                    <div>
                                        <a href="#" class="badge badge-soft-success m-1">UX Research</a>


                                        <a href="#" class="badge badge-soft-success m-1">Project Management</a>
                                        <a href="#" class="badge badge-soft-success m-1">CX Strategy</a>
                                    </div>

                                    <div class="mt-4">
                                        <a href="" class="btn btn-primary waves-effect waves-light btn-sm"><i class="bx bx-send me-1 align-middle"></i> Send Message</a>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="p-3 mt-3">
                            <div class="row text-center">
                                <div class="col-6 border-end">
                                    <div class="p-1">
                                        <h5 class="mb-1">3,658</h5>
                                        <p class="text-muted mb-0">Products</p>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="p-1">
                                        <h5 class="mb-1">6.8k</h5>
                                        <p class="text-muted mb-0">Followers</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end card body -->
                </div>

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title mb-2">Portfolio</h5>

                        <div>
                            <ul class="list-unstyled mb-0 text-muted">
                                <li>
                                    <div class="d-flex align-items-center py-2">
                                        <div class="flex-grow-1">
                                            <i class="mdi mdi-github font-size-16 text-dark me-1"></i> Github
                                        </div>
                                        <div class="flex-shrink-0">
                                            <div>vuesy</div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex align-items-center py-2">
                                        <div class="flex-grow-1">
                                            <i class="mdi mdi-twitter font-size-16 text-info me-1"></i> Twitter
                                        </div>
                                        <div class="flex-shrink-0">
                                            <div>@vuesy</div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex align-items-center py-2">
                                        <div class="flex-grow-1">
                                            <i class="mdi mdi-linkedin font-size-16 text-primary me-1"></i> Linkedin
                                        </div>
                                        <div class="flex-shrink-0">
                                            <div>vuesy</div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex align-items-center pt-2 pb-1">
                                        <div class="flex-grow-1">
                                            <i class="mdi mdi-pinterest font-size-16 text-danger me-1"></i> Pinterest
                                        </div>
                                        <div class="flex-shrink-0">
                                            <div>vuesy</div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- end card body -->
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title mb-3">About</h5>
                        <div class="mt-3">
                            <p class="font-size-15 mb-1">Hi my name is Marie N.</p>
                            <p class="font-size-15">I'm the Co-founder and Head of Design at Company agency.</p>

                            <p class="text-muted">Been the industry's standard dummy text To an English person.
                                Our team collaborators and clients to achieve cupidatat non proident, sunt in culpa
                                qui officia find fault with a man who chooses to enjoy a consequences debitis necessitatibus saepe eveniet ut et voluptates laborum growth.</p>

                            <h5 class="font-size-15">Experience :</h5>
                            <div class="row">
                                <div class="col-md-6">
                                    <ul class="list-unstyled mb-0 pt-1">
                                        <li class="py-1"><i class="mdi mdi-circle-medium me-1 text-success align-middle"></i>Donec vitae libero venenatis faucibus</li>
                                        <li class="py-1"><i class="mdi mdi-circle-medium me-1 text-success align-middle"></i>Quisque rutrum aenean imperdiet</li>
                                        <li class="py-1"><i class="mdi mdi-circle-medium me-1 text-success align-middle"></i>Integer ante a consectetuer eget</li>
                                    </ul>
                                </div>

                                <div class="col-md-6">
                                    <ul class="list-unstyled mb-0 pt-1">
                                        <li class="py-1"><i class="mdi mdi-circle-medium me-1 text-success align-middle"></i>Donec vitae libero venenatis faucibus</li>
                                        <li class="py-1"><i class="mdi mdi-circle-medium me-1 text-success align-middle"></i>Quisque rutrum aenean imperdiet</li>
                                        <li class="py-1"><i class="mdi mdi-circle-medium me-1 text-success align-middle"></i>Integer ante a consectetuer eget</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="mt-4 pt-3">
                            <h5 class="card-title mb-4">Projects</h5>
                            <div class="table-responsive">
                                <table class="table table-nowrap table-hover mb-1">
                                    <thead class="bg-light">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Projects</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Budget</th>
                                        <th scope="col">Status</th>
                                        <th scope="col" style="width: 120px;">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th scope="row">01</th>
                                        <td><a href="#" class="text-dark">Brand Logo Design</a></td>
                                        <td>
                                            18 Jun, 2021
                                        </td>
                                        <td>
                                            $523
                                        </td>
                                        <td>
                                            <span class="badge badge-soft-primary font-size-12">Open</span>
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <a class="text-muted dropdown-toggle font-size-18 px-2" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                </a>

                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">Action</a>
                                                    <a class="dropdown-item" href="#">Another action</a>
                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">02</th>
                                        <td><a href="#" class="text-dark">Chat app Design</a></td>
                                        <td>
                                            28 May, 2021
                                        </td>
                                        <td>
                                            $356
                                        </td>
                                        <td>
                                            <span class="badge badge-soft-success font-size-12">Complete</span>
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <a class="text-muted dropdown-toggle font-size-18 px-2" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                </a>

                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">Action</a>
                                                    <a class="dropdown-item" href="#">Another action</a>
                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">03</th>
                                        <td><a href="#" class="text-dark">Upzet Landing</a></td>
                                        <td>
                                            13 May, 2021
                                        </td>
                                        <td>
                                            $425
                                        </td>
                                        <td>
                                            <span class="badge badge-soft-success font-size-12">Complete</span>
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <a class="text-muted dropdown-toggle font-size-18 px-2" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                </a>

                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">Action</a>
                                                    <a class="dropdown-item" href="#">Another action</a>
                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
            <div class="col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Similar Profiles</h5>

                        <div class=" mb-2 mt-3">
                            <div class="d-flex align-items-center border-bottom py-3">
                                <div class="avatar flex-shrink-0 me-3">
                                    <img src="assets/images/users/avatar-2.jpg" alt="" class="img-fluid rounded-circle">
                                </div>
                                <div class="flex-grow-1">
                                    <div>
                                        <a href="pages-profile.html" class="font-size-14 text-dark mb-1">Esther James</a>
                                        <p class="font-size-13 text-muted mb-0">Frontend Developer</p>
                                    </div>
                                </div>
                                <div class="flex-grow-1 text-end">
                                    <div class="dropdown">
                                        <a class="text-muted dropdown-toggle font-size-18 px-2" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex align-items-center border-bottom py-3">
                                <div class="avatar flex-shrink-0 me-3">
                                    <img src="assets/images/users/avatar-3.jpg" alt="" class="img-fluid rounded-circle">
                                </div>
                                <div class="flex-grow-1">
                                    <div>
                                        <a href="pages-profile.html" class="font-size-14 text-dark mb-1">Jacqueline Steve</a>
                                        <p class="font-size-13 text-muted mb-0">UI/UX Designer</p>
                                    </div>
                                </div>
                                <div class="flex-grow-1 text-end">
                                    <div class="dropdown">
                                        <a class="text-muted dropdown-toggle font-size-18 px-2" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex align-items-center pt-3">
                                <div class="avatar flex-shrink-0 me-3">
                                    <img src="assets/images/users/avatar-4.jpg" alt="" class="img-fluid rounded-circle">
                                </div>
                                <div class="flex-grow-1">
                                    <div>
                                        <a href="pages-profile.html" class="font-size-14 text-dark mb-1">George Whalen</a>
                                        <p class="font-size-13 text-muted mb-0">Backend Developer</p>
                                    </div>
                                </div>
                                <div class="flex-grow-1 text-end">
                                    <div class="dropdown">
                                        <a class="text-muted dropdown-toggle font-size-18 px-2" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- end card body -->
                </div>

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title mb-2">Blog</h5>
                        <div class="mx-n3 px-3" data-simplebar style="max-height: 253px;">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item py-3 px-0">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 me-3">
                                            <div>
                                                <img src="assets/images/small/img-4.jpg" alt="blog img" class="avatar-lg h-auto rounded">
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 overflow-hidden">
                                            <h5 class="font-size-14 mb-1 text-truncate"><a href="ui-cards.html" class="text-dark">Beautiful Day with Friends</a></h5>
                                            <ul class="list-inline font-size-13 text-muted">
                                                <li class="list-inline-item">
                                                    <a href="ui-cards.html" class="text-muted">
                                                        <i class="uil uil-user me-1"></i> Katie
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <i class="uil uil-calender me-1"></i> 12 May
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="flex-shrink-0 ms-2">
                                            <div class="dropdown">
                                                <a class="btn btn-link text-dark font-size-16 p-1 dropdown-toggle shadow-none" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
                                </li>
                                <li class="list-group-item py-3 px-0">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 me-3">
                                            <div>
                                                <img src="assets/images/small/img-3.jpg" alt="blog img" class="avatar-lg h-auto rounded">
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 overflow-hidden">
                                            <h5 class="font-size-14 mb-1 text-truncate"><a href="ui-cards.html" class="text-dark">Morning skating with friends</a></h5>
                                            <ul class="list-inline font-size-13 text-muted">
                                                <li class="list-inline-item">
                                                    <a href="ui-cards.html" class="text-muted">
                                                        <i class="uil uil-user me-1"></i> Katie
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <i class="uil uil-calender me-1"></i> 24 Apr
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="flex-shrink-0 ms-2">
                                            <div class="dropdown">
                                                <a class="btn btn-link text-dark font-size-16 p-1 dropdown-toggle shadow-none" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
                                </li>
                                <li class="list-group-item py-3 px-0">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 me-3">
                                            <div>
                                                <img src="assets/images/small/img-2.jpg" alt="blog img" class="avatar-lg h-auto rounded">
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 overflow-hidden">
                                            <h5 class="font-size-14 mb-1 text-truncate"><a href="ui-cards.html" class="text-dark">Project Discussion with Team</a></h5>
                                            <ul class="list-inline font-size-13 text-muted">
                                                <li class="list-inline-item">
                                                    <a href="ui-cards.html" class="text-muted">
                                                        <i class="uil uil-user me-1"></i> Katie
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <i class="uil uil-calender me-1"></i> 12 Apr
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="flex-shrink-0 ms-2">
                                            <div class="dropdown">
                                                <a class="btn btn-link text-dark font-size-16 p-1 dropdown-toggle shadow-none" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
                                </li>
                                <li class="list-group-item py-3 px-0">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 me-3">
                                            <div>
                                                <img src="assets/images/small/img-9.jpg" alt="blog img" class="avatar-lg h-auto rounded">
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 overflow-hidden">
                                            <h5 class="font-size-14 mb-1 text-truncate"><a href="#" class="text-dark">Reading book</a></h5>
                                            <ul class="list-inline font-size-13 text-muted">
                                                <li class="list-inline-item">
                                                    <a href="#" class="text-muted">
                                                        <i class="uil uil-user me-1"></i> Katie
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <i class="uil uil-calender me-1"></i> 01 Apr
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="flex-shrink-0 ms-2">
                                            <div class="dropdown">
                                                <a class="btn btn-link text-dark font-size-16 p-1 dropdown-toggle shadow-none" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div><!-- end row -->

        <div class="row">
            <div class="col-xl-4">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Weekly Hours</h5>
                    </div>
                    <div class="card-body">
                        <div id="overview-chart" data-colors='["--bs-primary"]' class="apex-charts" dir="ltr"></div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Team Members</h5>
                    </div>

                    <div class="card-body pt-1">
                        <div class="table-responsive">
                            <table class="table align-middle table-nowrap mb-0">
                                <tbody>
                                <tr>
                                    <td style="width: 50px;"><img src="assets/images/users/avatar-2.jpg" class="rounded-circle avatar-sm" alt=""></td>
                                    <td><h5 class="font-size-14 m-0"><a href="javascript: void(0);" class="text-dark">Daniel Canales</a></h5></td>
                                    <td>
                                        <div>
                                            <a href="javascript: void(0);" class="badge bg-soft-primary text-primary font-size-11">Frontend</a>
                                        </div>
                                    </td>
                                    <td>
                                        <i class="mdi mdi-circle-medium font-size-18 text-success align-middle me-1"></i> Online
                                    </td>
                                </tr>
                                <tr>
                                    <td><img src="assets/images/users/avatar-1.jpg" class="rounded-circle avatar-sm" alt=""></td>
                                    <td><h5 class="font-size-14 m-0"><a href="javascript: void(0);" class="text-dark">Jennifer Walker</a></h5></td>
                                    <td>
                                        <div>
                                            <a href="javascript: void(0);" class="badge bg-soft-primary text-primary font-size-11">UI / UX</a>
                                        </div>
                                    </td>
                                    <td>
                                        <i class="mdi mdi-circle-medium font-size-18 text-warning align-middle me-1"></i> Buzy
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="avatar-sm">
                                                                <span class="avatar-title rounded-circle bg-primary text-white font-size-16">
                                                                    C
                                                                </span>
                                        </div>
                                    </td>
                                    <td><h5 class="font-size-14 m-0"><a href="javascript: void(0);" class="text-dark">Carl Mackay</a></h5></td>
                                    <td>
                                        <div>
                                            <a href="javascript: void(0);" class="badge bg-soft-primary text-primary font-size-11">Backend</a>
                                        </div>
                                    </td>
                                    <td>
                                        <i class="mdi mdi-circle-medium font-size-18 text-success align-middle me-1"></i> Online
                                    </td>
                                </tr>
                                <tr>
                                    <td><img src="assets/images/users/avatar-4.jpg" class="rounded-circle avatar-sm" alt=""></td>
                                    <td><h5 class="font-size-14 m-0"><a href="javascript: void(0);" class="text-dark">Janice Cole</a></h5></td>
                                    <td>
                                        <div>
                                            <a href="javascript: void(0);" class="badge bg-soft-primary text-primary font-size-11">Frontend</a>
                                        </div>
                                    </td>
                                    <td>
                                        <i class="mdi mdi-circle-medium font-size-18 text-success align-middle me-1"></i> Online
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="avatar-sm">
                                                                <span class="avatar-title rounded-circle bg-primary text-white font-size-16">
                                                                    T
                                                                </span>
                                        </div>
                                    </td>
                                    <td><h5 class="font-size-14 m-0"><a href="javascript: void(0);" class="text-dark">Tony Brafford</a></h5></td>
                                    <td>
                                        <div>
                                            <a href="javascript: void(0);" class="badge bg-soft-primary text-primary font-size-11">Backend</a>
                                        </div>
                                    </td>
                                    <td>
                                        <i class="mdi mdi-circle-medium font-size-18 text-secondary align-middle me-1"></i> Offline
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title mb-0">Skill</h5>
                        <div class="row align-items-center g-0 mt-4">
                            <div class="col-sm-3">
                                <p class="text-truncate mt-1 mb-0"><i class="mdi mdi-circle-medium text-primary me-2"></i> Photoshop </p>
                            </div>

                            <div class="col-sm-9">
                                <div class="progress mt-1" style="height: 6px;">
                                    <div class="progress-bar progress-bar bg-primary" role="progressbar" style="width: 72%" aria-valuenow="52" aria-valuemin="0" aria-valuemax="52">
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end row-->

                        <div class="row align-items-center g-0 mt-3">
                            <div class="col-sm-3">
                                <p class="text-truncate mt-1 mb-0"><i class="mdi mdi-circle-medium text-primary me-2"></i> illustrator </p>
                            </div>
                            <div class="col-sm-9">
                                <div class="progress mt-1" style="height: 6px;">
                                    <div class="progress-bar progress-bar bg-primary" role="progressbar" style="width: 45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="45">
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end row-->

                        <div class="row align-items-center g-0 mt-3">
                            <div class="col-sm-3">
                                <p class="text-truncate mt-1 mb-0"><i class="mdi mdi-circle-medium text-primary me-2"></i> HTML </p>
                            </div>
                            <div class="col-sm-9">
                                <div class="progress mt-1" style="height: 6px;">
                                    <div class="progress-bar progress-bar bg-primary" role="progressbar" style="width: 68%" aria-valuenow="48" aria-valuemin="0" aria-valuemax="48">
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end row-->

                        <div class="row align-items-center g-0 mt-3">
                            <div class="col-sm-3">
                                <p class="text-truncate mt-1 mb-0"><i class="mdi mdi-circle-medium text-primary me-2"></i> CSS </p>
                            </div>
                            <div class="col-sm-9">
                                <div class="progress mt-1" style="height: 6px;">
                                    <div class="progress-bar progress-bar bg-primary" role="progressbar" style="width: 78%" aria-valuenow="78" aria-valuemin="0" aria-valuemax="78">
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end row-->

                        <div class="row align-items-center g-0 mt-3">
                            <div class="col-sm-3">
                                <p class="text-truncate mt-1 mb-0"><i class="mdi mdi-circle-medium text-primary me-2"></i> Javascript </p>
                            </div>
                            <div class="col-sm-9">
                                <div class="progress mt-1" style="height: 6px;">
                                    <div class="progress-bar progress-bar bg-primary" role="progressbar" style="width: 63%" aria-valuenow="63" aria-valuemin="0" aria-valuemax="63">
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end row-->

                        <div class="row align-items-center g-0 mt-3">
                            <div class="col-sm-3">
                                <p class="text-truncate mt-1 mb-0"><i class="mdi mdi-circle-medium text-primary me-2"></i> Php </p>
                            </div>
                            <div class="col-sm-9">
                                <div class="progress mt-1" style="height: 6px;">
                                    <div class="progress-bar progress-bar bg-primary" role="progressbar" style="width: 48%" aria-valuenow="48" aria-valuemin="0" aria-valuemax="48">
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end row-->

                        <div class="row align-items-center g-0 mt-3">
                            <div class="col-sm-3">
                                <p class="text-truncate mt-1 mb-0"><i class="mdi mdi-circle-medium text-primary me-2"></i> Python </p>
                            </div>
                            <div class="col-sm-9">
                                <div class="progress mt-1" style="height: 6px;">
                                    <div class="progress-bar progress-bar bg-primary" role="progressbar" style="width: 78%" aria-valuenow="78" aria-valuemin="0" aria-valuemax="78">
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end row-->

                    </div>
                </div>
            </div>
        </div>

    </div> <!-- container-fluid -->
</div>
@endsection