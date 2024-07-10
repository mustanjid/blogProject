@extends('front.master')
@section('title', 'Log in')

@section('content')
    <!-- Login Area Start Here -->
    <div class="login-register-area mt-no-text mb-no-text">
        <div class="container container-default-2 custom-area">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-custom">
                    <div class="login-register-wrapper">
                        <div class="section-content text-center mb-5">
                            <h2 class="title-4 mb-2">Login</h2>
                            <p class="desc-content">Please login using account details bellow.</p>
                        </div>

                        <form action="{{ url('/user/processTologin') }}" method="POST">
                            @csrf
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
                                <button class="btn obrien-button-2 primary-color">Login</button>
                            </div>
                            <div class="single-input-item">
                                <a href="{{ url('/user/signup') }}">Creat Account</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Login Area End Here -->
@endsection
