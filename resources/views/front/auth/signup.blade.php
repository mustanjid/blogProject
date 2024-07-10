@extends('front.master')

@section('title', 'Sign Up')

@section('content')

    <!-- Login Area Start Here -->
    <div class="login-register-area mt-no-text mb-no-text">
        <div class="container container-default-2 custom-area">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-custom">
                    <div class="login-register-wrapper">
                        <div class="section-content text-center mb-5">
                            <h2 class="title-4 mb-2">Create Account</h2>
                            <p class="desc-content">Please Register using account detail bellow.</p>
                        </div>

                        <form action="{{url('/user/new-register')}}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="single-input-item mb-3">
                                <input type="text" id="name" placeholder="*Your Name"
                                    class="@error('name') is-invalid @enderror" name="name" value="{{ old('name') }}">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>

                            <div class="single-input-item mb-3">
                                <input type="email" id="email" placeholder="*Email"
                                    class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="single-input-item mb-3">
                                <input type="tel" id="mobile"
                                    placeholder="Mobile (Enter your 11 digits mobile number)"
                                    class="@error('mobile') is-invalid @enderror" name="mobile"
                                    value="{{ old('mobile') }}">

                                @error('mobile')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="single-input-item mb-3">
                                <input type="password" placeholder="*Type your Password"
                                    class="@error('password') is-invalid @enderror" name="password"
                                    value="{{ old('password') }}">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                             <div class="single-input-item mb-3">
                                <input type="file" name="profile_img"
                                    class="form-control-file @error('profile_img') is-invalid @enderror upload_file"
                                    accept=".jpg, .jpeg, .webp"/>
                                @error('profile_img')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <code>[ Only upload file jpeg, jpg, webp (max-size : 1 MB) ]</code>
                            </div>

                            <div class="single-input-item mb-3">
                                <button type="submit" class="btn obrien-button-2 primary-color">Register</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Login Area End Here -->
@endsection
