	
    @include('components.layouts.dashboard_components.header_dashboard')
    <!--welcome-hero start -->
    <header id="home" class="welcome-hero">

        <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
            <!--/.carousel-indicator -->
             <ol class="carousel-indicators">
                <li data-target="#header-carousel" data-slide-to="0" class="active"><span class="small-circle"></span></li>
                <li data-target="#header-carousel" data-slide-to="1"><span class="small-circle"></span></li>
                <li data-target="#header-carousel" data-slide-to="2"><span class="small-circle"></span></li>
            </ol><!-- /ol-->
            <!--/.carousel-indicator -->

            <!--/.carousel-inner -->
            <div class="carousel-inner" role="listbox">
                <!-- .item -->
                <div class="item active">
                    <div class="single-slide-item slide1">
                        <div class="container">
                            <div class="welcome-hero-content">
                                <div class="row">
                                    <div class="col-sm-7">
                                        <div class="single-welcome-hero">
                                            <div class="welcome-hero-txt">
                                                <h4>NihaGrapicha</h4>
                                                <h2>Desain Undangan Pernikahan</h2>
                                                <p> 
                                                    Ayo ciptakan momen pernikahan yang tak terlupakan dengan undangan istimewa dari NihaGrapicha!. Rayakan Cintamu dengan NihaGrapicha!
                                                    Undangan Elegan, Desain Cantik, Harga Bersahabat
                                                </p>
                                                <button class="btn-cart welcome-add-cart" onclick="window.location.href='#'">
                                                    <span class="lnr lnr-plus-circle"></span>
                                                    Hubungi Kami 
                                                </button>
                                                <button class="btn-cart welcome-add-cart welcome-more-info" onclick="window.location.href='#'">
                                                    more info
                                                </button>
                                            </div><!--/.welcome-hero-txt-->
                                        </div><!--/.single-welcome-hero-->
                                    </div><!--/.col-->
                                    <div class="col-sm-5">
                                        <div class="single-welcome-hero">
                                            <div class="welcome-hero-img">
                                                <img src="assets/images/slider/undangan1.png" alt="slider image">
                                            </div><!--/.welcome-hero-txt-->
                                        </div><!--/.single-welcome-hero-->
                                    </div><!--/.col-->
                                </div><!--/.row-->
                            </div><!--/.welcome-hero-content-->
                        </div><!-- /.container-->
                    </div><!-- /.single-slide-item-->

                </div><!-- /.item .active-->

                <div class="item">
                    <div class="single-slide-item slide2">
                        <div class="container">
                            <div class="welcome-hero-content">
                                <div class="row">
                                    <div class="col-sm-7">
                                        <div class="single-welcome-hero">
                                            <div class="welcome-hero-txt">
                                                <h4>Niha Grapciha</h4>
                                                <h2>Desain Banner Berkualitas</h2>
                                                <p>
                                                    Jangan biarkan bisnis Anda tertinggal! Hubungi NihaGrapicha hari ini untuk mendapatkan banner yang berkualitas dan meningkatkan penjualan Anda!
                                                </p>
                                               
                                                <button class="btn-cart welcome-add-cart" onclick="window.location.href='#'">
                                                    <span class="lnr lnr-plus-circle"></span>
                                                    Hubungi Kami 
                                                </button>
                                                <button class="btn-cart welcome-add-cart welcome-more-info" onclick="window.location.href='#'">
                                                    more info
                                                </button>
                                            </div><!--/.welcome-hero-txt-->
                                        </div><!--/.single-welcome-hero-->
                                    </div><!--/.col-->
                                    <div class="col-sm-5">
                                        <div class="single-welcome-hero">
                                            <div class="welcome-hero-img">
                                                <img src="assets/images/slider/banner02.png" alt="slider image">
                                            </div><!--/.welcome-hero-txt-->
                                        </div><!--/.single-welcome-hero-->
                                    </div><!--/.col-->
                                </div><!--/.row-->
                            </div><!--/.welcome-hero-content-->
                        </div><!-- /.container-->
                    </div><!-- /.single-slide-item-->

                </div><!-- /.item .active-->

                <div class="item">
                    <div class="single-slide-item slide3">
                        <div class="container">
                            <div class="welcome-hero-content">
                                <div class="row">
                                    <div class="col-sm-7">
                                        <div class="single-welcome-hero">
                                            <div class="welcome-hero-txt">
                                                <h4>NihaGrapicha</h4>
                                                <h2>Menyediakan Alat Tulis Kantor</h2>
                                                <p>
                                                        Ciptakan Semangat Berkarya Dengan Alat Tulis Berkualitas Dari Toko NihaGrapicha.
                                                        Wujudkan Kantor Impianmu dengan Alat Tulis Istimewa Lengkapilah Kebutuhan Kantor Anda di Toko NihaGrapicha:
                                                </p>
                                                <button class="btn-cart welcome-add-cart" onclick="window.location.href='#'">
                                                    <span class="lnr lnr-plus-circle"></span>
                                                    Hubungi Kami 
                                                </button>
                                                <button class="btn-cart welcome-add-cart welcome-more-info" onclick="window.location.href='#'">
                                                    more info
                                                </button>
                                            </div><!--/.welcome-hero-txt-->
                                        </div><!--/.single-welcome-hero-->
                                    </div><!--/.col-->
                                    <div class="col-sm-5">
                                        <div class="single-welcome-hero">
                                            <div class="welcome-hero-img">
                                                <img src="{{ asset('assets/images/slider/atk.png')}}" alt="slider image">
                                            </div><!--/.welcome-hero-txt-->
                                        </div><!--/.single-welcome-hero-->
                                    </div><!--/.col-->
                                </div><!--/.row-->
                            </div><!--/.welcome-hero-content-->
                        </div><!-- /.container-->
                    </div><!-- /.single-slide-item-->
                    
                </div><!-- /.item .active-->
            </div><!-- /.carousel-inner-->

        </div><!--/#header-carousel-->

        <!-- top-area Start -->
        <div class="top-area">
            <div class="header-area">
                <!-- Start Navigation -->
                <nav class="navbar navbar-default bootsnav  navbar-sticky navbar-scrollspy"  data-minus-value-desktop="70" data-minus-value-mobile="55" data-speed="1000">

                    <!-- Start Top Search -->
                    <div class="top-search">
                        <div class="container">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-search"></i></span>
                                <input type="text" class="form-control" placeholder="Search">
                                <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
                            </div>
                        </div>
                    </div>
                    <!-- End Top Search -->

                    <div class="container">            
                        <!-- Start Atribute Navigation -->
                       
                        <!-- End Atribute Navigation -->

                        <!-- Start Header Navigation -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                                <i class="fa fa-bars"></i>
                            </button>
                            <a class="navbar-brand" href="index.html">Niha Grapicha</a>

                        </div><!--/.navbar-header-->
                        <!-- End Header Navigation -->

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse menu-ui-design" id="navbar-menu">
                            <ul class="nav navbar-nav navbar-center" data-in="fadeInDown" data-out="fadeOutUp">
                                <li class=""><a href="{{route('index')}}">home</a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Produk <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                    @foreach ($category as $categories)
                                    <li><a href="{{ route('products.show', $categories->category_name) }}">{{ $categories->category_name }}</a></li>
                                    @endforeach
                                    </ul>
                                </li>
                                    <li class="scroll"><a href="#feature">Galeri</a></li>
                                    <li class="scroll"><a href="#newsletter">contact</a></li>
                                </ul><!--/.nav -->
                        </div><!-- /.navbar-collapse -->
                    </div><!--/.container-->
                </nav><!--/nav-->
                <!-- End Navigation -->
            </div><!--/.header-area-->
            <div class="clearfix"></div>

        </div><!-- /.top-area-->
        <!-- top-area End -->

    </header><!--/.welcome-hero-->
    <!--welcome-hero end -->

    
    <!--new-arrivals start -->
    <section id="new-arrivals" class="new-arrivals">
        <div class="container">
            <div class="section-header">
                <h2>Semua Produk</h2>
            </div><!--/.section-header-->
            <div class="new-arrivals-content">
                @foreach($products as $product)
                <div class="row">
                    <div class="col-md-3 col-sm-4">
                        <div class="single-new-arrival">
                            <div class="single-new-arrival-bg">
                                <img src="{{ $product->gambarUrlProduk}}" alt="new-arrivals images">
                                <div class="single-new-arrival-bg-overlay"></div>
                                <div class="new-arrival-cart">
                                    <p>
                                        <span class="lnr lnr-cart"></span>
                                        <a href="#">add <span>to </span> cart</a>
                                    </p>
                                    <p class="arrival-review pull-right">
                                        <span class="lnr lnr-heart"></span>
                                        <span class="lnr lnr-frame-expand"></span>
                                    </p>
                                </div>
                            </div>
                           <h4><a href="#">{{$product->nama}}</a></h4>
                            <p class="arrival-product-price">Rp.{{$product->harga}}</p>
                        </div>
                    </div>
                  @endforeach 
                   
                </div>
            </div>
        </div><!--/.container-->
    
    </section><!--/.new-arrivals-->
    <!--new-arrivals end -->

  

    <!--feature start -->
    <section id="feature" class="feature">
        <div class="container">
            <div class="section-header">
                <h2>Review Produk</h2>
            </div><!--/.section-header-->
            <div class="feature-content">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="single-feature">
                            <div class="rounded-image">
                                <img src="assets/images/slider/afriyana.png" alt="feature image">
                            </div>
                            <div class="single-feature-txt text-center">
                                <p>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <span class="spacial-feature-icon"><i class="fa fa-star"></i></span>
                                    <span class="feature-review">(Baguss)</span>
                                </p>
                                <h3><a href="#">Afriyana</a></h3>
                                <p>Undangan nya murah meriah, kualitasnya sangat bagus hanya di Toko Afif Store</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-sm-3">
                        <div class="single-feature">
                            <div class="rounded-image">
                                <img src="assets/images/slider/fahmi.png" alt="feature image">
                            </div>
                            <div class="single-feature-txt text-center">
                                <p>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <span class="feature-review">(Sangat Baik)</span>
                                </p>
                                <h3><a href="#">Fahmi</a></h3>
                                <p>Banner nya sangat bagus dan bisa desain disini, kualitasnya sangat bagus hanya di Toko Afif Store</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="single-feature">
                            <div class="rounded-image">
                                <img src="assets/images/slider/falih.png" alt="feature image">
                            </div>
                            <div class="single-feature-txt text-center">
                                <p>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <span class="feature-review">(Bagus)</span>
                                </p>
                                <h3><a href="#">Falih</a></h3>
                                <p>Desain disini sangat bagus , sangat oke juga murah meriah, kualitasnya sangat bagus hanya di Toko Afif Store</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="single-feature">
                            <div class="rounded-image">
                                <img src="assets/images/slider/deni.png" alt="feature image">
                            </div>
                            <div class="single-feature-txt text-center">
                                <p>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <span class="feature-review">(Bagus)</span>
                                </p>
                                <h3><a href="#">Deni</a></h3>
                                <p>Respon toko sangat cepat, gantungan kunci nya juga bagus bagus , sangat keren Toko Online Afif Store</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="single-feature">
                            <div class="rounded-image">
                                <img src="assets/images/slider/zahro.png" alt="feature image">
                            </div>
                            <div class="single-feature-txt text-center">
                                <p>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <span class="spacial-feature-icon"><i class="fa fa-star"></i></span>
                                    <span class="feature-review">(Baguss)</span>
                                </p>
                                <h3><a href="#">Zahro</a></h3>
                                <p>Saya bikin banner disini adminnya sangat baik, bisa mengarahkan sesuai minat saya , murah meriah lagi ayo buat bannner di Toko Online Afif Store</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="single-feature">
                            <div class="rounded-image">
                                <img src="assets/images/slider/riyan.png" alt="feature image">
                            </div>
                            <div class="single-feature-txt text-center">
                                <p>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <span class="feature-review">(Bagus)</span>
                                </p>
                                <h3><a href="#">Riyan</a></h3>
                                <p>nice, buat undangan nikah disini murah dan bagus-bagus, banyak pilihannya. Kunjungi Toko Online Afif Store</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="single-feature">
                            <div class="rounded-image">
                                <img src="assets/images/slider/katrina.png" alt="feature image">
                            </div>
                            <div class="single-feature-txt text-center">
                                <p>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <span class="feature-review">(Bagus)</span>
                                </p>
                                <h3><a href="#">Katrina</a></h3>
                                <p>Beli alat kantor dan buku peralatan sekolah disini sangat bisa, bisa diantar juga , sangat keren Toko Online Afif Store</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="single-feature">
                            <div class="rounded-image">
                                <img src="assets/images/slider/lukman.png" alt="feature image">
                            </div>
                            <div class="single-feature-txt text-center">
                                <p>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <span class="feature-review">(Bagus)</span>
                                </p>
                                <h3><a href="#">Lukman</a></h3>
                                <p>Saya membuat undangan dan banner disini harganya murah meriah , kualitasnya bagus dan bisa diantar ke rumah Toko Online Afif sangat bagus</p>
                            </div>
                        </div>
                    </div>
            </div>
            </div>
        </div><!--/.container-->

    </section><!--/.feature-->
    <!--feature end -->

    

    <!-- clients strat -->
    <section id="clients"  class="clients">
        <div class="container">
            <div class="owl-carousel owl-theme" id="client">
                    
                </div><!--/.owl-carousel-->

        </div><!--/.container-->

    </section><!--/.clients-->	
    <!-- clients end -->

    <!--newsletter strat -->
    <section id="newsletter"  class="newsletter">
        <div class="container">
            <div class="hm-footer-details">
                <div class="row">
                    <div class=" col-md-3 col-sm-6 col-xs-12">
                        <div class="hm-footer-widget">
                            <div class="hm-foot-title">
                                <h4>information</h4>
                            </div><!--/.hm-foot-title-->
                            <div class="hm-foot-menu">
                                <ul>
                                    <li><a href="#">about us</a></li><!--/li-->
                                    <li><a href="#">contact us</a></li><!--/li-->
                                    <li><a href="#">news</a></li><!--/li-->
                                    <li><a href="#">store</a></li><!--/li-->
                                </ul><!--/ul-->
                            </div><!--/.hm-foot-menu-->
                        </div><!--/.hm-footer-widget-->
                    </div><!--/.col-->
                    <div class=" col-md-3 col-sm-6 col-xs-12">
                        <div class="hm-footer-widget">
                            <div class="hm-foot-title">
                                <h4>collections</h4>
                            </div><!--/.hm-foot-title-->
                            <div class="hm-foot-menu">
                                <ul>
                                    <li><a href="#">Undangan Pernikahan</a></li><!--/li-->
                                    <li><a href="#">Banner </a></li><!--/li-->
                                    <li><a href="#">Jasa Percetakan</a></li><!--/li-->
                                    <li><a href="#">Gantungan Kunci</a></li><!--/li-->
                                    <li><a href="#">Alat Tulis Dan Lain - Lain</a></li><!--/li-->
                                </ul><!--/ul-->
                            </div><!--/.hm-foot-menu-->
                        </div><!--/.hm-footer-widget-->
                    </div><!--/.col-->
                    <div class=" col-md-3 col-sm-6 col-xs-12">
                        <div class="hm-footer-widget">
                            <div class="hm-foot-title">
                                <h4>my accounts</h4>
                            </div><!--/.hm-foot-title-->
                            <div class="hm-foot-menu">
                                <ul>
                                    <li><a href="#">my account</a></li><!--/li-->
                                    <li><a href="#">wishlist</a></li><!--/li-->
                                    <li><a href="#">Community</a></li><!--/li-->
                                </ul><!--/ul-->
                            </div><!--/.hm-foot-menu-->
                        </div><!--/.hm-footer-widget-->
                    </div><!--/.col-->
                    <div class=" col-md-3 col-sm-6  col-xs-12">
                        <div class="hm-footer-widget">
                            <div class="hm-foot-title">
                                <h4>newsletter</h4>
                            </div><!--/.hm-foot-title-->
                            <div class="hm-foot-para">
                                <p>
                                    Subscribe  to get latest news,update and information.
                                </p>
                            </div><!--/.hm-foot-para-->
                            <div class="hm-foot-email">
                                <div class="foot-email-box">
                                    <input type="text" class="form-control" placeholder="Enter Email Here....">
                                </div><!--/.foot-email-box-->
                                <div class="foot-email-subscribe">
                                    <span><i class="fa fa-location-arrow"></i></span>
                                </div><!--/.foot-email-icon-->
                            </div><!--/.hm-foot-email-->
                        </div><!--/.hm-footer-widget-->
                    </div><!--/.col-->
                </div><!--/.row-->
            </div><!--/.hm-footer-details-->

        </div><!--/.container-->

    </section><!--/newsletter-->	
    <!--newsletter end -->

    <!--footer start-->
    <footer id="footer"  class="footer">
        <div class="container">
            <div class="hm-footer-copyright text-center">
                <div class="footer-social">
                    <a href="#"><i class="fa fa-facebook"></i></a>	
                    <a href="#"><i class="fa fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                    <a href="#"><i class="fa fa-pinterest"></i></a>
                    <a href="#"><i class="fa fa-behance"></i></a>	
                </div>
                <p>
                    &copy;copyright. Team IT NihaGrapicha Turi Lamongan By  <a href="https://www.themesine.com/">Afif Dev</a>
                </p><!--/p-->
            </div><!--/.text-center-->
        </div><!--/.container-->

        <div id="scroll-Top">
            <div class="return-to-top">
                <i class="fa fa-angle-up " id="scroll-top" data-toggle="tooltip" data-placement="top" title="" data-original-title="Back to Top" aria-hidden="true"></i>
            </div>
            
        </div><!--/.scroll-Top-->
        
    </footer><!--/.footer-->
    <!--footer end-->

@include('components.layouts.dashboard_components.footer_dashboard')