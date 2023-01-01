<!doctype html>
<html class="no-js" lang="sk">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>@yield('title')</title>
        <meta name="description" content="@yield('meta_description')">
        <meta name="keywords" content="@yield('meta_keywords')">
        <meta name="author" content="Webgaleria.sk">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="format-detection" content="telephone=no">

             <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-M3HHVYDMYB"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'G-M3HHVYDMYB');
        </script>

        <!-- CSS here -->
        <link rel="stylesheet" href="/css/frontend/bootstrap.min.css">
        <link rel="stylesheet" href="/css/frontend/animate.min.css">
        <link rel="stylesheet" href="/css/frontend/magnific-popup.css">
        <link rel="stylesheet" href="/css/frontend/fontawesome/css/all.min.css">
        <link rel="stylesheet" href="/css/frontend/dripicons.css">
        <link rel="stylesheet" href="/css/frontend/slick.css">
        <link rel="stylesheet" href="/css/frontend/default.css">
        <link rel="stylesheet" href="/css/frontend/style.css">
        <link rel="stylesheet" href="/css/frontend/responsive.css">
        <link rel="stylesheet" href="/css/frontend/custom.css">
        <link rel="stylesheet" href="/css/frontend/custom2.css">
        <link rel="stylesheet" href="/css/frontend/importer.css?t={{time()}}">

        <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <link rel="manifest" href="/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">

        <style>
            #header-sticky{
                position: sticky;
                width: 100%;
                top: -1px;
                background: unset !important;
                background-color: rgba(193,172,154,0.8) !important;
                backdrop-filter: blur(2px);
                z-index: 10000000;
            }
            #header-sticky li a.top-btn{
                background-color: rgb(139 116 97 / 52%) !important
            }
            #header-sticky::before{
                display: none !important;
            }
            .header-lower .content{
                margin-top: -89px;
            }
            @media (min-width: 1400px) {
                header .logo img {
                    max-width: 270px;
                }
                header .container {
                    max-width: 1400px;
                }
            }
            @media only screen and (max-width: 768px){
                .iframe-wrapper{
                    height: 2000px !important;
                    padding-left: 15px;
                }
            }
        </style>
        @yield('styles')

    </head>
    <body>
        <main>
          <!-- header -->
          <header class="header-area">
              <div class="header-top second-header d-none d-md-block">
                  <div class="container">
                      <div class="row align-items-center">
                          <div class="col-1">

                          </div>

                          <div class="col-4">
                              <div class="wellcome-text text-center pl-5 row justify-content-md-left">

                                  <p> <i class="fa fa-home" aria-hidden="true"></i> {{$texts->find(4)->field}}</p>

                              </div>
                          </div>
                          <div class="col-lg-7 d-none d-lg-block">
                              <div class="header-cta text-right">
                                  <ul>
                                      <li>
                                          <i class="icon dripicons-phone"></i>
                                          <span><a target="_blank" href="{{$ctas->find(1)->button_link}}"> {{$ctas->find(1)->button_text}}</a> | <a href="{{$ctas->find(2)->button_link}}"> {{$ctas->find(2)->button_text}}</a></span>
                                      </li>
                                  </ul>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </header>
          <!-- header-end -->
        </main>
        <div class="position-relative header-lower">
            <div id="header-sticky" class="menu-area">
                <div class="container">
                    <div class="second-menu">
                        <div class="row align-items-center">
                            <div class="col-xl-3 col-lg-3">
                                <div class="logo">
                                    <a href="/"><img src="{{$photos->find(1)->getPath()}}" alt="{{$photos->find(1)->alt}}" title="{{$photos->find(1)->title}}" class="w-100"></a>
                                </div>
                            </div>
                            <div class="col-xl-9 col-lg-9">
                                <div class="responsive"><i class="icon dripicons-align-right"></i></div>
                                <div class="main-menu text-right <text-xl-right></text-xl-right>">
                                    <nav id="mobile-menu">
                                        <ul>
                                            <li><a href="/">Domov</a></li>
                                            <li><a href="/chata">Chata</a></li>
                                            <li><a href="/galeria">Galéria</a></li>
                                            {{--<li><a href="/virtualna-prehliadka">Prehliadka</a></li>--}}
                                            <li><a href="/kam-v-okoli">Kam v okolí</a></li>
                                            <li><a href="/cennik">Cenník</a></li>
                                            <li><a href="/kontakt">Kontakt</a></li>
                                            <li><a href="/rezervacie" class="top-btn">REZERVOVAŤ</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="content">
                @yield('content')
            </div>
        </div>


        <!-- footer -->
        <footer class="footer-bg footer-p pt-40">

            <div class="footer-top pb-0">
                <div class="container">

                  <div class="col-xl-12 col-lg-12 col-sm-12 img-fluid d-flex justify-content-center">
                    <div class="logo mb-10">
                        <a href="/" class="d-flex justify-content-center">
                            <img src="{{$photos->find(1)->getPath()}}" alt="{{$photos->find(1)->alt}}" title="{{$photos->find(1)->title}}" class="w-50"></a>
                    </div>
                  </div>

                    <div class="row justify-content-between">
                      <div class="col-xl-1 col-lg-1 col-sm-1 mt-10 pl-90">
                          <div class="footer-widget mb-10 ml-20">
                              <div class="logo mb-35 text-center">
                                  <i class="fa fa-home fa-3x" aria-hidden="true"></i>
                              </div>
                          </div>
                      </div>
                      <div class="col-xl-4 col-lg-4 col-sm-4 mt-20">
                          <div class="footer-widget mb-10">
                              <div class="logo mb-35">
                                  <p>{{$texts->find(5)->field}}</p>
                              </div>
                          </div>
                      </div>

                        <div class="col-xl-1 col-lg-1 col-sm-1 mt-10 row justify-content-right pl-90">
                            <div class="footer-widget mb-10">
                                <div class="logo mb-35">
                                    <i class="fa fa-phone fa-3x" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-sm-4 mt-20">
                            <div class="footer-widget mb-10">
                                <div class="logo mb-35">
                                    <p><a href="{{$ctas->find(3)->button_link}}"> {{$ctas->find(3)->button_text}}</a> | <a href="{{$ctas->find(4)->button_link}}"> {{$ctas->find(4)->button_text}}</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright-wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="copyright-text text-center">
                                <p>&copy; Copyright © 2020 Chata pri potoku. Všetky práva vyhradené. Designed by <a href="https://www.webgaleria.sk" style="color: #000; font-weight: bold" target="_blank">webgaleria.sk</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer-end -->
        <script src="/js/frontend/vendor/jquery-1.12.4.min.js"></script>
        <script src="/js/frontend/jquery.waypoints.min.js"></script>
        <script src="/js/frontend/jquery.counterup.min.js"></script>
        <script src="/js/frontend/jquery.scrollUp.min.js"></script>
         <script src="/js/frontend/jquery.magnific-popup.min.js"></script>
        <script src="/js/frontend/vendor/modernizr-3.5.0.min.js"></script>
        <script src="/js/frontend/popper.min.js"></script>
        <script src="/js/frontend/bootstrap.min.js"></script>
        <script src="/js/frontend/one-page-nav-min.js"></script>
        <script src="/js/frontend/slick.min.js"></script>
        <script src="/js/frontend/ajax-form.js"></script>
        <script src="/js/frontend/paroller.js"></script>
        <script src="/js/frontend/wow.min.js"></script>
        <script src="/js/frontend/js_isotope.pkgd.min.js"></script>
        <script src="/js/frontend/imagesloaded.min.js"></script>
        <script src="/js/frontend/parallax.min.js"></script>
        <script src="/js/frontend/jquery.magnific-popup.min.js"></script>
        <script src="/js/frontend/element-in-view.js"></script>
        <script src="/js/frontend/main.js"></script>
        @yield('scripts')
    @yield('recaptcha')
        @yield('reservation_scripts')
    </body>
  </html>
