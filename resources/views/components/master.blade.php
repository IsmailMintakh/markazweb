<!DOCTYPE html>
<html lang="en">


<!-- index-kenburns11:31  -->

<head>
    <meta charset="utf-8" />
    <title>Markaz Skardu</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Favicon -->
    {{--
    <link rel="shortcut icon" href="{{ asset('custom/img/favicon.png') }}"> --}}

    <!-- Template CSS Files -->
    <link rel="stylesheet" type="text/css" href="{{ asset('custom/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('custom/css/font-awesome.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('custom/css/magnific-popup.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('custom/css/style.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('custom/css/skins/yellow.css') }}" />

    <!-- Revolution Slider CSS Files -->
    <link rel="stylesheet" type="text/css" href="{{ asset('custom/js/plugins/revolution/css/settings.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('custom/js/plugins/revolution/css/layers.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('custom/js/plugins/revolution/css/navigation.css') }}" />

    <!-- Live Style Switcher - demo only -->
    <link rel="alternate stylesheet" type="text/css" title="blue" href="{{ asset('custom/css/skins/blue.css') }}" />
    <link rel="alternate stylesheet" type="text/css" title="blueviolet" href="{{ asset('custom/css/skins/blueviolet.css') }}" />
    <link rel="alternate stylesheet" type="text/css" title="goldenrod" href="{{ asset('custom/css/skins/goldenrod.css') }}" />
    <link rel="alternate stylesheet" type="text/css" title="green" href="{{ asset('custom/css/skins/green.css') }}" />
    <link rel="alternate stylesheet" type="text/css" title="magenta" href="{{ asset('custom/css/skins/magenta.css') }}" />
    <link rel="alternate stylesheet" type="text/css" title="orange" href="{{ asset('custom/css/skins/orange.css') }}" />
    <link rel="alternate stylesheet" type="text/css" title="purple" href="{{ asset('custom/css/skins/purple.css') }}" />
    <link rel="alternate stylesheet" type="text/css" title="red" href="{{ asset('custom/css/skins/red.css') }}" />
    <link rel="alternate stylesheet" type="text/css" title="yellow" href="{{ asset('custom/css/skins/yellow.css') }}" />
    <link rel="alternate stylesheet" type="text/css" title="yellowgreen" href="{{ asset('custom/css/skins/yellowgreen.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('custom/css/styleswitcher.css') }}" />

    <!-- Template JS Files -->
    <script src="{{ asset('custom/js/modernizr.js') }}"></script>

</head>

<body class="double-diagonal dark">
    <!-- Preloader Starts -->
    
    <!-- Preloader Ends -->
    <!-- Live Style Switcher Starts - demo only -->

    <!-- Live Style Switcher Ends - demo only -->
    <!-- Page Wrapper Starts -->
    <div class="wrapper">
        <!-- Header Starts -->
        <header class="header">
            <div class="header-inner">
                <!-- Navbar Starts -->
                <nav class="navbar">
                    <!-- Logo Starts -->
                    <div class="logo">
                        <a data-toggle="collapse" data-target=".navbar-collapse.show" class="navbar-brand"
                            href="index-kenburns.html">
                            <!-- Logo White Starts -->
                            <img id="logo-light" class="logo-light"
                                src="{{ asset('custom/images/logo.png') }}" alt="logo-light" /> 
                           
                        </a>
                    </div>
                    <!-- Logo Ends -->
                    <!-- Toggle Icon for Mobile Starts -->
                    <button class="navbar-toggle navbar-toggler" type="button" data-toggle="collapse"
                        data-target=".navbar-collapse" aria-controls="navbarSupportedContent" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span id="icon-toggler">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                    </button>
                    <!-- Toggle Icon for Mobile Ends -->
                    <div id="navbarSupportedContent" class="collapse navbar-collapse navbar-responsive-collapse">
                        <!-- Main Menu Starts -->
                        <ul class="nav navbar-nav" id="main-navigation">
                            <li class="active"><a href="index-kenburns.html"><i class="fa fa-home"></i> Home</a></li>
                            <li><a href="{{ route('about') }}"><i class="fa fa-user"></i> About Us</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-image"></i>
                                    portfolio <i class="fa fa-angle-down icon-angle"></i></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="portfolio-2-columns.html">Portfolio 2 Columns</a></li>
                                    <li><a href="portfolio-3-columns.html">Portfolio 3 Columns</a></li>
                                    <li><a href="portfolio-4-columns.html">Portfolio 4 Columns</a></li>
                                    <li><a href="image-project.html">Image Project</a></li>
                                    <li><a href="slider-project.html">Slider Project</a></li>
                                    <li><a href="gallery-project.html">Gallery Project</a></li>
                                    <li><a href="video-project.html">Video project</a></li>
                                    <li><a href="youtube-project.html">youtube Project</a></li>
                                    <li><a href="vimeo-project.html">Vimeo Project</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-edit"></i>
                                    Blog <i class="fa fa-angle-down icon-angle"></i></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="blog-right-sidebar.html">Right Sidebar</a></li>
                                    <li><a href="blog-left-sidebar.html">Left Sidebar</a></li>
                                    <li><a href="blog-grid-no-sidebar.html">Grid No Sidebar</a></li>
                                    <li><a href="blog-post.html">Single Post</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                                        class="fa fa-file-text-o"></i> Language <i
                                        class="fa fa-angle-down icon-angle"></i></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="{{ route('change.Lang','en') }}"> <i class="fa fa-{{ session()->get('locale') == 'en' ? 'check' : '' }}"></i>English</a></li>
                                    <li><a href="{{ route('change.Lang','ur') }}"> <i class="fa fa-{{ session()->get('locale') == 'ur' ? 'check' : '' }}"></i>Urdu</a></li>
                                    
                                </ul>
                            </li>
                            <li><a href="contact.html"><i class="fa fa-envelope"></i> Contact</a></li>
                            <!-- Cart Icon Starts -->
                            <li class="cart hidden-xs hidden-sm"><a href="shopping-cart.html"><i
                                        class="fa fa-shopping-cart"></i></a></li>
                            <!-- Cart Icon Starts -->
                            <!-- Search Icon Starts -->
                            <li class="search hidden-xs hidden-sm"><button id="search-button"
                                    class="fa fa-search"></button></li>
                            <!-- Search Icon Ends -->
                        </ul>
                        <!-- Main Menu Ends -->
                    </div>
                    <!-- Search Input Starts -->
                    <div class="site-search hidden-xs">
                        <div class="search-container">
                            <input id="search-input" type="text" placeholder="type your keyword and hit enter ...">
                            <span class="close">×</span>
                        </div>
                    </div>
                    <!-- Search Input Ends -->
                    <!-- Navigation Menu Ends -->
                </nav>
                <!-- Navbar Ends -->
            </div>
        </header>
        {{ $slot }}
        <footer class="footer top-logos">
            <!-- Footer Top Area Starts -->
            <div class="container top-footer">
                <div class="row">
                    <!-- Footer Widget Starts -->
                    <div class="col-xs-6 col-sm-4 col-md-2">
                        <h4>Markaz</h4>
                        <div class="menu">
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li><a href="{{ route('about') }}">About</a></li>
                                <li><a href="pricing.html">pricing</a></li>
                                <li><a href="portfolio-3-columns.html">portfolio</a></li>
                                <li><a href="blog-right-sidebar.html">Blog</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Footer Widget Ends -->
                    <!-- Footer Widget Starts -->
                    <div class="col-xs-6 col-sm-4 col-md-2">
                        <h4>Support</h4>
                        <div class="menu">
                            <ul>
                                <li><a href="contact.html">Contact</a></li>
                                <li><a href="faq.html">FAQ</a></li>
                                <li><a href="terms-of-services.html">Terms of Services</a></li>
                                <li><a href="register.html">Register</a></li>
                                <li><a href="login.html">Login</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Footer Widget Ends -->
                    <!-- Footer Widget Starts -->
                    <div class="col-xs-6 col-sm-4 col-md-3">
                        <h4>Contact US</h4>
                        <div class="menu">
                            <ul>
                                <li><span><i class="fa fa-envelope-open"></i> contact@website.com</span></li>
                                <li><span><i class="fa fa-phone"></i> 03479089715</span></li>
                                <li><span><i class="fa fa-map-marker"></i> Jamia Masjid Skardu</span></li>
                                <li><span><i class="fa fa-clock-o"></i> mon-sat 08am &#x21FE; 05pm</span></li>
                                <li><span><i class="fa fa-skype"></i> markaz</span></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Footer Widget Ends -->
                    <!-- Footer Widget Starts -->
                    <div class="col-xs-6 col-sm-12 col-md-4">
                        <!-- Facts Starts -->
                        <div class="facts-footer">
                            <div>
                                <h5>786</h5>
                                <span>projects</span>
                            </div>
                            <div>
                                <h5>12</h5>
                                <span>hours work</span>
                            </div>
                            <div>
                                <h5>5</h5>
                                <span>offices</span>
                            </div>
                            <div>
                                <h5>100,</h5>
                                <span>clients</span>
                            </div>
                        </div>
                        <!-- Facts Ends -->
                        <hr>
                        <!-- Social Media Links Starts -->
                        <div class="social-icons">
                            <ul class="social">
                                <li>
                                    <a class="twitter" href="#" title="twitter"></a>
                                </li>
                                <li>
                                    <a class="facebook" href="#" title="facebook"></a>
                                </li>
                                <li>
                                    <a class="google" href="#" title="google"></a>
                                </li>
                                <li>
                                    <a class="linkedin" href="#" title="linkedin"></a>
                                </li>
                                <li>
                                    <a class="youtube" href="#" title="youtube"></a>
                                </li>
                            </ul>
                        </div>
                        <!-- Social Media Links Ends -->
                    </div>
                    <!-- Footer Widget Ends -->
                </div>
                <!-- Footer Bottom Area Starts -->
                <div class="bottom-footer">
                    <div class="row">
                        <div class="col-xs-12">
                            <!-- Copyright Text Starts -->
                            <p class="text-center"><a href="https://.net">InTouch Solutions</a></p>
                            <!-- Copyright Text Ends -->
                        </div>
                    </div>
                </div>
                <!-- Footer Bottom Area Ends -->
            </div>
            <!-- Footer Top Area Ends -->

        </footer>
        <!-- Footer Section Ends -->
        <!-- Back To Top Starts -->
        <div id="back-top-wrapper">
            <p id="back-top">
                <a href="#top"><span></span></a>
            </p>
        </div>
        <!-- Back To Top Ends -->
    </div>
    <!-- Wrapper Ends -->

    <!-- Template JS Files -->
    <script src="{{ asset('custom/js/jquery-2.2.4.min.js') }}"></script>
    <script src="{{ asset('custom/js/plugins/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('custom/js/plugins/bootstrap.min.js') }}"></script>
    <script src="{{ asset('custom/js/plugins/jquery.bxslider.min.js') }}"></script>
    <script src="{{ asset('custom/js/plugins/jquery.filterizr.js') }}"></script>
    <script src="{{ asset('custom/js/plugins/jquery.magnific-popup.min.js') }}"></script>

    <!-- Revolution Slider Main JS Files -->
    <script src="{{ asset('custom/js/plugins/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
    <script src="{{ asset('custom/js/plugins/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>

    <!-- Revolution Slider Extensions -->

    <script src="{{ asset('custom/js/plugins/revolution/js/extensions/revolution.extension.actions.min.js') }}">
    </script>
    <script src="{{ asset('custom/js/plugins/revolution/js/extensions/revolution.extension.carousel.min.js') }}">
    </script>
    <script src="{{ asset('custom/js/plugins/revolution/js/extensions/revolution.extension.kenburn.min.js') }}">
    </script>
    <script src="{{ asset('custom/js/plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}">
    </script>
    <script src="{{ asset('custom/js/plugins/revolution/js/extensions/revolution.extension.migration.min.js') }}">
    </script>
    <script src="{{ asset('custom/js/plugins/revolution/js/extensions/revolution.extension.navigation.min.js') }}">
    </script>
    <script src="{{ asset('custom/js/plugins/revolution/js/extensions/revolution.extension.parallax.min.js') }}">
    </script>
    <script src="{{ asset('custom/js/plugins/revolution/js/extensions/revolution.extension.slideanims.min.js') }}">
    </script>
    <script src="{{ asset('custom/js/plugins/revolution/js/extensions/revolution.extension.video.min.js') }}"></script>

    <!-- Live Style Switcher JS File - only demo -->
    <script src="{{ asset('custom/js/styleswitcher.js') }}"></script>

    <!-- Main JS Initialization File -->
    <script src="{{ asset('custom/js/custom.js') }}"></script>

</body>


<!-- index-kenburns13:00  -->

</html>