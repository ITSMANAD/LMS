@extends('layouts.master')
@section('title' , 'ورود به سایت')
@section('content')
<div class="container">

    <div class="row px-2">

        <div class="col-lg-6 col-md-7 col-10 mx-auto bg-white mt-5 rounded shadow-sm py-3">

            <img src="assets/images/logo.jpg" alt="Daneshyar" class="d-block mx-auto mb-4"><!-- logo -->
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="post" action="{{ route('login') }}">
                @csrf
                <div class="input-group signup-form mb-4">

                    <span class="input-group-text"><i class="fa fa-user"></i></span>

                    <input type="email" name="email" class="form-control form-control-lg" placeholder=" ایمیل">

                </div>

                <div class="input-group signup-form mb-4">

                    <span class="input-group-text"><i class="fa fa-lock"></i></span>

                    <input type="password" name="password" class="form-control form-control-lg" placeholder=" رمز عبور ">

                </div>

                <div class="form-check">

                    <input class="form-check-input form-check-input-custom" type="checkbox" name="remember" id="customCheck" checked>

                    <label class="form-check-label line-height font-12 ms-1" for="customCheck">

                        مرا به خاطر داشته باش

                    </label>
                </div>

                <button type="submit" class="btn btn-lg btn-warning d-block mx-auto px-5 font-13 vazir-font my-3">ورود</button>

            </form><!-- end login form -->

        </div>

    </div>

    <div class="row">

        <div class="col-lg-6 col-md-7 col-10 mx-auto bg-white mt-3 mb-5 rounded shadow-sm py-3 text-center"><!-- start remember box -->

            <p class="font-13 mt-3">رمز عبور خود را فراموش کرده اید؟<a href="remember.html" class="text-dark under-line ms-1">بازیابی رمز عبور  </a></p>

            <p class="font-13 mt-2">هنوز در سایت ثبت نام نکرده اید ؟<a href="{{route('register')}}" class="text-dark under-line ms-1">ثبت نام </a></p>

        </div><!-- end remember box -->

    </div>

</div>
@endsection
