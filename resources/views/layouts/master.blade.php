
<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.rtl.css">
    <link rel="stylesheet" href="assets/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>@yield('title') | {{$settings->name}}</title>
</head>
<body>

<header class="d-none d-lg-block container"><!-- start header -->

    <div class="row py-2">

        <div class="col-lg-2"><img src="{{$settings->logo}}" alt="{{$settings->name}}"></div><!-- logo -->

        <div class="col-lg-6 d-flex align-items-center ps-5 pe-0"><!-- start search box -->

            <div class="input-group">

                <input type="search" class="form-control form-control-lg"  placeholder="چی دوست داری یاد بگیری ؟! ...">

                <button type="submit" class="btn btn-secondary"><img src="assets/images/search.png" class="search-btn"></button>

            </div>

        </div><!-- end search box -->

        <div class="col-lg-2 d-flex align-items-center justify-content-end"><!-- start shopping bag-->

            <a href="#shopping-bag" class="position-relative me-5" data-bs-toggle="offcanvas"><img src="assets/images/bag.png" class="shopping-bag-icon">

                <div class="count">2</div>
            </a>

            <div class="offcanvas offcanvas-end" tabindex="-1" data-bs-scroll="true" id="shopping-bag"><!-- start shopping bag side bar -->

                <div class="offcanvas-header mb-3"><!-- start bag header -->

                    <p class="offcanvas-title font-12">سبد خرید (4 کالا)</p>

                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>

                </div><!-- end bag header -->

                <div class="offcanvas-body"><!-- start bag body -->

                    <div class="cart-item d-flex align-items-center justify-content-between"><!-- start cart item -->

                        <a href="course.html"><img src="assets/images/flutter.png"></a>

                        <div class="cart-item-detail">

                            <a href="course.html">آموزش حرفه ای Flutter</a>

                            <p class="font-12 text-muted mt-3">320.000 تومان</p>

                        </div>

                        <a href="#" class="delete-item"><i class="fa fa-times"></i></a>

                    </div><!-- end cart item -->

                    <div class="cart-item d-flex align-items-center justify-content-between"><!-- start cart item -->

                        <a href="course.html"><img src="assets/images/flutter.png"></a>

                        <div class="cart-item-detail">

                            <a href="course.html">آموزش حرفه ای Flutter</a>

                            <p class="font-12 text-muted mt-3">320.000 تومان</p>

                        </div>

                        <a href="#" class="delete-item"><i class="fa fa-times"></i></a>

                    </div><!-- end cart item -->

                    <div class="cart-item d-flex align-items-center justify-content-between"><!-- start cart item -->

                        <a href="course.html"><img src="assets/images/flutter.png"></a>

                        <div class="cart-item-detail">

                            <a href="course.html">آموزش حرفه ای Flutter</a>

                            <p class="font-12 text-muted mt-3">320.000 تومان</p>

                        </div>

                        <a href="#" class="delete-item"><i class="fa fa-times"></i></a>

                    </div><!-- end cart item -->

                    <div class="cart-item d-flex align-items-center justify-content-between"><!-- start cart item -->

                        <a href="course.html"><img src="assets/images/flutter.png"></a>

                        <div class="cart-item-detail">

                            <a href="course.html">آموزش حرفه ای Flutter</a>

                            <p class="font-12 text-muted mt-3">320.000 تومان</p>

                        </div>

                        <a href="#" class="delete-item"><i class="fa fa-times"></i></a>

                    </div><!-- end cart item -->

                </div><!-- end bag body -->

                <div class="d-flex justify-content-between align-items-center px-3">

                    <p class="font-13">مبلغ کل :</p>

                    <p class="font-13">1,350,000 تومان</p>

                </div>

                <a href="#" class="btn btn-info font-13 m-2 p-2">پرداخت</a>

                <a href="cart.html" class="btn btn-secondary font-13 m-2 p-2">مشاهده سبد خرید</a>

            </div><!-- end shopping bag side bar -->

        </div><!-- end shopping bag-->
        @auth()

            <div class="col-lg-2 d-flex align-items-center justify-content-end">
                <div class="dropdown">
                    <button class="dropbtn">
                        <span>{{auth()->user()->name}} {{auth()->user()->lastname}}</span>
                        <svg viewBox="-5 -5 110 110" preserveAspectRatio="none" aria-hidden="true">
                            <path d="M0,0 C0,0 100,0 100,0 C100,0 100,100 100,100 C100,100 0,100 0,100 C0,100 0,0 0,0"/>
                        </svg>
                    </button>

                    <div class="dropdown-content">
                        <ul class="dropdown-menu position-static d-grid gap-1 p-2 rounded-3 mx-0 shadow text-center" data-bs-theme="light">
                            <li><a class="dropdown-item rounded-2" href="{{route('dashboard')}}">داشبورد</a></li>
                            <li><a class="dropdown-item rounded-2" href="#">Another action</a></li>
                            <li><a class="dropdown-item rounded-2" href="#">Something else here</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li>
                                <form action="{{route('logout')}}" method="POST">
                                    @csrf
                                <button class="dropdown-item rounded-2" href="#">خروج از حساب</button>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        @else
            <div class="col-lg-2 d-flex align-items-center justify-content-end signup-login">

                <a href="{{route('register')}}" class="btn-signup">ثبت نام</a>

                <a href="{{route('login')}}" class="btn-login">ورود</a>

            </div><!-- end signup & login -->
        @endauth
    </div>

</header><!-- end header -->


<header class="d-lg-none container"><!-- start responsive header -->

    <div class="row">

        <div class="col-6 ps-0"><img src="{{$settings->logo}}" alt="{{$settings->name}}"></div><!-- logo -->

        <div class="col-6 d-flex align-items-center justify-content-end">

            <a href="#shopping-bag-responsive" class="position-relative me-4" data-bs-toggle="offcanvas"><img src="assets/images/bag.png" class="shopping-bag-icon"><!-- start shopping bag-->

                <div class="count">2</div>

            </a><!-- end shopping bag-->

            <div class="offcanvas offcanvas-end" tabindex="-1" data-bs-scroll="true" id="shopping-bag-responsive"><!-- start shopping bag side bar -->

                <div class="offcanvas-header mb-3"><!-- start bag header -->

                    <p class="offcanvas-title font-12">سبد خرید (4 کالا)</p>

                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>

                </div><!-- end bag header -->

                <div class="offcanvas-body"><!-- start bag body -->

                    <div class="cart-item d-flex align-items-center justify-content-between"><!-- start cart item -->

                        <a href="course.html"><img src="assets/images/flutter.png"></a>

                        <div class="cart-item-detail">

                            <a href="contactus.html">آموزش حرفه ای Flutter</a>

                            <p class="font-12 text-muted mt-3">320.000 تومان</p>

                        </div>

                        <a href="#" class="delete-item"><i class="fa fa-times"></i></a>

                    </div><!-- end cart item -->

                    <div class="cart-item d-flex align-items-center justify-content-between"><!-- start cart item -->

                        <a href="course.html"><img src="assets/images/flutter.png"></a>

                        <div class="cart-item-detail">

                            <a href="course.html">آموزش حرفه ای Flutter</a>

                            <p class="font-12 text-muted mt-3">320.000 تومان</p>

                        </div>

                        <a href="#" class="delete-item"><i class="fa fa-times"></i></a>

                    </div><!-- end cart item -->

                    <div class="cart-item d-flex align-items-center justify-content-between"><!-- start cart item -->

                        <a href="course.html"><img src="assets/images/flutter.png"></a>

                        <div class="cart-item-detail">

                            <a href="course.html">آموزش حرفه ای Flutter</a>

                            <p class="font-12 text-muted mt-3">320.000 تومان</p>

                        </div>

                        <a href="#" class="delete-item"><i class="fa fa-times"></i></a>

                    </div><!-- end cart item -->

                    <div class="cart-item d-flex align-items-center justify-content-between"><!-- start cart item -->

                        <a href="course.html"><img src="assets/images/flutter.png"></a>

                        <div class="cart-item-detail">

                            <a href="course.html">آموزش حرفه ای Flutter</a>

                            <p class="font-12 text-muted mt-3">320.000 تومان</p>

                        </div>

                        <a href="#" class="delete-item"><i class="fa fa-times"></i></a>

                    </div><!-- end cart item -->

                </div><!-- end bag body -->

                <div class="d-flex justify-content-between align-items-center px-3 pt-3">

                    <p class="font-13">مبلغ کل :</p>

                    <p class="font-13">1,350,000 تومان</p>

                </div>

                <a href="#" class="btn btn-info font-13 m-2 p-2">پرداخت</a>

                <a href="cart" class="btn btn-secondary font-13 m-2 p-2">مشاهده سبد خرید</a>

            </div><!-- end shopping bag side bar -->

            <i class="fa fa-search header-icon me-4" data-bs-toggle="collapse" data-bs-target="#search"></i>

            <a href="#mobile-menu" data-bs-toggle="offcanvas"><i class="fa fa-bars header-icon"></i></a>

            <div class="offcanvas offcanvas-start" tabindex="-1" data-bs-scroll="true" id="mobile-menu"><!-- start responsive menu -->

                <div class="offcanvas-body">

                    <div class="d-flex align-items-center justify-content-center mt-5"><!-- start signup & login -->
                        @auth()

                            <div class="col-lg-2 d-flex align-items-center justify-content-end">
                                <div class="dropdown">
                                    <button class="dropbtn">
                                        <span>{{auth()->user()->name}} {{auth()->user()->lastname}}</span>
                                        <svg viewBox="-5 -5 110 110" preserveAspectRatio="none" aria-hidden="true">
                                            <path d="M0,0 C0,0 100,0 100,0 C100,0 100,100 100,100 C100,100 0,100 0,100 C0,100 0,0 0,0"/>
                                        </svg>
                                    </button>

                                    <div class="dropdown-content">
                                        <ul class="dropdown-menu position-static d-grid gap-1 p-2 rounded-3 mx-0 shadow text-center" data-bs-theme="light">
                                            <li><a class="dropdown-item rounded-2" href="{{route('dashboard')}}">داشبورد</a></li>
                                            <li><a class="dropdown-item rounded-2" href="#">Another action</a></li>
                                            <li><a class="dropdown-item rounded-2" href="#">Something else here</a></li>
                                            <li><hr class="dropdown-divider"></li>
                                            <li>
                                                <form action="{{route('logout')}}" method="POST">
                                                    @csrf
                                                    <button class="dropdown-item rounded-2" href="#">خروج از حساب</button>
                                                </form>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        @else

                                <a href="{{route('register')}}" class="btn-signup">ثبت نام</a>

                                <a href="{{route('login')}}" class="btn-login">ورود</a>

                        @endauth
                    </div><!-- end signup & login -->

                    <ul class="responsive-menu-level-1 ps-0 mt-5"><!-- start menu level 1 -->

                        <li class="menu-item"><a href="/">صفحه اصلی</a></li>

                        <li class="menu-item has-sub-menu"><a href="#">دوره های آموزشی</a>

                            <ul class="responsive-menu-level-2 ps-0"><!-- start menu level 2 -->

                                <li class="menu-item-2 has-sub-menu-2"><a href="#">دوره های آموزش برنامه نویسی</a>

                                    <ul class="responsive-menu-level-3 ps-0"><!-- start menu level 3 -->

                                        <li class="menu-item-3"><a href="course.html">آموزش برنامه نویسی</a></li>

                                        <li class="menu-item-3"><a href="course.html">آموزش برنامه نویسی</a></li>

                                        <li class="menu-item-3"><a href="course.html">آموزش برنامه نویسی</a></li>

                                    </ul><!-- end menu level 3 -->

                                </li>

                                <li class="menu-item-2"><a href="category.html">دوره های آموزش برنامه نویسی</a></li>

                                <li class="menu-item-2"><a href="category.html">دوره های آموزش برنامه نویسی</a></li>

                            </ul><!-- end menu level 2 -->

                        </li>

                        <li class="menu-item has-sub-menu"><a href="#">صفحات </a>

                            <ul class="responsive-menu-level-2 ps-0"><!-- start menu level 2 -->

                                <li class="menu-item-2"><a href="signup.html">ثبت نام</a></li>

                                <li class="menu-item-2"><a href="login.html">ورود</a></li>

                                <li class="menu-item-2"><a href="remember.html">فراموشی رمز عبور</a></li>

                                <li class="menu-item-2"><a href="profile.html">پروفایل کاربر</a></li>

                                <li class="menu-item-2"><a href="teach.html">درخواست تدریس</a></li>

                                <li class="menu-item-2"><a href="cart.html">سبد خرید </a></li>

                                <li class="menu-item-2"><a href="404.html">صفحه 404</a></li>

                            </ul><!-- end menu level 2 -->

                        </li>

                        <li class="menu-item"><a href="blog.html">بلاگ</a></li>

                        <li class="menu-item"><a href="contactus.html">تماس با ما</a></li>

                    </ul><!-- end menu level 1 -->

                </div>

            </div><!-- end responsive menu -->

        </div>

    </div>

    <div class="row"><!-- start search box -->

        <div class="col-12 collapse py-3" id="search">

            <div class="input-group">

                <input type="search" class="form-control form-control-lg"  placeholder="چی دوست داری یاد بگیری ؟! ...">

                <button type="submit" class="btn btn-secondary"><img src="assets/images/search.png" class="search-btn"></button>

            </div>

        </div><!-- end search box -->

    </div><!-- end responsive search box -->

</header><!-- end header -->


<nav class="d-none d-lg-block navigation shadow-sm"><!-- start nav menu -->

    <div class="container">

        <ul class="main-menu">

            <li><a href="/">صفحه اصلی</a></li>

            <li><a href="#">دوره های آموزشی<i class="fa fa-angle-down align-middle ms-1"></i></a>

                <ul class="mega-menu row ps-0"><!-- start mega menu -->

                    <li class="col-4 mega-menu-box">

                        <ul class="ps-0">

                            <li class="menu-title"><a href="category.html"><i class="fa fa-angle-left align-middle text-warning me-1"></i>دوره های آموزش برنامه نویسی</a></li>

                            <li><a href="course.html">آموزش برنامه نویسی</a></li>

                            <li><a href="course.html">آموزش برنامه نویسی</a></li>

                            <li><a href="course.html">آموزش برنامه نویسی</a></li>

                            <li><a href="course.html">آموزش برنامه نویسی</a></li>

                        </ul>

                    </li>

                    <li class="col-4 mega-menu-box">

                        <ul class="ps-0">

                            <li class="menu-title"><a href="category.html"><i class="fa fa-angle-left align-middle text-warning me-1"></i>دوره های آموزش برنامه نویسی</a></li>

                            <li><a href="course.html">آموزش برنامه نویسی</a></li>

                            <li><a href="course.html">آموزش برنامه نویسی</a></li>

                            <li><a href="course.html">آموزش برنامه نویسی</a></li>

                            <li><a href="course.html">آموزش برنامه نویسی</a></li>

                        </ul>

                    </li>

                    <li class="col-4 mega-menu-box">

                        <ul class="ps-0">

                            <li class="menu-title"><a href="category.html"><i class="fa fa-angle-left align-middle text-warning me-1"></i>دوره های آموزش برنامه نویسی</a></li>

                            <li><a href="course.html">آموزش برنامه نویسی</a></li>

                            <li><a href="course.html">آموزش برنامه نویسی</a></li>

                            <li><a href="course.html">آموزش برنامه نویسی</a></li>

                            <li><a href="course.html">آموزش برنامه نویسی</a></li>

                        </ul>

                    </li>

                </ul><!-- end mega menu -->

            </li>

            <li><a href="#">صفحات<i class="fa fa-angle-down align-middle ms-1"></i></a>

                <ul class="sub-menu"><!-- start sub menu -->

                    <li><a href="signup.html">ثبت نام</a></li>

                    <li><a href="login.html">ورود</a></li>

                    <li><a href="remember.html">فراموشی رمز عبور</a></li>

                    <li><a href="profile.html">پروفایل کاربر</a></li>

                    <li><a href="teach.html">درخواست تدریس</a></li>

                    <li><a href="cart.html">سبد خرید </a></li>

                    <li><a href="404.html">صفحه 404</a></li>

                </ul><!-- end sub menu -->

            </li>

            <li><a href="blog.html">بلاگ</a></li>

            <li><a href="contactus.html">تماس با ما</a></li>

        </ul>

    </div>

</nav><!-- end nav menu -->

@yield('content')

<footer class="bg-light"><!-- start footer -->

    <div class="container py-3">

        <div class="row">

            <div class="col-lg-4"><!-- start footer info -->

                <img src="assets/images/footer-logo.jpg" alt="Daneshar" class="mb-2">

                <p class="line-height font-13 mb-4">
                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
                    استفاده از طراحان گرافیک است.
                    چاپگرها و متون بلکه روزنامه و مجله در ستون و سطر آنچنان که لازم است.
                </p>

                <p class="font-13"><i class="fas fa-map-marker-alt text-muted me-2"></i>استان تهران شهر تهران - خیابان گاندی جنوبی - پلاک ۲۸</p>

                <p class="font-13"><i class="fas fa-envelope text-muted me-2"></i> info@sitename.com</p>

                <p class="font-13"><i class="fa fa-phone text-muted me-2"></i>021-12345678</p>

            </div><!-- end footer info -->

            <div class="col-lg-4 col-md-6 text-center footer-links mb-4"><!-- start footer links -->

                <span class="mt-5 pt-2 d-block">با دانشیار </span>

                <ul class="ps-0">

                    <li class="my-3"><a href="contactus.html" class="font-13 text-dark">درباره دانشیار</a></li>

                    <li class="my-3"><a href="contactus.html" class="font-13 text-dark">تماس با دانشیار</a></li>

                    <li class="my-3"><a href="contactus.html" class="font-13 text-dark">شرایط استفاده</a></li>

                    <li class="my-3"><a href="contactus.html" class="font-13 text-dark">پاسخ به پرسش‌های متداول</a></li>

                </ul>

            </div><!-- end footer links -->

            <div class="col-lg-4 col-md-6">

                <div class="row">

                    <div class="col-lg-12 d-flex justify-content-end footer-pics"><!-- start footer pics -->

                        <img src="assets/images/footer1.png" class="footer-pic">

                        <img src="assets/images/footer2.png" class="footer-pic">

                    </div><!-- end footer pics -->

                    <div class="col-lg-12"><!-- start share email box -->

                        <div class="input-group mt-5">

                            <input type="email" class="form-control form-control-lg" placeholder=" اشتراک در خبرنامه ">

                            <button type="submit" class="btn btn-warning email-btn"><i class=" fa fa-envelope"></i></button>

                        </div>

                    </div><!-- end share email box -->

                </div>

            </div>

        </div>

        <div class="row"><!-- start social media box -->

            <div class="col-md-12 text-center py-2">

                <p class="font-13 my-4"> کلیه حقوق این سایت متعلق به یاس دیزاین است .</p>

                <a href="#"><i class="fab fa-instagram social-media"></i></a>

                <a href="#"><i class="fab fa-twitter social-media"></i></a>

                <a href="#"><i class="fab fa-youtube social-media"></i></a>

                <a href="#"><i class="fab fa-telegram social-media"></i></a>

            </div>

        </div><!-- end social media box -->

        <a href="#" class="topbutton"></a><!-- bottom to top btn -->

    </div>

</footer><!-- end footer -->

<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/script.js"></script>
</body>
</html>
