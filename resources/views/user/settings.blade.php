@extends('layout.main')
@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-xxl-3 col-lg-4">
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

                            <div class="p-3 mt-3 border-bottom">
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

                            <div class="p-4 mt-2">
                                <h5 class="font-size-16">Info :</h5>

                                <div class="mt-4">
                                    <p class="text-muted mb-1">Name :</p>
                                    <h5 class="font-size-14 text-truncate">Marie N.</h5>
                                </div>

                                <div class="mt-4">
                                    <p class="text-muted mb-1">E-mail :</p>
                                    <h5 class="font-size-14 text-truncate">marie@vuesy.com</h5>
                                </div>

                                <div class="mt-4">
                                    <p class="text-muted mb-1">Location :</p>
                                    <h5 class="font-size-14 text-truncate">California, United States</h5>
                                </div>
                            </div>

                        </div>
                        <!-- end card body -->
                    </div>
                </div>
                <!-- end col -->

                <div class="col-xxl-9 col-lg-8">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title mb-4">Setting</h5>
                            <form>
                                <div class="card border shadow-none mb-5">
                                    <div class="card-header d-flex align-items-center">
                                        <div class="flex-shrink-0 me-3">
                                            <div class="avatar">
                                                <div class="avatar-title rounded-circle bg-soft-primary text-primary">
                                                    01
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h5 class="card-title">General Info</h5>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div>

                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="gen-info-name-input">Name</label>
                                                        <input type="text" class="form-control" id="gen-info-name-input" placeholder="Enter Name">
                                                    </div>

                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="gen-info-designation-input">Designation</label>
                                                        <input type="text" class="form-control" id="gen-info-designation-input" placeholder="Enter Designation">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label" for="gen-info-description-input">Description</label>
                                                <textarea class="form-control" placeholder="Enter Description" id="gen-info-description-input" rows="3"></textarea>
                                            </div>

                                            <div class="form-check mb-3" data-bs-toggle="collapse" data-bs-target="#collapseChangePassword" aria-expanded="false" aria-controls="collapseChangePassword">
                                                <input type="checkbox" class="form-check-input" id="gen-info-change-password">
                                                <label class="form-check-label" for="gen-info-change-password">Change passowrd?</label>
                                            </div>

                                            <div class="collapse" id="collapseChangePassword">
                                                <div class="card border shadow-none card-body">
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <div class="mb-lg-0">
                                                                <label for="current-password-input" class="form-label">Current password</label>
                                                                <input type="password" class="form-control" placeholder="Enter Current password" id="current-password-input">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="mb-lg-0">
                                                                <label for="new-password-input" class="form-label">New password</label>
                                                                <input type="password" class="form-control" placeholder="Enter New password" id="new-password-input">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="mb-lg-0">
                                                                <label for="confirm-password-input" class="form-label">Confirm password</label>
                                                                <input type="password" class="form-control" placeholder="Enter Confirm password" id="confirm-password-input">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div>
                                                <label for="choices-multiple-skill-input" class="form-label">Skills</label>
                                                <select class="form-control" name="choices-multiple-skill-input"
                                                        id="choices-multiple-skill-input"  multiple>
                                                    <option value="Photoshop" selected>Photoshop</option>
                                                    <option value="illustrator" selected>illustrator</option>
                                                    <option value="HTML">HTML</option>
                                                    <option value="CSS">CSS</option>
                                                    <option value="Javascript">Javascript</option>
                                                    <option value="Php">Php</option>
                                                    <option value="Python">Python</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end card -->

                                <div class="card border shadow-none mb-5">
                                    <div class="card-header d-flex align-items-center">
                                        <div class="flex-shrink-0 me-3">
                                            <div class="avatar">
                                                <div class="avatar-title rounded-circle bg-soft-primary text-primary">
                                                    02
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h5 class="card-title">Contact Info</h5>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label for="contact-info-email-input">E-mail :</label>
                                            <input type="email" class="form-control" id="contact-info-email-input" placeholder="Enter Email">
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-md-0">
                                                    <label for="contact-info-website-input" class="form-label">Website</label>
                                                    <input type="url" class="form-control" placeholder="Enter website url" id="contact-info-website-input">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-md-0">
                                                    <label for="contact-info-location-input" class="form-label">Location</label>
                                                    <input type="url" class="form-control" placeholder="Enter Address" id="contact-info-location-input">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end card -->

                                <div class="card border shadow-none">
                                    <div class="card-header d-flex align-items-center">
                                        <div class="flex-shrink-0 me-3">
                                            <div class="avatar">
                                                <div class="avatar-title rounded-circle bg-soft-primary text-primary">
                                                    03
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h5 class="card-title">Experience</h5>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label for="workexperience-designation-input">Designation</label>
                                                    <input type="text" class="form-control" id="workexperience-designation-input" placeholder="Enter Designation title">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label for="workexperience-companyname-input">Company name</label>
                                                    <input type="text" class="form-control" id="workexperience-companyname-input" placeholder="Enter Company name">
                                                </div>
                                            </div>
                                        </div>


                                        <div>
                                            <label>Years</label>
                                            <input type="text" class="form-control" id="datepicker-range">
                                        </div>
                                    </div>
                                </div>
                                <!-- end card -->

                                <div class="text-end">
                                    <button type="submit" class="btn btn-primary w-sm">Submit</button>
                                </div>
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

        </div> <!-- container-fluid -->
    </div>
@endsection