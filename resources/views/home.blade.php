<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>quiq</title>
    <link rel="stylesheet" href="{{ asset('css/home.css')}} ">
    <link rel="stylesheet" href="{{ asset('assets/fontawesome/css/all.min.css')}} ">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark" style=" background-color: #fff !important;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img class="logo horizontal-logo" src="{{ asset('assets/quiq.png') }}" alt="quiq logo" width="20%">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">الرئيسية</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">من نحن</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">خدماتنا</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">تواصل معنا</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <img src="{{ asset('assets/home1.png') }}" alt="" srcset="" class="images">
            </div>
            <div class="col-md-5 center">
                <h1 class="text">ابدأ الان دروسك الافتراضية</h1>
                <a href="/authentication" class="registerBtn center">تسجيل حساب</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-5 center">
                <h1 class="text-right"> ؟ quiq ما هي </h1>
                <p class="ar">هي منصة مخصصة لكل الراغبين بالتعلم الافتراضي و عقد الاجتماعات بطريقة سهلة وبسيطة بغض النظر عن مواصفات الجهاز المتوفر لديك كما نقدم العديد من خدمات الصف الافتراضي وحلول الأعمال والشركات وطرق تواصل فورية للأفراد عن بعد</p>
                <a href="/authentication" class="registerBtn" >تسجيل حساب</a>

            </div>
            <div class="col-md-7">
                <img src="{{ asset('assets/home2.png') }}" alt="" srcset="" class="images pos">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h2 class="text">؟ quiq ماذا تقدم لك </h2>
            </div>
            <div class="col-md-4 center">
                <img src="{{ asset('assets/training.png') }}" alt="training" srcset="" width=40%>
                <h3 class="service">صفوف افتراضية متكاملة</h3>
            </div>
            <div class="col-md-4 center">
                <img src="{{ asset('assets/information.png') }}" alt="training" srcset="" width=40%>
                <h3 class="service">أدوات تفاعلية مميزة</h3>
            </div>
            <div class="col-md-4 center">
                <img src="{{ asset('assets/computer.png') }}" alt="training" srcset="" width=40%>
                <h3 class="service">دعم مستمر 24/7</h3>
            </div>
            <div class="col-md-12 center"> <a href="/authentication" class="registerBtn" >احصل على فترتك التجريبية مجانا</a>
            </div>
        </div>

        <section>
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text">quiq خدماتنا في </h2>
                </div>
                <div class="col-md-6 center">
                    <img src="{{ asset('assets/exam.png') }}" alt="exam" srcset="" width=20%>
                    <h3 class="service"> حلول متخصصة بالصف الافتراضي </h3>
                </div>
                <div class="col-md-6 center">
                    <img src="{{ asset('assets/share.png') }}" alt="share" srcset="" width=20%>
                    <h3 class="service"> مشاركة الشاشة والصوت وجميع أنواع الملفات </h3>
                </div>
                <div class="col-md-6 center">
                    <img src="{{ asset('assets/voice-recorder.png') }}" alt="share" srcset="" width=20%>
                    <h3 class="service"> تسجيل الجلسة بدقة عالية و حجم مناسب </h3>
                </div>
                <div class="col-md-6 center">
                    <img src="{{ asset('assets/computer1.png') }}" alt="share" srcset="" width=20%>
                    <h3 class="service">مشاركة الطلاب في الدرس عبر الية تفاعلية مميزة </h3>
                </div>
                <div class="col-md-6 center">
                    <img src="{{ asset('assets/elearning.png') }}" alt="share" srcset="" width=20%>
                    <h3 class="service">التحكم الكامل لمدير الجلسة </h3>
                </div>
                <div class="col-md-6 center">
                    <img src="{{ asset('assets/online-learning.png') }}" alt="share" srcset="" width=20%>
                    <h3 class="service">اللوح الافتراضي للشرح مباشرة للطلاب </h3>
                </div>
            </div>
        </section>
        <div class="row">
            <div class="col-md-5 center">
                <h1 class="text">تابع طلابك أينما كانوا</h1>
                <a href="/authentication" class="registerBtn center">ابدأ الان</a>
            </div>
            <div class="col-md-7">
                <img src="{{ asset('assets/home3.png') }}" alt="" srcset="" class="images pos">
            </div>
        </div>
    </div>
    <div class="row background1">
        <div class="col-md-7">
            <img src="{{ asset('assets/main.png') }}" alt="" srcset="" class="image">
        </div>
        <div class="col-md-5 res">
            <h3 class="text" style="color: #fff;">اراء عملائنا</h3>
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner" style="text-align: center; ">
                    <div class="carousel-item active">
                        <p style="color: #fff;">
                            لقد وجدت في كويك المنصة الأمثل لإعطاء جميع دروسي ببساطة وفاعلية</p>
                    </div>
                    <div class="carousel-item">
                        <h2 style="color: #fff;">css</h2>
                    </div>
                    <div class="carousel-item">
                        <h2 style="color: #fff;">مرحبا</h2>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>


    </div>

    <div class="footer-dark" style="margin-top:200px">
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-3 item">
                        <h3>حول</h3>
                        <ul>
                            <li><a href="#">خدماتنا</a></li>
                            <li><a href="#">من نحن</a></li>
                            <li><a href="#">تواصل معنا</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-3 item">
                        <h3>سياساتنا</h3>
                        <ul>
                            <li><a href="#">شروط الاستخدام</a></li>
                            <li><a href="#">سياسة الخصوصية</a></li>
                            <li><a href="#">الدعم</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 item ">
                        <div class="row">
                            <div class="col-md-12">
                                <img src="{{ asset('assets/quiq.png') }}" alt="" srcset="" width=40% style="float: right;">
                            </div>
                        </div>
                        <h3 style="text-align: right;line-height: 3.2rem;"> منصة متخصصة للصفوف الافتراضية وخدمات </br> المؤتمرات والتعليم التفاعلي الأسرع في سورية </h3>

                    </div>
                    <div class="col item social"><a href="#"><i class="fas fa-facebook"></i></a><a href="#"><i class="fas fa-twitter"></i></a><a href="#"><i class="fas fa-linkedin-square"></i></a><a href="#"><i class="fas fa-instagram-square"></i></a></div>
                </div>
                <p class="copyright">quiq© 2020</p>
            </div>
        </footer>
    </div>

    <script src="{{ asset('assets/fontawesome/js/all.min.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script>
        const $dropdown = $(".dropdown");
        const $dropdownToggle = $(".dropdown-toggle");
        const $dropdownMenu = $(".dropdown-menu");
        const showClass = "show";

        $(window).on("load resize", function() {
            if (this.matchMedia("(min-width: 768px)").matches) {
                $dropdown.hover(
                    function() {
                        const $this = $(this);
                        $this.addClass(showClass);
                        $this.find($dropdownToggle).attr("aria-expanded", "true");
                        $this.find($dropdownMenu).addClass(showClass);
                    },
                    function() {
                        const $this = $(this);
                        $this.removeClass(showClass);
                        $this.find($dropdownToggle).attr("aria-expanded", "false");
                        $this.find($dropdownMenu).removeClass(showClass);
                    }
                );
            } else {
                $dropdown.off("mouseenter mouseleave");
            }
        });
        $(document).ready(function() {
            $('.customer-logos').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 1500,
                arrows: false,
                dots: false,
                pauseOnHover: false,
                responsive: [{
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 4
                    }
                }, {
                    breakpoint: 520,
                    settings: {
                        slidesToShow: 3
                    }
                }]
            });
        });
    </script>
</body>

</html>