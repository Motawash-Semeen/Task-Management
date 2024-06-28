@extends('WebModule::masterwithoutnav')
@section('content')
    <section class="login-content">
        <div class="container">
            <div class="row align-items-center justify-content-center height-self-center">
                <div class="col-lg-8">
                    <div class="card auth-card">
                        <div class="card-body p-0">
                            <div class="d-flex align-items-center auth-content">
                                <div class="col-lg-6 bg-primary content-left">
                                    <div class="p-3">
                                        <h2 class="mb-2 text-white">Sign In</h2>
                                        <p>Login to stay connected.</p>
                                        <form method="POST" action="{{ url('/login') }}">
                                            @csrf
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="floating-label form-group">
                                                        <input
                                                            class="floating-input form-control @error('email') is-invalid @enderror"
                                                            type="email" placeholder=" " name="email"
                                                            value="{{ old('email') }}">
                                                        <label>Email</label>
                                                        @error('email')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="floating-label form-group">
                                                        <input
                                                            class="floating-input form-control @error('password') is-invalid @enderror"
                                                            type="password" placeholder=" " name="password">
                                                        <label>Password</label>
                                                        @error('password')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="custom-control custom-checkbox mb-3">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="customCheck1">
                                                        <label class="custom-control-label control-label-1 text-white"
                                                            for="customCheck1">Remember Me</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <a href="auth-recoverpw.html" class="text-white float-right">Forgot
                                                        Password?</a>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-white">Sign In</button>
                                            <p class="mt-3">
                                                Create an Account <a href="auth-sign-up.html"
                                                    class="text-white text-underline">Sign Up</a>
                                            </p>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-lg-6 content-right">
                                    <img src="../assets/images/login/01.png" class="img-fluid image-right" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
