	
    @include('components.layouts.dashboard_components.header_dashboard')
    <!--welcome-hero start -->
    <header id="home" class="welcome-hero">
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

                        <!-- Start Header Navigation -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                                <i class="fa fa-bars"></i>
                            </button>
                            <a class="navbar-brand" href="">Niha Grapicha</a>

                        </div><!--/.navbar-header-->
                        <!-- End Header Navigation -->

                     <!-- Collect the nav links, forms, and other content for toggling -->
                     <div class="collapse navbar-collapse menu-ui-design" id="navbar-menu">
                        <ul class="nav navbar-nav navbar-center" data-in="fadeInDown" data-out="fadeOutUp">
                            <li class=""><a href="{{route('index')}}">home</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Produk <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    @foreach ($categories as $category)
                                    <li><a href="{{ route('products.show', $category->category_name) }}">{{ $category->category_name }}</a></li>
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

  
    <br>
 
    <!--new-arrivals start -->
    <section id="new-arrivals" class="new-arrivals">
       <div class="container px-4 px-lg-5 my-5">
        <br>
        <br>
        <br>
           <div class="row gx-4 gx-lg-5 align-items-center">
              <div class="col-md-6"><img class="" src="{{asset($products->gambarUrlProduk)}}" alt="..." width="500" height="400"/></div>
                  <div class="col-md-6 ">
                    <br>
                         <h1 class="display-5 fw-bolder">{{ $products->nama}} </h1>
                               <p class="lead">{{$products->deskripsi}}</p>    
                               <div class="container">
                                <div class="row">
                                  <div class="button-container justify">
                                     {{-- <a href="{{route('whatsapp', $products->id)}}" class="btn button-beli" type="button">Beli</a> --}}
                                     {{-- <button><a class="btn btn-primary" href="{{route('whatsapp', $products->id)}}" role="button">Beli</a></button> --}}
                                    {{-- <button class="btn button-beli" type="button">Beli<a href="{{route('whatsapp', $products->id)}}"></a></button> --}}
                                    {{-- <button type="button" class="btn btn-primary" href="{{route('whatsapp', $products->id)}}">Primary</button> --}}
                                    {{-- <a href="{{route('whatsapp', $products->id)}}" class="btn btn-primary btn-lg" role="button" aria-disabled="true" style="outline: none; box-shadow: none;">Beli</a> --}}
                                    
                                    <div class="row">
                                        <div class="col-md-1">
                                            <form method="GET" action="{{ route('whatsapp', $products->id) }}">
                                                @csrf
                                                <button type="submit" class="btn btn-primary btn-lg">Beli</button>
                                            </form>
                                        </div>
                                     
                                            <button class="btn button-price" type="button">Rp.{{ $products->harga}}</button>
                                      
                                    </div>
                                    
                                  </div>
                                </div>
                              </div>
                            </div>
                        </div>
                    </section><!--/.new-arrivals-->
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