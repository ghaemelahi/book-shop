<!DOCTYPE html>
<html dir="rtl" lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>قالب فروشگاه آنلاین کتابخانه </title>
    <link rel="icon" type="image/x-icon" href="{{ asset('dist/img/book-icon.avif') }}">

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <!-- header section starts  -->

    <header class="header">

        <div class="header-1">

            <a href="#" class="logo"> <i class="fas fa-book"></i> کتابخانه </a>

            <form action="" class="search-form">
                <input type="search" name="" placeholder="جستجو کنید" id="search-box">
                <label for="search-box" class="fas fa-search"></label>
            </form>

            <div class="icons">
                <div id="search-btn" class="fas fa-search"></div>
                {{-- <a href="#" class="fas fa-heart"></a> --}}
                <a href="" class="fas fa-shopping-cart"></a>
                <div id="login-btn" class="fas fa-user"></div>
            </div>

        </div>

        <div class="header-2">
            <nav class="navbar">
                <a href="#home">خانه</a>
                <a href="#home">کتاب ها</a>
                {{-- <a href="#featured">ویژه</a> --}}
                <a href="#arrivals">جدیدها</a>
                {{-- <a href="#reviews">نظرات</a> --}}
                {{-- <a href="#blogs">وبلاگ</a> --}}
            </nav>
        </div>

    </header>

    <!-- header section ends -->

    <!-- bottom navbar  -->

    <nav class="bottom-navbar">
        <a href="#home" class="fas fa-home"></a>
        <a href="#featured" class="fas fa-list"></a>
        <a href="#arrivals" class="fas fa-tags"></a>
        <a href="#reviews" class="fas fa-comments"></a>
        <a href="#blogs" class="fas fa-blog"></a>
    </nav>

    <!-- login form  -->

    <div class="login-form-container">

        <div id="close-login-btn" class="fas fa-times"></div>

        <form action="">
            <h3>ورود</h3>
            <span>نام کاربری</span>
            <input type="email" name="" class="box" placeholder="ایمیل خود را وارد کنید" id="">
            <span>رمز عبور</span>
            <input type="password" name="" class="box" placeholder="رمز عبور خود را وارد کنید" id="">
            <div class="checkbox">
                <input type="checkbox" name="" id="remember-me">
                <label for="remember-me"> به خاطر سپردن</label>
            </div>
            <input type="submit" value="sign in" class="btn">
            <p>رمز خود را فراموش کرده اید ؟ <a href="#">اینجا کلیک کنید</a></p>
            <p>ثبت نام نکرده اید ؟ <a href="#">ساخت حساب</a></p>
        </form>

    </div>

    <!-- home section starts  -->

    <section class="home" id="home">

        <div class="row">

            <div class="content">
                <h3>تا 75٪ تخفیف</h3>
                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و
                    متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است </p>
                <a href="#" class="btn">اکنون خرید کنید</a>
            </div>

            <div class="swiper books-slider">
                <div class="swiper-wrapper">
                    <a href="#" class="swiper-slide"><img src="{{asset('image/book-1.png')}}" alt=""></a>
                    <a href="#" class="swiper-slide"><img src="{{asset('image/book-2.png')}}" alt=""></a>
                    <a href="#" class="swiper-slide"><img src="{{asset('image/book-3.png')}}" alt=""></a>
                    <a href="#" class="swiper-slide"><img src="{{asset('image/book-4.png')}}" alt=""></a>
                    <a href="#" class="swiper-slide"><img src="{{asset('image/book-5.png')}}" alt=""></a>
                    <a href="#" class="swiper-slide"><img src="{{asset('image/book-6.png')}}" alt=""></a>
                </div>
                <img src="image/stand.png" class="stand" alt="">
            </div>

        </div>

    </section>

    <!-- home section ense  -->

    <!-- icons section starts  -->

    <section class="icons-container">

        <div class="icons">
            <i class="fas fa-download"></i>
            <div class="content">
                <h3>دانلود رایگان</h3>
                <p>کتاب ها</p>
            </div>
        </div>

        <div class="icons">
            <i class="fas fa-lock"></i>
            <div class="content">
                <h3>پرداخت امن</h3>
                <p>100 پرداخت مطمئن</p>
            </div>
        </div>

        <div class="icons">
            <i class="fas fa-redo-alt"></i>
            <div class="content">
                <h3>بازگشت آسان</h3>
                <p>10 روز مهلت بازگشت</p>
            </div>
        </div>

        <div class="icons">
            <i class="fas fa-headset"></i>
            <div class="content">
                <h3>پشتیبانی 7/24</h3>
                <p>در هر زمان با ما تماس بگیرید</p>
            </div>
        </div>

    </section>

    <!-- icons section ends -->

    <!-- featured section starts  -->

    <section class="featured" id="featured">

        <h1 class="heading"> <span>بهترین کتابها</span> </h1>

        <div class="swiper featured-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide box">
                    <div class="icons">
                        {{-- <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a> --}}
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="{{asset('image/book-1.png')}}" alt="">
                    </div>
                    <div class="content">
                        <h3>کتاب برجسته</h3>
                        <div class="price">5 هزار تومان <span>10 هزارتومان</span></div>
                        <a href="#" class="btn">اضافه کردن به سبد خرید</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        {{-- <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a> --}}
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="{{asset('image/book-2.png')}}" alt="">
                    </div>
                    <div class="content">
                        <h3>کتاب برجسته</h3>
                        <div class="price">5 هزار تومان <span>10 هزارتومان</span></div>
                        <a href="#" class="btn">اضافه کردن به سبد خرید</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        {{-- <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a> --}}
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="{{asset('image/book-3.png')}}" alt="">
                    </div>
                    <div class="content">
                        <h3>کتاب برجسته</h3>
                        <div class="price">5 هزار تومان <span>10 هزارتومان</span></div>
                        <a href="#" class="btn">اضافه کردن به سبد خرید</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        {{-- <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a> --}}
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="{{asset('image/book-4.png')}}" alt="">
                    </div>
                    <div class="content">
                        <h3>کتاب برجسته</h3>
                        <div class="price">5 هزار تومان <span>10 هزارتومان</span></div>
                        <a href="#" class="btn">اضافه کردن به سبد خرید</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        {{-- <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a> --}}
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="{{asset('image/book-5.png')}}" alt="">
                    </div>
                    <div class="content">
                        <h3>کتاب برجسته</h3>
                        <div class="price">5 هزار تومان <span>10 هزارتومان</span></div>
                        <a href="#" class="btn">اضافه کردن به سبد خرید</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        {{-- <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a> --}}
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="{{asset('image/book-6.png')}}" alt="">
                    </div>
                    <div class="content">
                        <h3>کتاب برجسته</h3>
                        <div class="price">5 هزار تومان <span>10 هزارتومان</span></div>
                        <a href="#" class="btn">اضافه کردن به سبد خرید</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        {{-- <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a> --}}
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="{{asset('image/book-7.png')}}" alt="">
                    </div>
                    <div class="content">
                        <h3>کتاب برجسته</h3>
                        <div class="price">5 هزار تومان <span>10 هزارتومان</span></div>
                        <a href="#" class="btn">اضافه کردن به سبد خرید</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        {{-- <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a> --}}
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="{{asset('image/book-8.png')}}" alt="">
                    </div>
                    <div class="content">
                        <h3>کتاب برجسته</h3>
                        <div class="price">5 هزار تومان <span>10 هزارتومان</span></div>
                        <a href="#" class="btn">اضافه کردن به سبد خرید</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        {{-- <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a> --}}
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="{{asset('image/book-9.png')}}" alt="">
                    </div>
                    <div class="content">
                        <h3>بهترین کتاب ها</h3>
                        <div class="price">5 هزار تومان <span>10 هزارتومان</span></div>
                        <a href="#" class="btn">اضافه کردن به سبد خرید</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        {{-- <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a> --}}
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="{{asset('image/book-10.png')}}" alt="">
                    </div>
                    <div class="content">
                        <h3>کتاب برجسته</h3>
                        <div class="price">5 هزار تومان <span>10 هزارتومان</span></div>
                        <a href="#" class="btn">اضافه کردن به سبد خرید</a>
                    </div>
                </div>

            </div>

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>

        </div>

    </section>

    <!-- featured section ends -->

    <!-- newsletter section starts -->

    <section class="newsletter">

        <form action="">
            <h3>برای آخرین به روز رسانی مشترک شوید</h3>
            <input type="email" name="" placeholder="ایمیل خود را وارد کنید" id=""
                class="box">
            <input type="submit" value="عضویت" class="btn">
        </form>

    </section>

    <!-- newsletter section ends -->

    <!-- arrivals section starts  -->

    <section class="arrivals" id="arrivals">

        <h1 class="heading"> <span>کتابهای جدید</span> </h1>

        <div class="swiper arrivals-slider">

            <div class="swiper-wrapper">

                <a href="#" class="swiper-slide box">
                    <div class="image">
                        <img src="{{asset('image/book-1.png')}}" alt="">
                    </div>
                    <div class="content">
                        <h3>تازه رسیده ها</h3>
                        <div class="price">5 هزارتومان <span>10 هزارتومان</span></div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </a>

                <a href="#" class="swiper-slide box">
                    <div class="image">
                        <img src="{{asset('image/book-2.png')}}" alt="">
                    </div>
                    <div class="content">
                        <h3>تازه رسیده ها</h3>
                        <div class="price">5 هزارتومان <span>10 هزارتومان</span></div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </a>

                <a href="#" class="swiper-slide box">
                    <div class="image">
                        <img src="{{asset('image/book-3.png')}}" alt="">
                    </div>
                    <div class="content">
                        <h3>تازه رسیده ها</h3>
                        <div class="price">5 هزارتومان <span>10 هزارتومان</span></div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </a>

                <a href="#" class="swiper-slide box">
                    <div class="image">
                        <img src="{{asset('image/book-4.png')}}" alt="">
                    </div>
                    <div class="content">
                        <h3>تازه رسیده ها</h3>
                        <div class="price">5 هزارتومان <span>10 هزارتومان</span></div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </a>

                <a href="#" class="swiper-slide box">
                    <div class="image">
                        <img src="{{asset('image/book-5.png')}}" alt="">
                    </div>
                    <div class="content">
                        <h3>تازه رسیده ها</h3>
                        <div class="price">5 هزارتومان <span>10 هزارتومان</span></div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </a>

            </div>

        </div>

        <div class="swiper arrivals-slider">

            <div class="swiper-wrapper">

                <a href="#" class="swiper-slide box">
                    <div class="image">
                        <img src="{{asset('image/book-6.png')}}" alt="">
                    </div>
                    <div class="content">
                        <h3>تازه رسیده ها</h3>
                        <div class="price">5 هزارتومان <span>10 هزارتومان</span></div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </a>

                <a href="#" class="swiper-slide box">
                    <div class="image">
                        <img src="{{asset('image/book-7.png')}}" alt="">
                    </div>
                    <div class="content">
                        <h3>تازه رسیده ها</h3>
                        <div class="price">5 هزارتومان <span>10 هزارتومان</span></div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </a>

                <a href="#" class="swiper-slide box">
                    <div class="image">
                        <img src="{{asset('image/book-8.png')}}" alt="">
                    </div>
                    <div class="content">
                        <h3>تازه رسیده ها</h3>
                        <div class="price">5 هزارتومان <span>10 هزارتومان</span></div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </a>

                <a href="#" class="swiper-slide box">
                    <div class="image">
                        <img src="{{asset('image/book-9.png')}}" alt="">
                    </div>
                    <div class="content">
                        <h3>تازه رسیده ها</h3>
                        <div class="price">5 هزارتومان <span>10 هزارتومان</span></div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </a>

                <a href="#" class="swiper-slide box">
                    <div class="image">
                        <img src="{{asset('image/book-10.png')}}" alt="">
                    </div>
                    <div class="content">
                        <h3>تازه رسیده ها</h3>
                        <div class="price">5 هزارتومان <span>10 هزارتومان</span></div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </a>

            </div>

        </div>

    </section>

    <!-- arrivals section ends -->

    <!-- deal section starts  -->

    <section class="deal">

        <div class="content">
            <h3>معامله روز</h3>
            <h1>تا 50٪ تخفیف</h1>
            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و
                متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است </p>
            <a href="#" class="btn">اکنون خرید کنید</a>
        </div>

        <div class="image">
            <img src="{{asset('image/deal-img.jpg')}}" alt="">
        </div>

    </section>

    <!-- deal section ends -->

    <!-- reviews section starts  -->

    {{-- <section class="reviews" id="reviews">

        <h1 class="heading"> <span>نظرات مشتریان</span> </h1>

        <div class="swiper reviews-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide box">
                    <img src="{{asset('image/pic-1.png')}}" alt="">
                    <h3>نام مشتری</h3>
                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است
                        چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است </p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="{{asset('image/pic-2.png')}}" alt="">
                    <h3>نام مشتری</h3>
                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است
                        چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است </p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="{{asset('image/pic-3.png')}}" alt="">
                    <h3>نام مشتری</h3>
                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است
                        چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است </p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
                <div class="swiper-slide box">
                    <img src="{{asset('image/pic-4.png')}}" alt="">
                    <h3>نام مشتری</h3>
                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است
                        چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است </p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="{{asset('image/pic-5.png')}}" alt="">
                    <h3>نام مشتری</h3>
                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است
                        چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است </p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="{{asset('image/pic-6.png')}}" alt="">
                    <h3>نام مشتری</h3>
                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است
                        چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است </p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>

            </div>

        </div>

    </section> --}}

    <!-- reviews section ends -->

    <!-- blogs section starts  -->

    {{-- <section class="blogs" id="blogs">

        <h1 class="heading"> <span>وبلاگ</span> </h1>

        <div class="swiper blogs-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide box">
                    <div class="image">
                        <img src="{{asset('image/blog-1.jpg')}}" alt="">
                    </div>
                    <div class="content">
                        <h3>عنوان متن در اینجا</h3>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است
                        </p>
                        <a href="#" class="btn">مطالعه بیشتر</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="image">
                        <img src="image/blog-2.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>عنوان متن در اینجا</h3>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است
                        </p>
                        <a href="#" class="btn">مطالعه بیشتر</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="image">
                        <img src="{{asset('image/blog-3.jpg')}}" alt="">
                    </div>
                    <div class="content">
                        <h3>عنوان متن در اینجا</h3>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است
                        </p>
                        <a href="#" class="btn">مطالعه بیشتر</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="image">
                        <img src="{{asset('image/blog-4.jpg')}}" alt="">
                    </div>
                    <div class="content">
                        <h3>عنوان متن در اینجا</h3>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است
                        </p>
                        <a href="#" class="btn">مطالعه بیشتر</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="image">
                        <img src="{{asset('image/blog-5.jpg')}}" alt="">
                    </div>
                    <div class="content">
                        <h3>عنوان متن در اینجا</h3>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است
                        </p>
                        <a href="#" class="btn">مطالعه بیشتر</a>
                    </div>
                </div>

            </div>

        </div>

    </section> --}}

    <!-- blogs section ends -->

    <!-- footer section starts  -->

    <section class="footer">

        <div class="box-container">

            <div class="box">
                <h3>دیگر شعبه ها</h3>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> تهران </a>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> مشهد </a>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> اصفهان </a>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> شیراز </a>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> تبریز </a>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> یزد </a>
            </div>

            <div class="box">
                <h3>quick links</h3>
                <a href="#"> <i class="fas fa-arrow-right"></i> خانه </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> ویژه </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> بهترین ها </a>
                {{-- <a href="#"> <i class="fas fa-arrow-right"></i> نظرات </a> --}}
                {{-- <a href="#"> <i class="fas fa-arrow-right"></i> وبلاگ </a> --}}
            </div>

            <div class="box">
                <h3>extra links</h3>
                <a href="#"> <i class="fas fa-arrow-right"></i> حساب کاربری </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> اقلام سفارش داده شده </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> قوانین </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> روش پرداخت </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> دیگر سرویس ها </a>
            </div>

            <div class="box">
                <h3>contact info</h3>
                <a href="#"> <i class="fas fa-phone"></i> +123-456-7890 </a>
                <a href="#"> <i class="fas fa-phone"></i> +111-222-3333 </a>
                <a href="#"> <i class="fas fa-envelope"></i> admin@netcopy.ir </a>
                <img src="image/worldmap.png" class="map" alt="">
            </div>

        </div>

        <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
            <a href="#" class="fab fa-pinterest"></a>
        </div>

        {{-- <div class="credit"> فارسی و راست چین شده توسط <a href="https://netcopy.ir"><span>نت کپی</span></a> </div> --}}

    </section>

    <!-- footer section ends -->

    <!-- loader  -->

    <div class="loader-container">
        <img src="{{asset('image/loader-img.gif')}}" alt="">
    </div>
















    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <!-- custom js file link  -->
    <script src="{{asset('js/script.js')}}"></script>

</body>

</html>
