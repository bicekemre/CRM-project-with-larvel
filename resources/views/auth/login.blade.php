@extends('layout.master-without-nav')
@section('title')Sign In @endsection
@section('content')

    <div class="auth-bg-basic d-flex align-items-center h-100">
    <div class="bg-overlay bg-light"></div>
    <div class="container">
        <div class="d-flex flex-column vh-100 py-5 px-3">
            <div class="row justify-content-center">
                <div class="col-xl-5">
                    <div class="text-center text-muted mb-2">
                        <div class="pb-3">
                            <a href="/">
                                <span class="logo-lg">
                                    <img src="{{URL::asset('assets/images/logo-sm.svg')}}" alt="" height="24"> <span class="logo-txt">Vuesy</span>
                                </span>
                            </a>
                            <p class="text-muted font-size-15 w-75 mx-auto mt-3 mb-0">User Experience &amp; Interface Design Strategy Saas Solution</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center my-auto">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card bg-transparent shadow-none border-0">
                        <div class="card-body">
                            <div class="py-3">
                                <div class="text-center">
                                    <h5 class="mb-0">Welcome Back !</h5>
                                    <p class="text-muted mt-2">Sign in to continue to Vuesy.</p>
                                </div>
                                <form method="POST" action="{{ route('login') }}" class="mt-4 pt-2">
                                    @csrf

                                    <div class="form-floating form-floating-custom mb-3">
                                        <input type="email" id="email" placeholder="Enter User Name" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                        <label for="input-username">{{ __('Email Address') }}</label>
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                        <div class="form-floating-icon">
                                            <i class="uil uil-users-alt"></i>
                                        </div>
                                    </div>


                                    <div class="form-floating form-floating-custom mb-3 auth-pass-inputgroup">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="enter your password">
                                        <button type="button" class="btn btn-link position-absolute h-100 end-0 top-0" id="password-addon">
                                            <i class="mdi mdi-eye-outline font-size-18 text-muted"></i>
                                        </button>
                                        <label for="password-input">{{ __('Password') }}</label>
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                        <div class="form-floating-icon">
                                            <i class="uil uil-padlock"></i>
                                        </div>
                                    </div>

                                    <div class="form-check form-check-primary font-size-16 py-1">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <div class="float-end">
                                            @if (Route::has('password.request'))
                                            <a href="#" class="text-muted text-decoration-underline font-size-14">{{ __('Forgot Your Password?') }}</a>
                                            @endif
                                        </div>
                                        <label class="form-check-label font-size-14" for="remember-check">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>

                                    <div class="mt-3">
                                        <button class="btn btn-primary w-100" type="submit">{{ __('Login') }}</button>
                                    </div>

                                    <div class="mt-4 text-center">
                                        <div class="signin-other-title">
                                            <h5 class="font-size-15 mb-4 text-muted fw-medium">- Or you can join with -</h5>
                                        </div>

                                        <div class="d-flex gap-2">
                                            <button type="button" class="btn btn-soft-primary waves-effect waves-light w-100">
                                                <i class="bx bxl-facebook font-size-16 align-middle"></i>
                                            </button>
                                            <button type="button" class="btn btn-soft-info waves-effect waves-light w-100">
                                                <i class="bx bxl-linkedin font-size-16 align-middle"></i>
                                            </button>
                                            <button type="button" class="btn btn-soft-danger waves-effect waves-light w-100">
                                                <i class="bx bxl-google font-size-16 align-middle"></i>
                                            </button>
                                        </div>
                                    </div>

                                    <div class="mt-4 pt-3 text-center">
                                        <p class="text-muted mb-0">Don't have an account ? <a href="" class="fw-semibold text-decoration-underline"> Signup Now </a> </p>
                                    </div>

                                </form><!-- end form -->
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end row -->

            <div class="row">
                <div class="col-xl-12">
                    <div class="mt-4 mt-md-5 text-center">
                        <p class="mb-0">© <script>
                                document.write(new Date().getFullYear())

                            </script> Vuesy. Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesdesign</p>
                    </div>
                </div>
            </div> <!-- end row -->
        </div>
    </div>
    <!-- end container fluid -->
</div>
<!-- end authentication section -->
@endsection