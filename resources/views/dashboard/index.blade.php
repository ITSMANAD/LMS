@extends('layouts.master')
@section('title','پیشخوان کاربری')
@section('content')
    <div class="container">

        <div class="row">

            <div class="col-lg-3 "><!-- start right sidebar -->

                <div class="card border-0 shadow-sm bg-info my-3 p-3"><!-- start avatar box -->

                    <img src="assets/images/avatar.png" class="avatar">

                    <p class="font-14 text-white text-center">{{auth()->user()->name}} {{auth()->user()->lastname}} عزیز سلام !</p>

                </div><!-- end avatar box -->

                <div class="list-group mb-3" ><!-- start sidebar menu -->

                    <a href="{{route('dashboard')}}" class="list-group-item list-group-item-action font-13 text-info"> <i class="fa fa-home align-middle me-2 font-13 text-secondary"></i>پیشخوان</a>

                    <a href="profile-course.html" class="list-group-item list-group-item-action font-13 text-dark"><i class="fas fa-graduation-cap align-middle me-2 font-15  text-secondary"></i>دوره های شما</a>

                    <a href="profile-comments.html" class="list-group-item list-group-item-action font-13 text-dark"><i class="far fa-comment align-middle me-2 font-13  text-secondary" ></i>نظرات </a>

                    <a href="profile-tickets.html" class="list-group-item list-group-item-action font-13 text-dark"><i class="fas fa-tags align-middle me-2 font-12 text-secondary"></i>تیکت ها </a>

                    <a href="profile-info.html" class="list-group-item list-group-item-action font-13 text-dark"><i class="fa fa-user-circle align-middle me-2 font-13  text-secondary"></i>جزئیات حساب کاربری</a>
                    @if(auth()->user()->IsAdmin)
                    <a href="{{route('Admin')}}" class="list-group-item list-group-item-action font-13 text-dark"><i class="fas fa-tachometer-alt align-middle me-2 font-13  text-secondary"></i>پنل کاربری مدیر سایت</a>
                    @endif
                    <a href="#" class="list-group-item list-group-item-action font-13 text-dark"><i class="fas fa-sign-out-alt align-middle me-2 font-13  text-secondary"></i> خروج</a>

                </div><!-- end sidebar menu -->

            </div><!-- end right sidebar -->

            <div class="col-lg-9">

                <div class="card my-3 p-3 shadow-sm">

                    <div class="row"><!-- start dashboard icons -->

                        <div class="col-lg-3 mb-3">

                            <div class="card d-flex flex-row justify-content-center align-items-center bg-light border-warning p-4">

                                <i class="fa fa-university text-secondary font-30 me-3"></i>

                                <div class="d-inline-block text-center">

                                    <p class="mb-1 font-12"> 12 دوره  </p>

                                    <small class="font-12 text-muted">  موجود در سایت  </small>

                                </div>

                            </div>

                        </div>

                        <div class="col-lg-3 mb-3">

                            <div class="card d-flex flex-row justify-content-center align-items-center bg-light border-warning p-4">

                                <i class="fa fa-graduation-cap text-secondary font-30 me-3"></i>

                                <div class="d-inline-block text-center">

                                    <p class="mb-1 font-12"> 2 دوره  </p>

                                    <small class="font-12 text-muted">شرکت کرده اید </small>

                                </div>

                            </div>

                        </div>

                        <div class="col-lg-3 mb-3">

                            <div class="card d-flex flex-row justify-content-center align-items-center bg-light border-warning p-4">

                                <i class="fa fa-cart-plus text-secondary font-30 me-2"></i>

                                <div class="d-inline-block text-center">

                                    <p class="mb-1 font-12"> 0 دوره  </p>

                                    <small class="font-12 text-muted">  در انتظار پرداخت  </small>

                                </div>

                            </div>

                        </div>

                        <div class="col-lg-3 mb-3">

                            <div class="card d-flex flex-row justify-content-center align-items-center bg-light border-warning p-4">

                                <i class="fa fa-credit-card text-secondary font-30 me-3"></i>

                                <div class="d-inline-block text-center">

                                    <p class="mb-1 font-12"> 0 تومان  </p>

                                    <small class="font-12 text-muted">موجودی شما</small>

                                </div>

                            </div>

                        </div>

                    </div><!-- end dashboard icons -->

                    <div class="row mt-4 mx-1  bg-light rounded p-3 shadow-sm"><!-- start notifications -->

                        <span class="font-13"><i class="fa fa-bell align-middle text-warning font-18 me-1"></i>جدیدترین اطلاعیه ها</span>

                        <div class="col-12">

                            <div class="d-flex justify-content-between align-items-center mt-4">

                                <p class="font-13">دوره آموزشی لاراول منتشر شد .</p>

                                <span class="font-13 text-muted">1401/10/8<i class="fa fa-calendar font-14 ms-2"></i></span>

                            </div>

                            <p class="font-13 vazir-font line-height">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده
                                از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی
                                مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد
                            </p>

                        </div>

                        <div class="col-12">

                            <div class="d-flex justify-content-between align-items-center mt-4">

                                <p class="font-13">تخفیف ویژه برای دوره جاوااسکریپت .</p>

                                <span class="font-13 text-muted">1401/10/8<i class="fa fa-calendar font-14 ms-2"></i></span>

                            </div>

                            <p class="font-13 vazir-font line-height">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده
                                از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی
                                مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد
                            </p>

                        </div>

                    </div><!-- end notifications -->

                </div>

            </div>

        </div>

    </div>
@endsection
