{{--<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body>
        <div class="font-sans antialiased text-gray-900">
            {{ $slot }}
        </div>
    </body>
</html>--}}
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- xxx Basics xxx -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
        <!-- xxx Change With Your Information xxx -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no" />
        <title>DrogueriasViva - Droguerias especializadas en la salud y el cuidado de tu familia</title>
        <meta name="author" content="Solution Integral Tech">
        <meta name="description"
            content="Droguerias especializadas en la salud y el cuidado de tu familia.">
        <meta name="keywords"
            content="Drogueria, Medicamentos, Salud, Ofertas, Tu Belleza, Tu Salud, Tu Bebe, Cuidado Personal, Tienda, Minimarket">

        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('images/favicon.ico')}}">

        <!-- Main Style CSSS -->
        <link href="{{asset('css/theme-plugins.min.css')}}" rel="stylesheet">
        <!-- Main Theme CSS -->
        <link href="{{asset('css/style.css')}}" rel="stylesheet">
        <!-- Responsive Theme CSS -->
        <link href="{{asset('css/responsive.css')}}" rel="stylesheet">

        <!-- REVOLUTION NAVIGATION STYLES -->
        <link rel="stylesheet" type="text/css" href="{{asset('revolution/css/layers.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('revolution/css/navigation.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('revolution/css/settings.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('revolution/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('revolution/fonts/font-awesome/css/font-awesome.css')}}">
            
        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    </head>

    <body>

        <!-- Page loader Start -->
        <div id="pageloader">
            <div class="loader-item">
                <div class="loader-item-content">
                    <!-- <i class="icofont-paw"></i> -->
                    <img src="{{asset('images/logotipo.png')}}" alt="Logo DrogueriasViva"/>
                </div>
            </div>
        </div>
        <!-- Page loader End -->

        <b class="screen-overlay"></b>

        <header class="home-shop">
            <div class="shop-top-bar">
                <i data-feather="tag"></i> Sigue nuestras redes sociales y no te pierdas ninguna de nuestras promociones!
            </div>
            <div class="container">
                <div class="home-shop-header">
                    <div>
                        <a class="navbar-brand rounded-bottom light-bg" href="{{route('index')}}">
                            <img src="{{asset('images/logo.png')}}" alt="">
                        </a>
                    </div>
                    <div class="header-option">
                        <a class="ml-auto nav-link" href="#" id="search_home"><i data-feather="search"></i></a>
                        <a class="nav-link" href="#" id="shopping-bag" data-trigger="#card_mobile">
                            <i data-feather="shopping-bag"></i> <span class="badge badge-success">0</span>
                        </a>
                        @if (Route::has('login'))
                            @auth
                                @if(Auth::user()->utype === 'ADM')
                                    <a href="{{route('admin.dashboard')}}" class="ml-4 btn-theme bg-blue btn-shadow d-none d-sm-block text-capitalize">Administración</a>
                                @else
                                    <a href="{{route('user.dashboard')}}" class="ml-4 btn-theme bg-green btn-shadow d-none d-sm-block text-capitalize">Mi Cuenta</a>
                                @endif
                            @else
                                <a href="{{route('login')}}" class="ml-4 btn-theme bg-blue btn-shadow d-none d-sm-block text-capitalize">Ingresar</a>
                                <a href="{{route('register')}}" class="ml-4 btn-theme bg-green btn-shadow d-none d-sm-block text-capitalize">Registrate</a>
                            @endif
                        @endif

                        <!-- Toggle Button Start -->
                        <button class="navbar-toggler x collapsed" type="button" data-toggle="collapse"
                            data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                </div>            
            </div>
            <!-- Main Navigation Start -->
            <nav class="navbar navbar-expand-lg nav-light nav-oval header-fullpage">
                <div class="container">
                    <div class="collapse navbar-collapse" id="navbarCollapse" data-hover="dropdown"
                        data-animations="slideInUp slideInUp slideInUp slideInUp">
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle-mob" href="index.html" id="dropdown03"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Inicio <i
                                        class="icofont-thin-down"></i></a>
                                <ul class="dropdown-menu" aria-labelledby="dropdown03">
                                    <li><a class="dropdown-item" href="index.html">Home Main</a></li>
                                    <li><a class="dropdown-item" href="home-shop.html">Home Shop</a></li>
                                    <li><a class="dropdown-item" href="home-vet.html">Home Vet</a></li>
                                    <li><a class="dropdown-item" href="home-intro.html">Home Intro</a></li>
                                    <li><a class="dropdown-item" href="home-classic.html">Home Classic</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown megamenu">
                                <a href="#" class="nav-link dropdown-toggle-mob" id="dropdown04"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tu Belleza <i class="icofont-thin-down"></i></a>
                                <div class="menu-back-div dropdown-menu megamenu-content" role="menu" aria-labelledby="dropdown04">
                                    <div class="megamenu-content-wrap">
                                        <ul class="list-unstyled">
                                            <li><a class="dropdown-item" href="about.html">About Us</a></li>
                                            <li><a class="dropdown-item" href="our-team.html">Our Team</a></li>
                                            <li><a class="dropdown-item" href="team-single.html">Team Single</a></li>                                        
                                            <li><a class="dropdown-item" href="our-faqs.html">Our Faq's</a></li>
                                            <li><a class="dropdown-item" href="404.html">Error 404</a></li>
                                        </ul>
                                        <ul class="list-unstyled">
                                            <li><a class="dropdown-item" href="our-services.html">Services</a></li>
                                            <li><a class="dropdown-item" href="services-single.html">Services Single</a></li>                                        
                                            <li><a class="dropdown-item" href="shortcodes-element.html">Elements Page 1</a></li>
                                            <li><a class="dropdown-item" href="shortcodes-element-alt.html">Elements Page 2</a></li>
                                            <li><a class="dropdown-item" href="typography.html">Typography</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle-mob" href="index.html" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Cuidado De Tu Bebe <i class="icofont-thin-down"></i></a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="gallery-2-col.html">Galley 2 Col</a></li>
                                    <li><a class="dropdown-item" href="gallery-3-col.html">Galley 3 Col</a></li>
                                    <li><a class="dropdown-item" href="gallery-4-col.html">Galley 4 Col</a></li>
                                    <li><a class="dropdown-item" href="gallery-single.html">Galley Single</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle-mob" href="index.html" id="blog-menu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tu Cuidado Personal <i class="icofont-thin-down"></i></a>

                                <ul class="dropdown-menu" aria-labelledby="blog-menu">
                                    <li><a class="dropdown-item" href="blog-classic.html">Blog Classic</a></li>
                                    <li><a class="dropdown-item" href="blog-modern.html">Blog Modern</a></li>
                                    <li><a class="dropdown-item" href="blog-grid.html">Blog Grid</a></li>
                                    <li><a class="dropdown-item" href="blog-single.html">Blog Single</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle-mob" href="index.html" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">Tu Salud<i class="icofont-thin-down"></i></a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="shop-sidebar.html">Shop Sidebar</a></li>
                                    <li><a class="dropdown-item" href="shop-wide.html">Shop Wide</a></li>
                                    <li><a class="dropdown-item" href="shop-single.html">Shop Single</a></li>
                                    <li><a class="dropdown-item" href="shop-cart.html">Shopping Cart</a></li>
                                    <li><a class="dropdown-item" href="shop-checkout.html">Checkout</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact-us.html">Tu Tienda</a>
                            </li>

                        </ul>
                        <div class="ml-auto navbar-nav sitenav-right">
                            <a class="nav-link" href="#"><i data-feather="facebook"></i></a>                        
                            <a class="nav-link" href="#"><i data-feather="twitter"></i></a>                        
                            <a class="nav-link" href="#"><i data-feather="instagram"></i></a>
                        </div>
                        <!-- Main Navigation End -->
                    </div>
                </div>
            </nav>        
            <!-- Main Navigation End -->
        </header>

        <article class="card mobile-offcanvas offcanvas-right" id="card_mobile">
            <div class="shop-sidebar">
                <div class="offcanvas-header">  
                    <button class="btn btn-close"> <i data-feather="x-circle"></i> </button>
                </div>
                <h3 class="head">My Cart</h3>
                <ul class="list-unstyled">
                    <li>
                        <img src="{{asset('images/shop/sidebar_shop_1.jpg')}}" alt="">
                        <div>
                            <h4><a href="shop-single.html">Lounger Dog Bed</a></h4>
                            <h6>$85</h6>
                        </div>
                        <div class="delete-btn">
                            <a href="#"><i class="icofont-close-line"></i></a>
                        </div>
                    </li>
                    <li>
                        <img src="{{asset('images/shop/sidebar_shop_2.jpg')}}" alt="">
                        <div>
                            <h4><a href="shop-single.html">Sara's Doggie Treat</a></h4>
                            <h6>$45</h6>
                        </div>
                        <div class="delete-btn">
                            <a href="#"><i class="icofont-close-line"></i></a>
                        </div>
                    </li>
                </ul>
                <div class="sidebar-subtotal">
                    <span>Subtotal</span> 
                    <strong>$130</strong>
                </div>
                <div class="btn-holder">
                    <div class="col">
                        <a href="shop-cart.html" class="btn-theme bordered bg-navy-blue btn-sm btn-block">View Cart</a>
                    </div>
                    <div class="col">
                        <a href="shop-checkout.html" class="btn-theme bg-orange btn-shadow btn-sm btn-block">Checkout</a>
                    </div>
                </div>
            </div>
        </article>

        {{$slot}}

        <!-- Main Footer Start -->
        <div class="container footer-top-callout">
            <div class="row">
                <!-- Callout Section Side Image -->
                <div class="col-sm-12">
                    <div class="callout-style-side-img d-lg-flex align-items-center">
                        <div class="img-callout">
                            <img src="{{asset('images/callout_side_img.jpg')}}" alt="">
                        </div>
                        <div class="text-callout">
                            <div class="d-md-flex align-items-center">
                                <div class="icon">
                                    <i data-feather="headphones"></i>
                                </div>
                                <div class="heading">
                                    <h3>Have Questions? Call Us <span class="txt-green">+1 (800) 123 456 789</span>
                                    </h3>
                                    <div>In aliquet magna nec lobortis maximus. Etiam rhoncus leo a dolor placerat,
                                        nec elementum ipsum convall.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Callout Section Side Image -->
            </div>
        </div>

        <footer class="pb-0 wide-tb-150 bg-navy-blue">
            <div class="container">
                <div class="pt-0 row wide-tb-50 align-items-center">
                    <div class="mb-0 col-md-6">
                        <div class="logo-footer">
                            <img src="{{asset('images/logo_white.png')}}" alt="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="social-icons d-flex justify-content-md-end align-items-center">
                            We are social
                            <ul class="list-unstyled list-group list-group-horizontal">
                                <li><a href="#"><i data-feather="twitter"></i></a></li>
                                <li><a href="#"><i data-feather="facebook"></i></a></li>
                                <li><a href="#"><i data-feather="instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- Column First -->
                    <div class="mr-auto col-lg-4 col-md-6">
                        <h3 class="footer-heading">About PetHund</h3>
                        <p>Simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
                            standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                            scrambled it to make a type specimen book.</p>
                    </div>
                    <!-- Column First -->

                    <!-- Column Second -->
                    <div class="col-lg-2 col-md-6">
                        <h3 class="footer-heading">Explore</h3>
                        <div class="footer-widget-menu">
                            <ul class="list-unstyled">
                                <li><a href="about.html"><i class="icofont-simple-right"></i> <span>About Us</span></a></li>
                                <li><a href="our-services.html"><i class="icofont-simple-right"></i> <span>Services</span></a></li>
                                <li><a href="our-team.html"><i class="icofont-simple-right"></i> <span>Our Team</span></a></li>
                                <li><a href="javascript:"><i class="icofont-simple-right"></i> <span>Adopt Pet</span></a></li>
                                <li><a href="gallery-4-col.html"><i class="icofont-simple-right"></i> <span>Gallery</span></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Column Second -->

                    <!-- Column Third -->
                    <div class="col-lg-2 col-md-6">
                        <h3 class="footer-heading">Useful links</h3>
                        <div class="footer-widget-menu">
                            <ul class="list-unstyled">
                                <li><a href="our-faqs.html"><i class="icofont-simple-right"></i> <span>FAQs</span></a></li>
                                <li><a href="javascript:"><i class="icofont-simple-right"></i> <span>Help</span></a></li>
                                <li><a href="javascript:"><i class="icofont-simple-right"></i> <span>Privacy Policy</span></a></li>
                                <li><a href="javascript:"><i class="icofont-simple-right"></i> <span>Terms of Use</span></a></li>
                                <li><a href="javascript:"><i class="icofont-simple-right"></i> <span>Site Map</span></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Column Third -->

                    <!-- Column Fourth -->
                    <div class="ml-auto col-lg-3 col-md-6">
                        <h3 class="footer-heading">Working Hours</h3>
                        <p>Our support available to help you 24 hours a day. We provide our best.</p>

                        <div class="working-hours">
                            <ul class="list-unstyled">
                                <li>
                                    <span class="txt-green">Mon – Fri :</span>
                                    <span class="underline">08.00 am – 20.00 PM</span>
                                </li>
                                <li>
                                    <span class="txt-green">Saturday :</span>
                                    <span class="underline">09.00 am – 20.00 PM</span>
                                </li>
                                <li>
                                    <span class="txt-green">Sunday :</span>
                                    <span class="underline">We Are Closed</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Column Fourth -->
                </div>
            </div>

            <div class="copyright-wrap">
                <div class="container pos-rel">
                    <div class="copyright-text">
                        <div>Copyrights {{date("Y")}} <span class="txt-green">Droguerias Viva</span> Todos los derechos reservados.</div>
                        <div>Diseñado por <a href="#" rel="nofollow">Solution Integral Tech</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Main Footer End -->

        <!-- Search Popup Start -->
        <div class="overlay overlay-hugeinc">
            <form class="mt-2 form-inline mt-md-0">
                <div class="form-inner">
                    <div class="form-inner-div d-inline-flex align-items-center no-gutters">
                        <div class="col-md-1">
                            <i class="icofont-search"></i>
                        </div>
                        <div class="col-10">
                            <input class="p-0 form-control w-100" type="text" placeholder="Search" aria-label="Search">
                        </div>
                        <div class="col-md-1">
                            <a href="#" class="overlay-close link-oragne"><i class="icofont-close-line"></i></a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <!-- Search Popup End -->

        <!-- Back To Top Start -->
        <a id="mkdf-back-to-top" href="#" class="off"><i class="icofont-rounded-up"></i></a>
        <!-- Back To Top End -->

        <!-- Jquery Library JS -->
        <script src="{{asset('js/jquery.min.js')}}"></script>
        <script src="{{asset('js/theme-plugins.min.js')}}"></script>    
        <!-- Theme Custom FIle -->
        <script src="{{asset('js/site-custom.js')}}"></script>

        <!-- REVOLUTION JS FILES -->
        <script type="text/javascript" src="{{asset('revolution/js/jquery.themepunch.tools.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('revolution/js/jquery.themepunch.revolution.min.js')}}"></script>

        <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->	
        <script type="text/javascript" src="{{asset('revolution/js/extensions/revolution.extension.actions.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('revolution/js/extensions/revolution.extension.carousel.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('revolution/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('revolution/js/extensions/revolution.extension.migration.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('revolution/js/extensions/revolution.extension.parallax.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('revolution/js/extensions/revolution.extension.video.min.js')}}"></script>

        <script type="text/javascript">
            
            var tpj=jQuery;
            var revapi26;
            tpj(document).ready(function() {
                if(tpj("#rev_slider_26_1").revolution == undefined){
                    revslider_showDoubleJqueryError("#rev_slider_26_1");
                }else{
                    revapi26 = tpj("#rev_slider_26_1").show().revolution({
                        sliderType:"standard",
                        jsFileLocation:"revolution/js/",
                        sliderLayout:"auto",
                        dottedOverlay:"black",
                        delay:9000,
                        navigation: {
                            keyboardNavigation:"off",
                            keyboard_direction: "horizontal",
                            mouseScrollNavigation:"off",
                            mouseScrollReverse:"default",
                            onHoverStop:"off",
                            touch:{
                                touchenabled:"on",
                                touchOnDesktop:"off",
                                swipe_threshold: 75,
                                swipe_min_touches: 1,
                                swipe_direction: "horizontal",
                                drag_block_vertical: false
                            }
                            ,
                            arrows: {
                                style:"metis",
                                enable:true,
                                hide_onmobile:true,
                                hide_under:778,
                                hide_onleave:false,
                                tmp:'',
                                left: {
                                    h_align:"left",
                                    v_align:"center",
                                    h_offset:15,
                                    v_offset:0
                                },
                                right: {
                                    h_align:"right",
                                    v_align:"center",
                                    h_offset:15,
                                    v_offset:0
                                }
                            }
                            ,
                            bullets: {
                                enable:true,
                                hide_onmobile:false,
                                style:"zeus",
                                hide_onleave:false,
                                direction:"horizontal",
                                h_align:"center",
                                v_align:"bottom",
                                h_offset:0,
                                v_offset:30,
                                space:5,
                                tmp:''
                            }
                        },
                        responsiveLevels:[1400,1200,991,480],
                        visibilityLevels:[1400,1200,991,480],
                        gridwidth:[1400,1200,991,480],
                        gridheight:[600,700,700,600],
                        lazyType:"none",
                        parallax: {
                            type:"scroll",
                            origo:"slidercenter",
                            speed:2000,
                            levels:[5,10,15,20,25,30,35,40,45,46,47,48,49,50,51,55],
                        },
                        shadow:0,
                        spinner:"spinner0",
                        stopLoop:"off",
                        stopAfterLoops:-1,
                        stopAtSlide:-1,
                        shuffle:"off",
                        autoHeight:"on",
                        fullScreenAutoWidth:"off",
                        fullScreenAlignForce:"off",
                        fullScreenOffsetContainer: "",
                        fullScreenOffset: "0px",
                        hideThumbsOnMobile:"off",
                        hideSliderAtLimit:0,
                        hideCaptionAtLimit:0,
                        hideAllCaptionAtLilmit:0,
                        debugMode:false,
                        fallbacks: {
                            simplifyAll:"off",
                            nextSlideOnWindowFocus:"off",
                            disableFocusListener:false,
                        }
                    });
                }
            });	/*ready*/
        </script>
        @livewireScripts
    </body>
</html>
