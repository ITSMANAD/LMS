@extends('layouts.master')
@section('title','ثبت نام در سایت')
@section('content')
<div class="container">

    <div class="row px-2">

        <div class="col-lg-6 col-md-7 col-10 mx-auto bg-white mt-5 rounded text-center shadow-sm py-3">
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <img src="assets/images/logo.jpg" alt="Daneshyar" class="d-block mx-auto mb-4"><!-- logo -->

            <form method="POST" action="{{ route('register') }}">

                @csrf

                <div class="input-group signup-form mb-4">

                    <span class="input-group-text"><i class="fa fa-user"></i></span>

                    <input type="text" name="name" class="form-control form-control-lg" placeholder=" نام">

                </div>

                <div class="input-group signup-form mb-4">

                    <span class="input-group-text"><i class="fa fa-user"></i></span>

                    <input type="text" name="lastname" class="form-control form-control-lg" placeholder=" نام خانوادگی">

                </div>

                <div class="input-group signup-form mb-4">

                    <span class="input-group-text"><i class="fa fa-envelope"></i></span>

                    <input type="email" name="email" class="form-control form-control-lg" placeholder=" ایمیل ">

                </div>

                <div class="input-group signup-form mb-4">

                    <span class="input-group-text"><i class="fa fa-phone"></i></span>

                    <input type="tel" name="phone" class="form-control form-control-lg" placeholder=" شماره تماس ">

                </div>

                <div class="input-group signup-form mb-4">

                    <span class="input-group-text"><i class="fa fa-lock"></i></span>

                    <input type="password" name="password" class="form-control form-control-lg" placeholder=" رمز عبور ">

                </div>

                <div class="input-group signup-form mb-4">

                    <span class="input-group-text"><i class="fa fa-lock"></i></span>

                    <input type="password" name="confirm" class="form-control form-control-lg" placeholder=" تکرار رمز عبور ">

                </div>

                <div class="form-check">

                    <input class="form-check-input form-check-input-custom" type="checkbox" id="customCheck" checked>

                    <label class="form-check-label line-height font-12" for="customCheck">

                        <a href="#" class="text-dark under-line">حریم خصوصی</a> و <a href="#" class="text-dark under-line">شرایط و قوانین</a> استفاده از خدمات  سایت دانشیار را مطالعه نموده و با کلیه موارد آن موافقم.

                    </label>

                </div>

                <button type="submit" class="btn btn-lg btn-warning d-block mx-auto px-5 font-13 vazir-font my-3">ثبت نام</button>

            </form><!-- end signup form -->

        </div>

    </div>

    <div class="row">

        <div class="col-lg-6 col-md-7 col-10 mx-auto bg-white mt-3 mb-5 rounded shadow-sm py-3 text-center"><!-- start login box -->

            <p class="font-13 mt-3">قبلا در سایت ثبت نام کرده اید؟ <a href="login.html" class="text-dark under-line">وارد شوید</a></p>

        </div><!-- end login box -->

    </div>

</div>
@endsection
