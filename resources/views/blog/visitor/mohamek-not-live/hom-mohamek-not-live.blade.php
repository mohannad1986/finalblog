

    @php
    use Illuminate\Support\Str;
@endphp


    <!DOCTYPE html>
    <html lang="ar" dir="rtl">

    <head>
        <!--====== Required meta tags ======-->
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!--====== Title ======-->
        <title>مــحامــيــك</title>
        <!--====== Favicon Icon ======-->

        <link rel="shortcut icon" href="{{ URL::asset('assets/images/blogmoh/logo/icon.png') }}" type="image/x-icon">
        <!--====== Bootstrap css ======-->
        {{-- <link rel="stylesheet" href="assets/css/bootstrap-rtl.min.css"> --}}
        <link href="{{ URL::asset('assets/css/blogmoh/bootstrap-rtl.min.css') }}" rel="stylesheet">

        <!--====== FontAwesoem css ======-->
        {{-- {{ URL::asset('assets/fonts/blogmoh/flaticon/flaticon.css') }} --}}

        <link rel="stylesheet" href="{{ URL::asset('assets/fonts/blogmoh/fontawesome/css/all.min.css') }}">
        <!--====== Flaticon css ======-->
        <link rel="stylesheet" href="{{ URL::asset('assets/fonts/blogmoh/flaticon/flaticon.css') }}">
        <!--====== Magnific Popup css ======-->
        {{-- <link rel="stylesheet" href="assets/css/magnific-popup.css"> --}}
        <link href="{{ URL::asset('assets/css/blogmoh/magnific-popup.css') }}" rel="stylesheet">

        <!--====== Slick css ======-->
        {{-- <link rel="stylesheet" href="assets/css/slick.css"> --}}
        <link href="{{ URL::asset('assets/css/blogmoh/slick.css') }}" rel="stylesheet">

        <!--====== Nice-select css ======-->
        {{-- <link rel="stylesheet" href="assets/css/nice-select.css"> --}}
        <link href="{{ URL::asset('assets/css/blogmoh/nice-select.css') }}" rel="stylesheet">

        <!--====== Animate css ======-->
        {{-- <link rel="stylesheet" href="assets/css/animate.css"> --}}
        <link href="{{ URL::asset('assets/css/blogmoh/animate.css') }}" rel="stylesheet">

        <!--====== Default css ======-->
        {{-- <link rel="stylesheet" href="assets/css/default.css"> --}}
        <link href="{{ URL::asset('assets/css/blogmoh/default.css') }}" rel="stylesheet">

        <!--====== Style css ======-->
        {{-- <link rel="stylesheet" href="assets/css/style.css"> --}}
        <link href="{{ URL::asset('assets/css/blogmoh/style.css') }}" rel="stylesheet">

        {{-- <link href="{{ URL::asset('assets/css/blogmoh/') }}" rel="stylesheet">
        <link href="{{ URL::asset('assets/css/blogmoh/style.css') }}" rel="stylesheet"> --}}

        <link href="{{ URL::asset('assets/css/amsify.suggestags.css') }}" rel="stylesheet">








    </head>

    <body>
        <!--====== Start Preloader ======-->
        <div class="preloader">
            <div class="lds-ellipsis">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
        <!--====== End Preloader ======-->

        <!--====== Search From ======-->
        <div class="modal fade" id="search-modal">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <form action="{{route('mohamek_searchword')}}" method="post">
                        @csrf
                        <div class="form_group">
                            <input type="text" name="keyword" class="form_control" placeholder="إبحث هنا...">
                            <button class="search_btn"><i class="fa fa-search"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div><!--====== Search From ======-->
        <!--====== offcanvas-panel ======-->
        <div class="offcanvas-panel">
            <div class="offcanvas-panel-inner">
                <div class="panel-logo">

                    <a href="index.html"><img src="{{ URL::asset('assets/images/blogmoh/logo/logo-1.png') }}" alt="Qempo"></a>
                </div>
                <div class="about-us">
                    <h5 class="panel-widget-title">من أنا</h5>
                    <p>
                        محامي سعودي ذو خبرة واحترافية عالية في ميدان القانون. ملتزم بتقديم الاستشارات والحلول القانونية
                        الفعالة. نهدف إلى حماية
                        حقوق العملاء وضمان تحقيق العدالة. نقدم خدماتنا بموجب أعلى المعايير المهنية والأخلاقية.
                    </p>
                </div>
                <div class="contact-us">
                    <h5 class="panel-widget-title">إتصل بي</h5>
                    <ul>
                        <li>
                            <i class="fal fa-map-marker-alt"></i>
                            شارع الملك فهد - الرياض - السعودية
                        </li>
                        <li>
                            <i class="fal fa-envelope-open"></i>
                            <a href="mailto:hello@barky.com"> name@domainname.com</a>
                        </li>
                        <li>
                            <i class="fal fa-phone"></i>
                            <a href="tel:(312)-895-9800" dir="ltr">+966123456789</a>
                        </li>
                    </ul>
                </div>
                <a href="#" class="panel-close"><i class="fal fa-times"></i></a>
            </div>
        </div>
        <!--====== offcanvas-panel ======-->
        <!--====== Start Header ======-->
        <header class="header-area-two transparent-header">
            <div class="header-navigation">
                <div class="container-fluid pl-0">
                    <div class="navigation-wrapper">
                        <div class="row m-0">
                            <div class="col-lg-2 col-md-4 col-5">
                                <div class="site-branding">
                                    <a href="index.html" class="brand-logo"><img src="{{ URL::asset('assets/images/blogmoh/logo/logo-2.png') }}"
                                            alt="Lawgne"></a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-2 col-2">
                                <div class="primary-menu">
                                    <div class="nav-menu">
                                        <div class="navbar-close"><i class="far fa-times"></i></div>
                                        <nav class="main-menu">
                                            <ul>
                                                <li class="menu-item"><a href="index.html" class="">الرئيسية</a>

                                                </li>
                                                <li class="menu-item"><a href="about-us.html" class="">من أنا</a>

                                                </li>
                                                <li class="menu-item"><a href="blog-standard.html"
                                                        class="active">المدونة</a>
                                                </li>
                                                <li class="menu-item"><a href="contact.html">إتصل بنا</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-5">
                                <div class="header-right-nav d-flex align-items-center">
                                    <a href="contact.html" class="main-btn arrow-btn">إستشارة مجانية</a>
                                    <ul>
                                        <li><a href="#" class="search-btn" data-toggle="modal"
                                                data-target="#search-modal"><i class="far fa-search"></i></a></li>
                                        <li class="off-nav-btn">
                                            <div class="off-menu">
                                                <span></span>
                                                <span></span>
                                                <span></span>
                                            </div>
                                            <div class="navbar-toggler float-right">
                                                <span></span><span></span><span></span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!--====== End Header ======-->
        <!--====== Start Hero Area ======-->
        <section class="hero-area">
            <div class="breadcrumbs-area bg_cover bg-with-overlay"
                style="background-image: url(assets/images/bg/breadcrumbs-bg.jpg);">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-10">
                            <div class="page-title">
                                <h1 class="title">المدونة</h1>
                                <ul class="breadcrumbs-link">
                                    <li><a href="index.html">الرئيسية</a></li>
                                    <li class="">المدونة</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--====== End Hero Area ======-->
        <!--====== Start Blog Section ======-->
        <section class="blog-area pt-130 pb-90">
            <div class="container">

                <div class="row">


                    <div class="col-lg-8">
                        @foreach ($posts as  $post)
                        <div class="blog-post-item blog-post-item-six mb-30 wow fadeInUp" data-wow-delay=".2s">
                            <div class="post-thumbnail">
                                {{-- <img src="{{Storage::url('images/'.'/'.$post->cover_image.'')}}" alt="صورة المدونة"> --}}
                                <img src="{{Storage::url('images/'.'/'.$post->cover_image.'')}}" alt="صورة المدونة">

                                <a href="blog-details.html" class="arrow">
                                    <i class="far fa-angle-right"></i>
                                </a>
                            </div>
                            <div class="entry-content">
                                <div class="post-admin">
                                    <span><img src=" assets/images/testimonial/thumb-2.jpg" alt="المستخدم"><a href="#">
                                            {{$post->user->name}}</a></span>
                                </div>
                                <h3 class="title"><a class="text-body" href="{{route('getnews',$post->id)}}">
                                    {{$post->title}}</a>
                                </h3>
                                <p>
                                    <?php  $str2 = substr($post->body, 5); ?>
                                    {{str::limit(($str2),200, '...')}}

                                    {{-- {{str::limit(($post->body),200, '...')}} --}}


                                    {{-- {!! str::limit(($post->body),200, '...') !!} --}}

                                </p>
                                <div class="post-meta">
                                    <ul>
                                        <li><span><i class="far fa-calendar-alt"></i><a href="#">25 يناير 2023</a></span>
                                        </li>
                                        <li><span><i class="far fa-comments"></i><a href="#">تعليقات (05)</a></span></li>
                                        <li><span><i class="far fa-share-alt"></i>(03)</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>




                    @endforeach
                    </div>



                    {{-- +++++++++++++++++++++++++++++++ --}}

                    {{-- ++++++++++++++++++++++++++++++++++++++++ --}}



                    <div class="col-lg-4">
                        <div class="sidebar-widget-area">
                            <div class="widget search-widget mb-50 wow fadeInUp">
                                <h4 class="widget-title">البحث هنا</h4>
                                <form>
                                    <div class="form_group">
                                        <input type="email" class="form_control" placeholder="الكلمات الرئيسية" name="email"
                                            required>
                                        <button class="search-btn"><i class="far fa-search"></i></button>
                                    </div>
                                </form>
                            </div>
                            <div class="widget categories-widget mb-45 wow fadeInUp">
                                <h4 class="widget-title">التصنيفات</h4>
                                <ul class="widget-link">
                                    @foreach ($categories as $category)
                                    <li><a href="{{route('mohamek_postcategory',$category->id)}}"> {{$category->name}} <span>(05)</span></a></li>

                                    @endforeach
                                    <li><a href="#">نمط الحياة <span>(05)</span></a></li>
                                    <li><a href="#">السفر <span>(34)</span></a></li>
                                    <li><a href="#">الأزياء <span>(89)</span></a></li>
                                    <li><a href="#">الموسيقى <span>(96)</span></a></li>
                                    <li><a href="#">العلامة التجارية <span>(78)</span></a></li>
                                </ul>
                            </div>
                            <div class="widget recent-post-widget mb-60 wow fadeInUp">
                                <h4 class="widget-title">أحدث الأخبار</h4>
                                <ul class="recent-post-list">
                                    <li class="post-thumbnail-content">
                                        <img src="assets/images/widget/thumb-4.jpg" class="img-fluid" alt="">
                                        <div class="post-title-date">
                                            <h6><a href="blog-details.html">بناء تجربة استيراد جداول سلسة</a></h6>
                                            <span class="posted-on"><i class="far fa-calendar-alt"></i><a href="#">25 مايو
                                                    2023</a></span>
                                        </div>
                                    </li>
                                    <li class="post-thumbnail-content">
                                        <img src="assets/images/blog/blog-5.jpg" class="img-fluid" alt="">
                                        <div class="post-title-date">
                                            <h6><a href="blog-details.html">إنشاء بيئة عمل عبر الإنترنت</a></h6>
                                            <span class="posted-on"><i class="far fa-calendar-alt"></i><a href="#">25 مايو
                                                    2023</a></span>
                                        </div>
                                    </li>
                                    <li class="post-thumbnail-content">
                                        <img src="assets/images/widget/thumb-6.jpg" class="img-fluid" alt="">
                                        <div class="post-title-date">
                                            <h6><a href="blog-details.html">إشارات تشعر بأن موقع الويب أكثر</a></h6>
                                            <span class="posted-on"><i class="far fa-calendar-alt"></i><a href="#">25 مايو
                                                    2023</a></span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="widget banner-widget bg_cover mb-50 wow fadeInUp" data-wow-delay=".5s"
                                style="background-image: url(assets/images/widget/banner-1.jpg);">
                                <div class="banner-content">
                                    <span class="span">احصل على عرض</span>
                                    <h3>جاهز للحصول على استشارة مجانية للحالات</h3>
                                    <a href="contact.html" class="main-btn">احصل على العرض</a>
                                </div>
                            </div>
                            <div class="widget tag-cloud-widget mb-50 wow fadeInUp">
                                <h4 class="widget-title">العلامات الشعبية</h4>
                                <a href="#">محامٍ</a>
                                <a href="#">أعمال</a>
                                <a href="#">محامٍ</a>
                                <a href="#">استشارة</a>
                                <a href="#">مزارع قانونية</a>
                                <a href="#">مزارع</a>
                                <a href="#">إدارة</a>
                                <a href="#">تخطيط</a>
                            </div>
                        </div>
                    </div>



                </div>

            </div>
        </section><!--====== End Blog Section ======-->

        <!--====== بداية قسم التذييل ======-->
        <footer class="footer-area">
            <div class="footer-wrapper-one bg_cover pb-30" style="background-image: url(assets/images/bg/footer-bg-1.jpg);">
                <div class="container">
                    <div class="footer-newsletter wow fadeInUp">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="section-title section-title-left section-title-white">
                                    <span class="sub-title">ابق على تواصل</span>
                                    <h2>اشترك في النشرة الإخبارية</h2>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="newsletter-form">
                                    <form>
                                        <div class="row">
                                            <div class="col-md-7">
                                                <div class="form-group">
                                                    <input type="email" class="form_control"
                                                        placeholder="أدخل عنوان البريد الإلكتروني" name="email" required>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="form_group">
                                                    <button class="main-btn">اشترك الآن</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="footer-widget pt-80 pb-20">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="widget about-widget mb-55 wow fadeInUp" data-wow-delay=".2s">
                                    <div class="footer-logo">
                                        <a href="index.html"><img src="assets/images/logo/logo-2.png" alt="الشعار"></a>
                                    </div>
                                    <p>تُعتبر شركتنا من بين أبرز الشركات في المجال، حيث نسعى دائمًا لتقديم أفضل الخدمات
                                        لعملائنا.</p>
                                    <div class="share">
                                        <h4>تابعنا</h4>
                                        <ul class="social-link">
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fab fa-behance"></i></a></li>
                                            <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="widget footer-nav-widget mb-55 wow fadeInUp" data-wow-delay=".3s">
                                    <h4 class="widget-title">القضايا الشهيرة</h4>
                                    <ul class="widget-link">
                                        <li><a href="practice-details.html">العنف الأسري</a></li>
                                        <li><a href="practice-details.html">القانون التجاري</a></li>
                                        <li><a href="practice-details.html">اتفاقيات قبل الزواج</a></li>
                                        <li><a href="practice-details.html">تسويات المحكمة</a></li>
                                        <li><a href="practice-details.html">قانون حوادث السيارات</a></li>
                                        <li><a href="practice-details.html">الإصابات الشخصية</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="widget recent-post-widget mb-55 wow fadeInUp" data-wow-delay=".4s">
                                    <h4 class="widget-title">آخر الأخبار</h4>
                                    <ul class="post-widget-list">
                                        <li class="post-thumbnail-content">
                                            <img src="{{URL::asset('assets/images/blogmoh/blog/blog-4.jpg')}}" class="img-fluid" alt="">
                                            <div class="post-title-date">
                                                <h6><a href="blog-details.html">استيراد البيانات بسلاسة</a></h6>
                                                <span class="posted-on"><i class="far fa-calendar-alt"></i><a href="#">25
                                                        مايو 2023</a></span>
                                            </div>
                                        </li>
                                        <li class="post-thumbnail-content">
                                            <img src="{{URL::asset('assets/images/blogmoh/blog/blog-6.jpg')}}" class="img-fluid" alt="">
                                            <div class="post-title-date">
                                                <h6><a href="blog-details.html">العمل في بيئة رقمية</a></h6>
                                                <span class="posted-on"><i class="far fa-calendar-alt"></i><a href="#">25
                                                        مايو 2023</a></span>
                                            </div>
                                        </li>
                                        <li class="post-thumbnail-content">
                                            <img src="{{URL::asset('assets/images/blogmoh/blog/blog-5.jpg')}}" class="img-fluid" alt="">
                                            <div class="post-title-date">
                                                <h6><a href="blog-details.html">تحسين تجربة الموقع</a></h6>
                                                <span class="posted-on"><i class="far fa-calendar-alt"></i><a href="#">25
                                                        مايو 2023</a></span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="widget contact-info-widget mb-55 wow fadeInUp" data-wow-delay=".5s">
                                    <h4 class="widget-title">تواصل معنا</h4>
                                    <div class="info-widget-content mb-10">
                                        <p><i class="fal fa-phone"></i><a href="tel:+01234556998"
                                                dir="ltr">+966128967459</a>
                                        </p>
                                        <p><i class="fal fa-envelope"></i><a
                                                href="mailto:support@gmail.com">name@gmail.com</a>
                                        </p>
                                        <p><i class="fal fa-map-marker-alt"></i>شارع الملك فهد - الرياض - السعودية</p>
                                    </div>
                                    <div class="info-widget-content">
                                        <h4>ساعات العمل</h4>
                                        <p><i class="fal fa-clock"></i>الأحد - الجمعة <br class="mt-2"> 09 صباحًا - 08 مساءً
                                        </p>
                                        <h5>السبت مغلق</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="footer-copyright">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="copyright-text text-center">
                                    <p>تم التطوير بواسطة هشام كرمان -&nbsp;<a
                                            href="https://maizny.com"><span>ميزني</span></a>
                                        جميع الحقوق
                                        محفوظة © 2023</p>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>


        </footer>
        <!--====== نهاية قسم التذييل ======-->
        <!--====== back-to-top ======-->
        <a href="#" class="back-to-top"><i class="fas fa-angle-up"></i></a>
        <!--====== Jquery js ======-->

    {{-- {{ URL::asset('assets/js/blogmoh/vendor/jquery-3.6.0.min.js') }} --}}

   {{-- +++++++++++++++++ --}}

   {{-- +++++++++++++++ --}}

     {{-- <script src="assets/js/vendor/jquery-3.6.0.min.js"></script> --}}
     <script src="{{ URL::asset('assets/js/blogmoh/vendor/jquery-3.6.0.min.js') }}"></script>

     <!--====== Popper js ======-->
     {{-- <script src="assets/js/popper.min.js"></script> --}}

     <script src="{{ URL::asset('assets/js/blogmoh/popper.min.js') }}"></script>


     <!--====== Bootstrap js ======-->
     <script src="{{ URL::asset('assets/js/blogmoh/bootstrap.min.js') }}"></script>


     <!--====== Slick js ======-->
     <script src="{{ URL::asset('assets/js/blogmoh/slick.min.js') }}"></script>


     <!--====== Magnific Popup js ======-->
     <script src="{{ URL::asset('assets/js/blogmoh/jquery.magnific-popup.min.js') }}"></script>

     <!--====== Isotope js ======-->
     <!--====== Imagesloaded js ======-->
     <script src="{{ URL::asset('assets/js/blogmoh/isotope.pkgd.min.js') }}"></script>
     <!--====== Nice-select js ======-->
     <script src="{{ URL::asset('assets/js/blogmoh/imagesloaded.pkgd.min.js') }}"></script>
     <!--====== counterup js ======-->
     <script src="{{ URL::asset('assets/js/blogmoh/jquery.counterup.min.js') }}"></script>
     <!--====== waypoints js ======-->
     <script src="{{ URL::asset('assets/js/blogmoh/jquery.waypoints.js') }}"></script>

     <script src="{{ URL::asset('assets/js/blogmoh/jquery.nice-select.min.js') }}"></script>

     <!--====== Wow js ======-->
     <script src="{{ URL::asset('assets/js/blogmoh/wow.min.js') }}"></script>
     <!--====== Main js ======-->
     <script src="{{ URL::asset('assets/js/blogmoh/main.js') }}"></script>

     <script src="{{ URL::asset('assets/js/jquery.amsify.suggestags.js') }}"></script>






    </body>

    </html>





