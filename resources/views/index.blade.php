@extends('layouts.master')
@section('title', 'خانه')
@section('content')


    <div class="d-none d-sm-block banner-3"><!-- start banner -->

        <div class="container">

            <div class="row">

                <div class="col-lg-6">

                    <h1>داستان برنامه‌نویس شدنت از اینجا شروع میشه!</h1>

                    <h6>یادگیری برنامه‌نویسی آرزو نیست، فقط نیاز هست، تلاش و تمرین داشته باشید، بقیه‌اش با دانشیار</h6>

                    <a href="category.html" class="btn btn-custom-info">شروع یادگیری برنامه نویسی <i class="fa fa-arrow-left align-middle mt-1"></i></a>

                    <div class="row pb-3"><!-- start banner icons -->

                        <div class="col-6 pt-4">

                            <i class="fas fa-chalkboard-teacher" id="chalkboard-icon"></i>

                            <span>بیش از 80 دوره آموزشی</span>

                        </div>

                        <div class="col-6 pt-4">

                            <i class="fas fa-wallet" id="wallet-icon"></i>

                            <span>ضمانت بازگشت وجه</span>

                        </div>

                        <div class="col-6 pt-4">

                            <i class="fas fa-pen" id="pen-icon"></i>

                            <span>یادگیری با تمرین و آزمون</span>

                        </div>

                        <div class="col-6 pt-4">

                            <i class="fas fa-phone" id="phone-icon"></i>

                            <span>پشتیبانی ۲۴ساعته</span>

                        </div>

                    </div><!-- end banner icons -->

                </div>

                <div class="col-lg-6">

                    <img src="assets/images/298654-min.jpg" class="img-fluid">

                </div>

            </div>

        </div>

    </div><!-- end banner -->

    <div class="container"><!-- start category boxes -->

        <div class="row pt-5">

            <div class="col-md-3 col-6 mb-3"><a href="category.html"><img src="assets/images/graphics.png" class="img-fluid rounded"></a></div>

            <div class="col-md-3 col-6 mb-3"><a href="category.html"><img src="assets/images/footage.png" class="img-fluid rounded"></a></div>

            <div class="col-md-3 col-6 mb-3"><a href="category.html"><img src="assets/images/sound.png" class="img-fluid rounded"></a></div>

            <div class="col-md-3 col-6 mb-3"><a href="category.html"><img src="assets/images/premiere.png" class="img-fluid rounded"></a></div>

        </div>

    </div><!-- end category boxes -->


    <div class="container d-flex justify-content-between mt-5 mb-4"><!-- start title-->

        <div class="title">

            <p class="font-14 ps-2">جدیدترین دوره های آموزشی</p>

            <p class="font-12 ps-3 text-muted">سکوی پرتاپ شما به سمت موفقیت</p>

        </div>

        <a href="category.html" class="title-btn align-self-start">همه دوره ها <i class="fa fa-arrow-left align-middle"></i></a>

    </div><!-- end title-->


    <div class="container"><!-- start course box -->

        <div class="row">

            <div class="col-lg-4 col-sm-6 "><!-- start course item -->

                <div class="card custom-card mb-3 shadow-sm">

                    <div class="sub-layer">

                        <img src="assets/images/html.jpg" class="img-fluid" >

                        <div class="over-layer">

                            <a href="course(demo-two).html" class="btn btn-info">مشاهده و خرید</a>

                        </div>

                    </div>

                    <div class="card-body">

                        <a href="course(demo-two).html" class="text-dark d-block mb-2">آموزش HTML</a>

                        <p class="font-13 text-justify line-height vazir-font">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
                            استفاده از طراحان گرافیک است.
                            چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است.
                        </p>

                    </div>

                    <div class="card-footer">

                        <img src="assets/images/team_2.jpg" class="team-icon">

                        <span class="font-12 vazir-font">علی نوروزی</span>

                        <div class="float-end mt-1">

                            <span class="text-success font-12">رایگان !</span>

                        </div>

                    </div>

                </div>

            </div><!-- end course item -->


            <div class="col-lg-4 col-sm-6"><!-- start course item -->

                <div class="card custom-card mb-3 shadow-sm">

                    <div class="sub-layer">

                        <img src="assets/images/flutter.png" class="img-fluid" >

                        <div class="over-layer">

                            <a href="course(demo-two).html" class="btn btn-info">مشاهده و خرید</a>

                        </div>

                    </div>

                    <div class="card-body">

                        <a href="course(demo-two).html" class="text-dark d-block mb-2"> آموزش حرفه ای Flutter</a>

                        <p class="font-13 text-justify line-height vazir-font">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
                            استفاده از طراحان گرافیک است.
                            چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است.
                        </p>

                    </div>

                    <div class="card-footer">

                        <img src="assets/images/team_4.jpg" class="team-icon">

                        <span class="font-12 vazir-font">سارا رضایی</span>

                        <div class="float-end mt-1">

                            <del class="text-muted font-12 me-2">320.000 تومان</del>

                            <span class="text-success font-12">200.000 تومان</span>

                        </div>

                    </div>

                </div>

            </div><!-- end course item -->


            <div class="col-lg-4 col-sm-6"><!-- start course item -->

                <div class="card custom-card mb-3 shadow-sm">

                    <div class="sub-layer">

                        <img src="assets/images/js.png" class="img-fluid">

                        <div class="over-layer">

                            <a href="course(demo-two).html" class="btn btn-info">مشاهده و خرید</a>

                        </div>

                    </div>

                    <div class="card-body">

                        <a href="course(demo-two).html" class="text-dark d-block mb-2">آموزش پیشرفته جاوا اسکریپت</a>

                        <p class="font-13 text-justify line-height vazir-font">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
                            استفاده از طراحان گرافیک است.
                            چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است.
                        </p>

                    </div>

                    <div class="card-footer">

                        <img src="assets/images/team_2.jpg" class="team-icon">

                        <span class="font-12 vazir-font">علی نوروزی</span>

                        <div class="float-end mt-1">

                            <span class="text-success font-12">400.000 تومان</span>

                        </div>

                    </div>

                </div>

            </div><!-- end course item -->


            <div class="col-lg-4 col-sm-6"><!-- start course item -->

                <div class="card custom-card mb-3 shadow-sm">

                    <div class="sub-layer">

                        <img src="assets/images/laravel.jpg" class="img-fluid">

                        <div class="over-layer">

                            <a href="course(demo-two).html" class="btn btn-info">مشاهده و خرید</a>

                        </div>

                    </div>

                    <div class="card-body">

                        <a href="course(demo-two).html" class="text-dark d-block mb-2">ساخت فروشگاه با لاراول</a>

                        <p class="font-13 text-justify line-height vazir-font">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
                            استفاده از طراحان گرافیک است.
                            چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است.
                        </p>

                    </div>

                    <div class="card-footer">

                        <img src="assets/images/team_3.jpg" class="team-icon">

                        <span class="font-12 vazir-font">مریم اکبری</span>

                        <div class="float-end mt-1">

                            <span class="text-success font-12">350.000 تومان</span>

                        </div>

                    </div>

                </div>

            </div><!-- end course item -->


            <div class="col-lg-4 col-sm-6"><!-- start course item -->

                <div class="card custom-card mb-3 shadow-sm">

                    <div class="sub-layer">

                        <img src="assets/images/nodejs.png" class="img-fluid">

                        <div class="over-layer">

                            <a href="course(demo-two).html" class="btn btn-info">مشاهده و خرید</a>

                        </div>

                    </div>

                    <div class="card-body">

                        <a href="course(demo-two).html" class="text-dark d-block mb-2">آموزش Nodejs</a>

                        <p class="font-13 text-justify line-height vazir-font">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
                            استفاده از طراحان گرافیک است.
                            چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است.
                        </p>

                    </div>

                    <div class="card-footer">

                        <img src="assets/images/team_2.jpg" class="team-icon">

                        <span class="font-12 vazir-font">علی نوروزی</span>

                        <div class="float-end mt-1">

                            <del class="text-muted font-12 me-2">450.000 تومان</del>

                            <span class="text-success font-12">380.000 تومان</span>

                        </div>

                    </div>

                </div>

            </div><!-- end course item -->


            <div class="col-lg-4 col-sm-6"><!-- start course item -->

                <div class="card custom-card mb-3 shadow-sm">

                    <div class="sub-layer">

                        <img src="assets/images/TypeScript.jpg" class="img-fluid">

                        <div class="over-layer">

                            <a href="course(demo-two).html" class="btn btn-info">مشاهده و خرید</a>

                        </div>

                    </div>

                    <div class="card-body">

                        <a href="course(demo-two).html" class="text-dark d-block mb-2">آموزش TypeScript</a>

                        <p class="font-13 text-justify line-height vazir-font">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
                            استفاده از طراحان گرافیک است.
                            چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است.
                        </p>

                    </div>

                    <div class="card-footer">

                        <img src="assets/images/team_4.jpg" class="team-icon">

                        <span class="font-12 vazir-font">سارا رضایی</span>

                        <div class="float-end mt-1">

                            <span class="text-success font-12">270.000 تومان</span>

                        </div>

                    </div>

                </div>

            </div><!-- end course item -->

        </div>

    </div><!-- end course box -->


    <div class="container">

        <div class="row px-3 my-5">

            <div class="col-lg-5 shadow rounded mb-3">

                <div class="title my-4"><!-- start title-->

                    <p class="font-14 ps-2">درخواست مشاوره رایگان</p>

                    <p class="font-12 ps-3 text-muted">فرصت رو از دست نده!</p>

                </div> <!-- end title-->

                <form><!-- start contact form -->

                    <div class="mb-3">

                        <input type="text" class="form-control form-control-lg" placeholder="نام و نام خانوادگی ">

                    </div>

                    <div class="mb-3">

                        <input type="email" class="form-control form-control-lg" placeholder="ایمیل">

                    </div>

                    <div class="mb-4">

                        <input type="tel" class="form-control form-control-lg" placeholder="شماره تلفن">

                    </div>

                    <input type="submit" value="ثبت درخواست مشاوره" class="btn btn-info btn-lg font-13 mb-4">

                </form><!-- end contact form -->

            </div>

            <div class="col-lg-7 ps-3">

                <img src="assets/images/banner2.jpg" class="img-fluid">

            </div>

        </div>

    </div>


    <div class="container d-flex justify-content-between mt-5 mb-3"><!-- start title-->

        <div class="title">

            <p class="font-14 ps-2">عضو ویژه شوید </p>

            <p class="font-12 ps-3 text-muted">با تهیه اشتراک ویژه به تمام آموزش های ویژه سایت دسترسی دارید!</p>

        </div>

    </div><!-- end title-->

    <div class="container"><!-- start price plans -->

        <div class="row">

            <div class="col-lg-4 col-sm-6"><!-- start plan item -->

                <div class="card custom-card-signup shadow-sm card-1">

                    <div class="circle">

                        <h5>اشتراک یکماهه</h5>

                        <p class="text-white">120.000 تومان</p>

                    </div>

                    <div class="card-body">

                        <p class="font-14 line-height">شما می توانید به مدت یک ماه به دوره های ویژه سایت دسترسی داشته باشید.</p>

                        <p class="font-13 text-secondary"><i class="fa fa-check align-middle me-1 text-secondary"></i>دسترسی به تمام آموزش های ویژه سایت</p>

                        <p class="font-13 text-secondary"><i class="fa fa-check align-middle me-1 text-secondary"></i>هزینه کم و دسترسی کامل</p>

                        <div class="w-100 text-center">

                            <a href="signup.html" class="btn btn-sm btn-outline-secondary px-3 mt-2"> ثبت نام <i class="fa fa-arrow-left align-middle"></i></a>

                        </div>

                    </div>

                </div>

            </div><!-- end plan item -->


            <div class="col-lg-4 col-sm-6"><!-- start plan item -->

                <div class="card custom-card-signup shadow-sm card-2">

                    <div class="circle">

                        <h5>اشتراک 3 ماهه</h5>

                        <p class="text-white">300.000 تومان</p>

                    </div>

                    <div class="card-body">

                        <p class="font-14 line-height">شما می توانید به مدت 3 ماه به دوره های ویژه سایت دسترسی داشته باشید.</p>

                        <p class="font-13  text-secondary"><i class="fa fa-check align-middle me-1 text-secondary"></i>دسترسی به تمام آموزش های ویژه سایت</p>

                        <p class="font-13  text-secondary"><i class="fa fa-check align-middle me-1 text-secondary"></i>سه روز مهلت تست رایگان !</p>

                        <div class="w-100 text-center">

                            <a href="signup.html" class="btn btn-sm btn-outline-warning px-3 mt-2" id="contact2"> ثبت نام <i class="fa fa-arrow-left align-middle"></i></a>

                        </div>

                    </div>

                </div>

            </div><!-- end plan item -->

            <div class="col-lg-4 col-sm-6"><!-- start plan item -->

                <div class="card custom-card-signup shadow-sm card-3">

                    <div class="circle">

                        <h5>اشتراک یکساله</h5>

                        <p class="text-white">700.000 تومان</p>

                    </div>

                    <div class="card-body">

                        <p class="font-14 line-height">شما می توانید به مدت یک سال به دوره های ویژه سایت دسترسی داشته باشید.</p>

                        <p class="font-13 text-secondary"><i class="fa fa-check align-middle me-1 text-secondary"></i>دسترسی به تمام آموزش های ویژه سایت</p>

                        <p class="font-13 text-secondary"><i class="fa fa-check align-middle me-1 text-secondary"></i>محبوب و مقرون به صرفه</p>

                        <div class="w-100 text-center">

                            <a href="signup.html" class="btn btn-sm btn-outline-primary px-3 mt-2" id="contact3"> ثبت نام <i class="fa fa-arrow-left align-middle"></i></a>

                        </div>

                    </div>

                </div>

            </div><!-- end plan item -->

        </div>

    </div><!-- end price plans -->


    <div class="team-box"><!-- start comment slider -->

        <div class="container d-flex justify-content-between"><!-- start title-->

            <div class="title mt-5 mb-3">

                <p class="font-14 ps-2">دستاورد های ما</p>

                <p class="font-12 ps-3 text-muted">موفقیت شما با ما !</p>

            </div>

        </div><!-- end title-->


        <div class="container">

            <div class="row">

                <div class="col-12">

                    <div class="owl-carousel owl-theme owl-rtl">

                        <div class="item"><!-- start comment item -->

                            <div class="card border-0 bg-white p-3 shadow-sm">

                                <div class="d-flex align-items-center justify-content-between mb-3">

                                    <div class="d-flex">

                                        <div>

                                            <img src="assets/images/user-1.png" class="comment-pic">

                                        </div>

                                        <div>

                                            <span class="font-13 d-block ms-2">آرش سبحانی</span>

                                            <span class="font-12 d-block ms-2 text-muted mt-1">برنامه نویس گوگل</span>

                                            <span class="student-rating"><i class="fa fa-star font-12 me-1"></i>4.9</span>

                                        </div>

                                    </div>

                                    <img src="assets/images/c-1.png" class="comment-icon">

                                </div>

                                <p class="font-13 line-height vazir-font px-3 text-justify">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده
                                    از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است.
                                </p>

                            </div>

                        </div><!-- end comment item -->

                        <div class="item"><!-- start comment item -->

                            <div class="card border-0 bg-white p-3 shadow-sm">

                                <div class="d-flex align-items-center justify-content-between mb-3">

                                    <div class="d-flex">

                                        <div>

                                            <img src="assets/images/user-2.jpg" class="comment-pic">

                                        </div>

                                        <div>

                                            <span class="font-13 d-block ms-2">زهرا حسینی</span>

                                            <span class="font-12 d-block ms-2 text-muted mt-1">مدیر مایکروسافت</span>

                                            <span class="student-rating"><i class="fa fa-star font-12 me-1"></i>4.5</span>

                                        </div>

                                    </div>

                                    <img src="assets/images/c-2.png" class="comment-icon">

                                </div>

                                <p class="font-13 line-height vazir-font px-3 text-justify">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده
                                    از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است.
                                </p>

                            </div>

                        </div><!-- end comment item -->

                        <div class="item"><!-- start comment item -->

                            <div class="card border-0 bg-white p-3 shadow-sm">

                                <div class="d-flex align-items-center justify-content-between mb-3">

                                    <div class="d-flex">

                                        <div>

                                            <img src="assets/images/user-3.jpg" class="comment-pic">

                                        </div>

                                        <div>

                                            <span class="font-13 d-block ms-2">رضاعظیمی</span>

                                            <span class="font-12 d-block ms-2 text-muted mt-1">مدیر لینکدین</span>

                                            <span class="student-rating"><i class="fa fa-star font-12 me-1"></i>4.3</span>

                                        </div>

                                    </div>

                                    <img src="assets/images/c-3.png" class="comment-icon">

                                </div>

                                <p class="font-13 line-height vazir-font px-3 text-justify">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده
                                    از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است.
                                </p>

                            </div>

                        </div><!-- end comment item -->

                        <div class="item"><!-- start comment item -->

                            <div class="card border-0 bg-white p-3 shadow-sm">

                                <div class="d-flex align-items-center justify-content-between mb-3">

                                    <div class="d-flex">

                                        <div>

                                            <img src="assets/images/user-1.png" class="comment-pic">

                                        </div>

                                        <div>

                                            <span class="font-13 d-block ms-2">آرش سبحانی</span>

                                            <span class="font-12 d-block ms-2 text-muted mt-1">برنامه نویس گوگل</span>

                                            <span class="student-rating"><i class="fa fa-star font-12 me-1"></i>4.9</span>

                                        </div>

                                    </div>

                                    <img src="assets/images/c-1.png" class="comment-icon">

                                </div>

                                <p class="font-13 line-height vazir-font px-3 text-justify">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده
                                    از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است.
                                </p>

                            </div>

                        </div><!-- end comment item -->

                    </div>

                </div>

            </div>

        </div>

    </div><!-- end comment slider -->


    <div class="container d-flex justify-content-between mt-5 mb-4"><!-- start title-->

        <div class="title">

            <p class="font-14 ps-2"> مقالات تخصصی </p>

            <p class="font-12 ps-3 text-muted"> همیشه به روز باش!</p>

        </div>

        <a href="blog.html" class="title-btn align-self-start">همه مقالات<i class="fa fa-arrow-left align-middle ms-1"></i></a>

    </div><!-- end title-->


    <div class="container"><!-- start article box -->

        <div class="row">

            <div class="col-lg-4 col-sm-6"><!-- start article item -->

                <div class="card shadow-sm mb-3 article-card">

                    <img src="assets/images/article1.jpg" class="img-fluid">

                    <div class="card-body">

                        <a href="article.html" class="text-dark d-block my-2">چگونه مطالعه آنلاین را شروع کنیم ؟ </a>

                        <p class="font-13 text-justify line-height vazir-font">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
                            استفاده از طراحان گرافیک است.
                            چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است.
                        </p>

                        <span class="font-12 vazir-font"><i class="fa fa-pen font-12 text-secondary align-middlle"></i> علی نوروزی</span>

                        <a href="article.html" class="btn btn-info font-12 float-end">ادامه مطلب</a>

                    </div>

                </div>

            </div><!-- end article item -->


            <div class="col-lg-4 col-sm-6"><!-- start article item -->

                <div class="card shadow-sm mb-3 article-card">

                    <img src="assets/images/article2.jpg" class="img-fluid">

                    <div class="card-body">

                        <a href="article.html" class="text-dark d-block my-2">بهترین زمان ارسال پست در اینستاگرام</a>

                        <p class="font-13 text-justify line-height vazir-font">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
                            استفاده از طراحان گرافیک است.
                            چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است.
                        </p>

                        <span class="font-12 vazir-font"><i class="fa fa-pen font-12 text-secondary align-middlle"></i> علی نوروزی</span>

                        <a href="article.html" class="btn btn-info font-12 float-end">ادامه مطلب</a>

                    </div>

                </div>

            </div><!-- end article item -->


            <div class="col-lg-4 col-sm-6"><!-- start article item -->

                <div class="card shadow-sm mb-3 article-card">

                    <img src="assets/images/article3.jpg" class="img-fluid">

                    <div class="card-body">

                        <a href="article.html" class="text-dark d-block my-2">تله های خطرناک در سخنرانی</a>

                        <p class="font-13 text-justify line-height vazir-font">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
                            استفاده از طراحان گرافیک است.
                            چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است.
                        </p>

                        <span class="font-12 vazir-font"><i class="fa fa-pen font-12 text-secondary align-middlle"></i> علی نوروزی</span>

                        <a href="article.html" class="btn btn-info font-12 float-end">ادامه مطلب</a>

                    </div>

                </div>

            </div><!-- end article item -->

        </div>

    </div><!-- end article box -->


@endsection
