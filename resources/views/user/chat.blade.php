@extends('layout.main')
@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <div class="d-lg-flex mb-4">
                <div class="chat-leftsidebar card">
                    <div class="p-4 pb-0 rounded-top">
                        <div class="d-flex border-bottom pb-3 align-items-start">
                            <div class="flex-grow-1">
                                <img src="assets/images/logo-sm.svg" class="avatar-sm h-auto" alt="">
                            </div>

                            <div class="flex-shrink-0">
                                <div class="d-flex gap-2 align-items-start">
                                    <div class="dropdown chat-noti-dropdown">
                                        <button class="btn dropdown-toggle py-0 shadow-none" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="uil uil-search"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-md p-2">
                                            <form class="px-2">
                                                <div>
                                                    <input type="text" class="form-control bg-light rounded" placeholder="Search...">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="dropdown chat-noti-dropdown">
                                        <button class="btn dropdown-toggle py-0" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="uil uil-ellipsis-h"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">Profile</a>
                                            <a class="dropdown-item" href="#">Edit</a>
                                            <a class="dropdown-item" href="#">Add Contact</a>
                                            <a class="dropdown-item" href="#">Setting</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="chat-leftsidebar-nav mt-4 pt-2">
                            <ul class="nav nav-pills nav-justified bg-light nav-justified">
                                <li class="nav-item">
                                    <a href="#chat" data-bs-toggle="tab" aria-expanded="true" class="nav-link active">
                                        <i class="uil uil-comment-lines font-size-20 d-sm-none"></i>
                                        <span class="d-none d-sm-block">Chat</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#groups" data-bs-toggle="tab" aria-expanded="false" class="nav-link">
                                        <i class="uil uil-users-alt font-size-20 d-sm-none"></i>
                                        <span class="d-none d-sm-block">Groups</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#contacts" data-bs-toggle="tab" aria-expanded="false" class="nav-link">
                                        <i class="uil uil-user-circle font-size-20 d-sm-none"></i>
                                        <span class="d-none d-sm-block">Contacts</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>


                    <div>
                        <div class="tab-content">
                            <div class="tab-pane show active" id="chat">
                                <div class="chat-message-list" data-simplebar>
                                    <div class="p-4">
                                        <div>
                                            <h5 class="font-size-14 mb-3">Recent</h5>

                                            <ul class="list-unstyled chat-list">
                                                <li class="active">
                                                    <a href="#">
                                                        <div class="d-flex align-items-start">

                                                            <div class="flex-shrink-0 user-img online align-self-center me-3">
                                                                <img src="assets/images/users/avatar-9.jpg" class="rounded-circle avatar-sm" alt="">
                                                                <span class="user-status"></span>
                                                            </div>

                                                            <div class="flex-grow-1 overflow-hidden">
                                                                <h5 class="text-truncate font-size-14 mb-1">Daniel Pickering</h5>
                                                                <p class="text-truncate mb-0">Hey! there I'm available</p>
                                                            </div>
                                                            <div class="flex-shrink-0">
                                                                <div class="font-size-11">02 min</div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <!-- end li -->
                                                <li>
                                                    <a href="#">
                                                        <div class="d-flex align-items-start">
                                                            <div class="flex-shrink-0 user-img online align-self-center me-3">
                                                                <div class="avatar-sm align-self-center">
                                                                                <span class="avatar-title rounded-circle bg-soft-primary text-primary">
                                                                                    H
                                                                                </span>
                                                                </div>
                                                                <span class="user-status"></span>
                                                            </div>

                                                            <div class="flex-grow-1 overflow-hidden">
                                                                <h5 class="text-truncate font-size-14 mb-1">Helen Harper</h5>
                                                                <p class="text-truncate mb-0">I've finished it! See you so</p>
                                                            </div>
                                                            <div class="flex-shrink-0">
                                                                <div class="font-size-11">10 min</div>
                                                            </div>

                                                            <div class="unread-message">
                                                                <span class="badge bg-danger rounded-pill">01</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <!-- end li -->
                                                <li>
                                                    <a href="#">
                                                        <div class="d-flex align-items-start">
                                                            <div class="flex-shrink-0 user-img away align-self-center me-3">
                                                                <img src="assets/images/users/avatar-3.jpg" class="rounded-circle avatar-sm" alt="">
                                                                <span class="user-status"></span>
                                                            </div>

                                                            <div class="flex-grow-1 overflow-hidden">
                                                                <h5 class="text-truncate font-size-14 mb-1">Mary Welch</h5>
                                                                <p class="text-truncate mb-0">This theme is awesome!</p>
                                                            </div>
                                                            <div class="flex-shrink-0">
                                                                <div class="font-size-11">22 min</div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <!-- end li -->
                                                <li>
                                                    <a href="#">
                                                        <div class="d-flex align-items-start">

                                                            <div class="flex-shrink-0 user-img align-self-center me-3">
                                                                <img src="assets/images/users/avatar-4.jpg" class="rounded-circle avatar-sm" alt="">
                                                                <span class="user-status"></span>
                                                            </div>

                                                            <div class="flex-grow-1 overflow-hidden">
                                                                <h5 class="text-truncate font-size-14 mb-1">Vicky Garcia</h5>
                                                                <p class="text-truncate mb-0">Nice to meet you</p>
                                                            </div>
                                                            <div class="flex-shrink-0">
                                                                <div class="font-size-11">01 Hr</div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <!-- end li -->
                                                <li>
                                                    <a href="#">
                                                        <div class="d-flex align-items-start">

                                                            <div class="flex-shrink-0 user-img online align-self-center me-3">
                                                                <div class="avatar-sm align-self-center">
                                                                                <span class="avatar-title rounded-circle bg-soft-primary text-primary">
                                                                                    S
                                                                                </span>
                                                                </div>
                                                                <span class="user-status"></span>
                                                            </div>

                                                            <div class="flex-grow-1 overflow-hidden">
                                                                <h5 class="text-truncate font-size-14 mb-1">Scott Pierce</h5>
                                                                <p class="text-truncate mb-0">Wow that's great</p>
                                                            </div>
                                                            <div class="flex-shrink-0">
                                                                <div class="font-size-11">04 Hrs</div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <!-- end li -->
                                                <li>
                                                    <a href="#">
                                                        <div class="d-flex align-items-start">

                                                            <div class="flex-shrink-0 user-img online align-self-center me-3">
                                                                <div class="avatar-sm align-self-center">
                                                                                <span class="avatar-title rounded-circle bg-soft-primary text-primary">
                                                                                    R
                                                                                </span>
                                                                </div>
                                                                <span class="user-status"></span>
                                                            </div>

                                                            <div class="flex-grow-1 overflow-hidden">
                                                                <h5 class="text-truncate font-size-14 mb-1">Ray Little</h5>
                                                                <p class="text-truncate mb-0">Hey! there I'm available</p>
                                                            </div>
                                                            <div class="flex-shrink-0">
                                                                <div class="font-size-11">10 Hrs</div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <!-- end li -->
                                                <li>
                                                    <a href="#">
                                                        <div class="d-flex align-items-start">

                                                            <div class="flex-shrink-0 user-img online align-self-center me-3">
                                                                <div class="avatar-sm align-self-center">
                                                                                <span class="avatar-title rounded-circle bg-soft-primary text-primary">
                                                                                    R
                                                                                </span>
                                                                </div>
                                                                <span class="user-status"></span>
                                                            </div>

                                                            <div class="flex-grow-1 overflow-hidden">
                                                                <h5 class="text-truncate font-size-14 mb-1">Robert Perez</h5>
                                                                <p class="text-truncate mb-0">Thanks</p>
                                                            </div>
                                                            <div class="flex-shrink-0">
                                                                <div class="font-size-11">yesterday</div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <!-- end li -->
                                                <li>
                                                    <a href="#">
                                                        <div class="d-flex align-items-start">
                                                            <div class="flex-shrink-0 user-img away align-self-center me-3">
                                                                <img src="assets/images/users/avatar-3.jpg" class="rounded-circle avatar-sm" alt="">
                                                                <span class="user-status"></span>
                                                            </div>

                                                            <div class="flex-grow-1 overflow-hidden">
                                                                <h5 class="text-truncate font-size-14 mb-1">Mary Welch</h5>
                                                                <p class="text-truncate mb-0">This theme is awesome!</p>
                                                            </div>
                                                            <div class="flex-shrink-0">
                                                                <div class="font-size-11">22 min</div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <!-- end li -->
                                            </ul>
                                            <!-- end ul -->
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane" id="groups">
                                <div class="chat-message-list" data-simplebar>
                                    <div class="p-4">
                                        <div>
                                            <div class="d-flex">
                                                <h5 class="font-size-14">Groups</h5>
                                                <div class="ms-auto">
                                                    <a href="#"><i class="uil uil-plus"></i> Add New</a>
                                                </div>
                                            </div>

                                            <ul class="list-unstyled chat-list">

                                                <li>
                                                    <a href="#">
                                                        <div class="d-flex align-items-start">

                                                            <div class="flex-shrink-0 user-img online align-self-center me-3">
                                                                <div class="avatar-sm align-self-center">
                                                                                <span class="avatar-title rounded-circle bg-soft-primary text-primary">
                                                                                    G
                                                                                </span>
                                                                </div>
                                                            </div>

                                                            <div class="flex-grow-1 overflow-hidden">
                                                                <h5 class="text-truncate font-size-14 mb-1">General</h5>
                                                                <p class="text-truncate mb-0">12 Members</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <!-- end li -->
                                                <li>
                                                    <a href="#">
                                                        <div class="d-flex align-items-start">

                                                            <div class="flex-shrink-0 user-img online align-self-center me-3">
                                                                <div class="avatar-sm align-self-center">
                                                                                <span class="avatar-title rounded-circle bg-soft-primary text-primary">
                                                                                    R
                                                                                </span>
                                                                </div>
                                                            </div>

                                                            <div class="flex-grow-1 overflow-hidden">
                                                                <h5 class="text-truncate font-size-14 mb-1">Reporting</h5>
                                                                <p class="text-truncate mb-0">12 Members</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <!-- end li -->
                                                <li>
                                                    <a href="#">
                                                        <div class="d-flex align-items-start">

                                                            <div class="flex-shrink-0 user-img online align-self-center me-3">
                                                                <div class="avatar-sm align-self-center">
                                                                                <span class="avatar-title rounded-circle bg-soft-primary text-primary">
                                                                                    A
                                                                                </span>
                                                                </div>
                                                            </div>

                                                            <div class="flex-grow-1 overflow-hidden">
                                                                <h5 class="text-truncate font-size-14 mb-1">Project A</h5>
                                                                <p class="text-truncate mb-0">04 Members</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <!-- end li -->
                                                <li>
                                                    <a href="#">
                                                        <div class="d-flex align-items-start">

                                                            <div class="flex-shrink-0 user-img online align-self-center me-3">
                                                                <div class="avatar-sm align-self-center">
                                                                                <span class="avatar-title rounded-circle bg-soft-primary text-primary">
                                                                                    B
                                                                                </span>
                                                                </div>
                                                            </div>

                                                            <div class="flex-grow-1 overflow-hidden">
                                                                <h5 class="text-truncate font-size-14 mb-1">Reporting</h5>
                                                                <p class="text-truncate mb-0">02 Members</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <!-- end li -->
                                            </ul>
                                            <!-- end ul -->
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane" id="contacts">
                                <div class="chat-message-list" data-simplebar>
                                    <div class="p-4">
                                        <div>
                                            <div class="d-flex">
                                                <h5 class="font-size-14">Contacts</h5>
                                                <div class="ms-auto">
                                                    <a href="#"><i class="uil uil-plus"></i> Add New</a>
                                                </div>
                                            </div>

                                            <div class="mt-2">
                                                <div class="contact-list mb-0">A</div>

                                                <ul class="list-unstyled chat-list">
                                                    <li>
                                                        <a href="#">
                                                            <h5 class="font-size-14 mb-0">Adam Miller</h5>
                                                        </a>
                                                    </li>
                                                    <!-- end li -->
                                                    <li>
                                                        <a href="#">
                                                            <h5 class="font-size-14 mb-0">Alfonso Fisher</h5>
                                                        </a>
                                                    </li>
                                                    <!-- end li -->
                                                </ul>
                                                <!-- end ul -->
                                            </div>

                                            <div class="mt-4">
                                                <div class="contact-list mb-0">B</div>

                                                <ul class="list-unstyled chat-list">
                                                    <li>
                                                        <a href="#">
                                                            <h5 class="font-size-14 mb-0">Bonnie Harney</h5>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <!-- end ul -->
                                            </div>

                                            <div class="mt-4">
                                                <div class="contact-list mb-0">C</div>

                                                <ul class="list-unstyled chat-list">
                                                    <li>
                                                        <a href="#">
                                                            <h5 class="font-size-14 mb-0">Charles Brown</h5>
                                                        </a>
                                                        <a href="#">
                                                            <h5 class="font-size-14 mb-0">Carmella Jones</h5>
                                                        </a>
                                                        <a href="#">
                                                            <h5 class="font-size-14 mb-0">Carrie Williams</h5>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <!-- end ul -->
                                            </div>

                                            <div class="mt-4">
                                                <div class="contact-list mb-0">D</div>

                                                <ul class="list-unstyled chat-list">
                                                    <li>
                                                        <a href="#">
                                                            <h5 class="font-size-14 mb-0">Dolores Minter</h5>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <!-- end ul -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <!-- end chat-leftsidebar -->

                <div class="w-100 user-chat mt-4 mt-sm-0 ms-lg-3">
                    <div class="card">
                        <div class="p-3 border-bottom">
                            <div class="row">
                                <div class="col-xl-4 col-7">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 avatar me-3 d-sm-block d-none">
                                            <img src="assets/images/users/avatar-9.jpg" alt="" class="img-thumbnail d-block rounded-circle">
                                        </div>
                                        <div class="flex-grow-1">
                                            <h5 class="font-size-15 mb-1 text-truncate"><a href="#" class="text-dark">Daniel Pickering</a></h5>
                                            <p class="text-muted text-truncate mb-0"><i class="mdi mdi-circle text-success font-size-10 align-middle me-1"></i>Online</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-8 col-5">
                                    <ul class="list-inline user-chat-nav text-end mb-0">
                                        <li class="list-inline-item">
                                            <div class="dropdown">
                                                <button class="btn nav-btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="uil uil-search"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-md p-2">
                                                    <form class="px-2">
                                                        <div>
                                                            <input type="text" class="form-control bg-light rounded" placeholder="Search...">
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- end li -->
                                        <li class="list-inline-item">
                                            <div class="dropdown">
                                                <button class="btn nav-btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="uil uil-ellipsis-h"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">Profile</a>
                                                    <a class="dropdown-item" href="#">Archive</a>
                                                    <a class="dropdown-item" href="#">Muted</a>
                                                    <a class="dropdown-item" href="#">Delete</a>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- end li -->
                                    </ul>
                                    <!-- end ul -->
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="chat-conversation p-3" data-simplebar>
                                <ul class="list-unstyled mb-0">
                                    <li class="chat-day-title">
                                        <div class="title">Today</div>
                                    </li>
                                    <li>
                                        <div class="conversation-list">
                                            <div class="ctext-wrap">
                                                <div class="chat-avatar">
                                                    <img src="assets/images/users/avatar-9.jpg" alt="avatar-9">
                                                </div>
                                                <div class="ctext-wrap-content">
                                                    <p class="mb-0">Marie N! <br> Feels like it's been a while! Home are you? Do you have ant time
                                                        for the remainder of the week to help me with an ongoing project?</p>
                                                    <h5 class="conversation-name"><span class="time">10:00</span></h5>
                                                </div>
                                                <div class="dropdown align-self-start">
                                                    <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="uil uil-ellipsis-v"></i>
                                                    </a>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Copy</a>
                                                        <a class="dropdown-item" href="#">Save</a>
                                                        <a class="dropdown-item" href="#">Forward</a>
                                                        <a class="dropdown-item" href="#">Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- end li -->

                                    <li class="right">
                                        <div class="conversation-list">
                                            <div class="ctext-wrap">
                                                <div class="chat-avatar">
                                                    <img src="assets/images/users/avatar-3.jpg" alt="avatar-3">
                                                </div>
                                                <div class="ctext-wrap-content">
                                                    <p class="mb-0 text-start">Hi Martin, Glad to hear from you, I'm fine,what about you?
                                                        Of course I will help with this project</p>
                                                    <h5 class="conversation-name"> <span class="time">10:02</span></h5>
                                                </div>
                                                <div class="dropdown align-self-start">
                                                    <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="uil uil-ellipsis-v"></i>
                                                    </a>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Copy</a>
                                                        <a class="dropdown-item" href="#">Save</a>
                                                        <a class="dropdown-item" href="#">Forward</a>
                                                        <a class="dropdown-item" href="#">Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- end li -->

                                    <li>
                                        <div class="conversation-list">
                                            <div class="ctext-wrap">
                                                <div class="chat-avatar">
                                                    <img src="assets/images/users/avatar-9.jpg" alt="avatar-9">
                                                </div>
                                                <div class="ctext-wrap-content">
                                                    <p class="mb-0">
                                                        Super, I will get you the new brief for our own site over to you this evening, so you have time to read over I'm good thank you!
                                                    </p>
                                                    <h5 class="conversation-name"><span class="time">10:06</span></h5>
                                                </div>
                                                <div class="dropdown align-self-start">
                                                    <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="uil uil-ellipsis-v"></i>
                                                    </a>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Copy</a>
                                                        <a class="dropdown-item" href="#">Save</a>
                                                        <a class="dropdown-item" href="#">Forward</a>
                                                        <a class="dropdown-item" href="#">Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- end li -->

                                    <li class="right">
                                        <div class="conversation-list">
                                            <div class="ctext-wrap">
                                                <div class="chat-avatar">
                                                    <img src="assets/images/users/avatar-3.jpg" alt="avatar-3">
                                                </div>
                                                <div class="ctext-wrap-content">
                                                    <p class="mb-0 text-start">
                                                        Of course I can, just catching up with Steve on it and i'll write it out. Speak tomorrow! Let me know if you have any questions!
                                                    </p>
                                                    <p class="mb-0 text-start mt-2">
                                                        img-1.jpg &amp; img-2.jpg images for a New Projects
                                                    </p>
                                                    <ul class="list-inline message-img mt-2 mb-0">
                                                        <li class="list-inline-item message-img-list">
                                                            <a class="d-inline-block" href="">
                                                                <img src="assets/images/small/img-1.jpg" alt="" class="rounded img-thumbnail">
                                                            </a>
                                                        </li>

                                                        <li class="list-inline-item message-img-list">
                                                            <a class="d-inline-block" href="">
                                                                <img src="assets/images/small/img-2.jpg" alt="" class="rounded img-thumbnail">
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <h5 class="conversation-name"> <span class="time">10:06</span></h5>
                                                </div>
                                                <div class="dropdown align-self-start">
                                                    <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="uil uil-ellipsis-v"></i>
                                                    </a>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Copy</a>
                                                        <a class="dropdown-item" href="#">Save</a>
                                                        <a class="dropdown-item" href="#">Forward</a>
                                                        <a class="dropdown-item" href="#">Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- end li -->

                                    <li>
                                        <div class="conversation-list">
                                            <div class="ctext-wrap">
                                                <div class="chat-avatar">
                                                    <img src="assets/images/users/avatar-9.jpg" alt="avatar-9">
                                                </div>
                                                <div class="ctext-wrap-content">
                                                    <p class="mb-0">
                                                        Thank You very much, I am waiting Project.
                                                    </p>
                                                    <h5 class="conversation-name"><span class="time">10:06</span></h5>
                                                </div>
                                                <div class="dropdown align-self-start">
                                                    <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="uil uil-ellipsis-v"></i>
                                                    </a>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Copy</a>
                                                        <a class="dropdown-item" href="#">Save</a>
                                                        <a class="dropdown-item" href="#">Forward</a>
                                                        <a class="dropdown-item" href="#">Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- end li -->

                                    <li class="right">
                                        <div class="conversation-list">
                                            <div class="ctext-wrap">
                                                <div class="chat-avatar">
                                                    <img src="assets/images/users/avatar-3.jpg" alt="avatar-3">
                                                </div>
                                                <div class="ctext-wrap-content">
                                                    <p class="mb-0 text-start">
                                                        When someone thanks us, our automatic response is to say, “You’re welcome.” This is something that we have
                                                        learned from our parents and family and have been doing for a long time.
                                                    </p>
                                                    <h5 class="conversation-name"> <span class="time">10:06</span></h5>
                                                </div>
                                                <div class="dropdown align-self-start">
                                                    <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="uil uil-ellipsis-v"></i>
                                                    </a>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Copy</a>
                                                        <a class="dropdown-item" href="#">Save</a>
                                                        <a class="dropdown-item" href="#">Forward</a>
                                                        <a class="dropdown-item" href="#">Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- end li -->
                                </ul>
                                <!-- end ul -->
                            </div>
                        </div>
                        <div class="p-3 chat-input-section">
                            <div class="row">
                                <div class="col">
                                    <div class="position-relative">
                                        <input type="text" class="form-control chat-input" placeholder="Enter Message...">

                                    </div>
                                </div>
                                <div class="col-auto">
                                    <button type="submit" class="btn btn-primary chat-send w-md"><span class="d-none d-sm-inline-block me-2">Send</span> <i class="mdi mdi-send float-end"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="chat-leftsidebar card mt-sm-0 ms-lg-3">
                    <div class="text-center mt-4 pb-2">
                        <div class="chat-user-status">
                            <img src="assets/images/users/avatar-3.jpg" class="avatar-lg rounded-circle" alt="">
                            <div class="">
                                <div class="status"></div>
                            </div>
                        </div>
                        <h5 class="font-size-16 mb-1 mt-3"><a href="#" class="text-dark">Marie N.</a></h5>
                        <p class="text-muted mb-0">Available</p>
                    </div>

                    <div class="mt-3 text-center px-4">
                        <ul class="list-inline d-flex justify-content-between border-bottom pb-3 mb-0 px-3">
                            <li class="list-inline-item">
                                <a href="">
                                    <div class="avatar mx-auto">
                                                    <span class="avatar-title bg-soft-primary rounded-circle">
                                                        <i class="mdi mdi-phone font-size-18 text-primary"></i>
                                                    </span>
                                    </div>
                                    <h5 class="font-size-15 mt-2">Call</h5>
                                </a>
                            </li>

                            <li class="list-inline-item">
                                <a href="">
                                    <div class="avatar mx-auto">
                                                    <span class="avatar-title bg-soft-primary rounded-circle">
                                                        <i class="mdi mdi-chat font-size-18 text-primary"></i>
                                                    </span>
                                    </div>
                                    <h5 class="font-size-15 mt-2">Message</h5>
                                </a>
                            </li>

                            <li class="list-inline-item">
                                <a href="">
                                    <div class="avatar mx-auto">
                                                    <span class="avatar-title bg-soft-primary rounded-circle">
                                                        <i class="mdi mdi-video font-size-18 text-primary"></i>
                                                    </span>
                                    </div>
                                    <h5 class="font-size-15 mt-2">Video</h5>
                                </a>
                            </li>

                            <li class="list-inline-item">
                                <a href="">
                                    <div class="avatar mx-auto">
                                                    <span class="avatar-title bg-soft-primary rounded-circle">
                                                        <i class="mdi mdi-dots-horizontal font-size-18 text-primary"></i>
                                                    </span>
                                    </div>
                                    <h5 class="font-size-15 mt-2">More</h5>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="mt-3 px-4">
                        <div class="border-bottom pb-4">
                            <div class="mt-2">
                                <h5 class="font-size-15">Phone: <span class="text-muted ps-1">007 817-309-4195</span></h5>
                            </div>

                            <div class="mt-3">
                                <h5 class="font-size-15">Date Of Birth: <span class="text-muted ps-1">02 February 1998</span></h5>
                            </div>

                            <div class="mt-3">
                                <h5 class="font-size-15 mb-0">Gender: <span class="text-muted ps-1">Male</span></h5>
                            </div>
                        </div>
                    </div>

                    <div class="mt-4 px-4">
                        <h5 class="font-size-15 mb-4">Recent File</h5>
                        <div class="mx-n4 px-4 chat-rightsidebar" data-simplebar>

                            <div class="pb-2 mb-2">
                                <a href="javascript: void(0);" class="text-body">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar align-self-center me-3">
                                            <div class="avatar-title rounded bg-soft-primary text-primary font-size-22">
                                                <i class="mdi mdi-image"></i>
                                            </div>
                                        </div>
                                        <div class="overflow-hidden me-auto">
                                            <h5 class="font-size-15 text-truncate mb-1">Images</h5>
                                            <p class="text-muted text-truncate mb-0">1,876 Files</p>
                                        </div>
                                        <div class="ms-2">
                                            <p class="text-muted font-size-14">8.4 GB</p>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="py-2 mb-2">
                                <a href="javascript: void(0);" class="text-body">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar align-self-center me-3">
                                            <div class="avatar-title rounded bg-soft-primary text-primary font-size-22">
                                                <i class="mdi mdi-play-circle-outline"></i>
                                            </div>
                                        </div>
                                        <div class="overflow-hidden me-auto">
                                            <h5 class="font-size-15 text-truncate mb-1">Video</h5>
                                            <p class="text-muted text-truncate mb-0">45 Files</p>
                                        </div>
                                        <div class="ms-2">
                                            <p class="text-muted font-size-14">4.1 GB</p>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="py-2 mb-2">
                                <a href="javascript: void(0);" class="text-body">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar align-self-center me-3">
                                            <div class="avatar-title rounded bg-soft-primary text-primary font-size-22">
                                                <i class="mdi mdi-music"></i>
                                            </div>
                                        </div>
                                        <div class="overflow-hidden me-auto">
                                            <h5 class="font-size-15 text-truncate mb-1">Music</h5>
                                            <p class="text-muted text-truncate mb-0">21 Files</p>
                                        </div>
                                        <div class="ms-2">
                                            <p class="text-muted font-size-14">3.2 GB</p>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="py-2 mb-2">
                                <a href="javascript: void(0);" class="text-body">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar align-self-center me-3">
                                            <div class="avatar-title rounded bg-soft-primary text-primary font-size-22">
                                                <i class="mdi mdi-file-document"></i>
                                            </div>
                                        </div>
                                        <div class="overflow-hidden me-auto">
                                            <h5 class="font-size-15 text-truncate mb-1">Document</h5>
                                            <p class="text-muted text-truncate mb-0">21 Files</p>
                                        </div>
                                        <div class="ms-2">
                                            <p class="text-muted font-size-14">2 GB</p>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="py-2 mb-2">
                                <a href="javascript: void(0);" class="text-body">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar align-self-center me-3">
                                            <div class="avatar-title rounded bg-soft-primary text-primary font-size-22">
                                                <i class="mdi mdi-folder"></i>
                                            </div>
                                        </div>
                                        <div class="overflow-hidden me-auto">
                                            <h5 class="font-size-15 text-truncate mb-1">Others</h5>
                                            <p class="text-muted text-truncate mb-0">20 Files</p>
                                        </div>
                                        <div class="ms-2">
                                            <p class="text-muted font-size-14">1.4 GB</p>
                                        </div>
                                    </div>
                                </a>
                            </div>

                        </div>

                    </div>




                </div>
            </div>
            <!-- End d-lg-flex  -->

        </div> <!-- container-fluid -->
    </div>
@endsection