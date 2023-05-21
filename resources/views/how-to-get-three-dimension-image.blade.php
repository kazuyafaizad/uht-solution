<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="mytheme">

<head>
    <!--================= Meta tag =================-->
    <meta charset="utf-8">
    <title>How To Use Ultrasound Sonoace R8</title>
    <meta name="description" content="">
    <!--================= Responsive Tag =================-->
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--================= Favicon =================-->
    <link rel="apple-touch-icon" href="assets/images/fav.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/default.png">
    <!--================= Bootstrap V5 css =================-->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <!--================= Menus css =================-->
    <link rel="stylesheet" type="text/css" href="assets/css/menus.css">
    <!--================= Animate css =================-->
    <link rel="stylesheet" type="text/css" href="assets/css/animate.css">
    <!--================= Owl Carousel css =================-->
    <link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.css">
    <!--================= Elegant icon css  =================-->
    <link rel="stylesheet" type="text/css" href="assets/fonts/elegant-icon.css">
    <!--================= Magnific Popup css =================-->
    <link rel="stylesheet" type="text/css" href="assets/css/magnific-popup.css">
    <!--================= Animations css =================-->
    <link rel="stylesheet" type="text/css" href="assets/css/animations.css">
    <!--================= style css =================-->
    <link rel="stylesheet" type="text/css" href="style.css">
    <!--================= Custom Spacing css =================-->
    <link rel="stylesheet" type="text/css" href="assets/css/custom-spacing.css">
    <!--================= Responsive css =================-->
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="course-single">
    <!--================= Preloader Section Start Here =================-->
    <div id="react__preloader">
        <div id="react__circle_loader"></div>
        <div class="react__loader_logo"><img src="assets/images/default.png" alt="Preload"></div>
    </div>
    <!--================= Preloader Section End Here =================-->

    <!--================= Wrapper Start Here =================-->
    <div class="react-wrapper">
        <div class="react-wrapper-inner">
            <!--================= Breadcrumbs Section Start Here =================-->

            @include('layouts.navigation')
            <!--================= Breadcrumbs Section End Here =================-->

            <!--================= Course Filter Section Start Here =================-->
            <div class="back__course__page_grid react-courses__single-page pb---16 pt---110">
                <div class="container pb---70">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="course-single-tab">
                                <div class="tab-content" id="back-tab-content">
                                    <div class="tab-pane fade show active" id="discription" role="tabpanel"
                                        aria-labelledby="discription">
                                        <h3>How To Get Three Dimension Image</h3>
                                        <div class="image-banner"><iframe
                                                src="https://app.Lumi.education/api/v1/run/M0deNu/embed" width="1088"
                                                height="720" frameborder="0" allowfullscreen="allowfullscreen"
                                                allow="geolocation *; microphone *; camera *; midi *; encrypted-media *"></iframe>
                                            <script src="https://app.Lumi.education/api/v1/h5p/core/js/h5p-resizer.js" charset="UTF-8"></script>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 md-mt-60">
                            <div class="react-sidebar react-back-course2 ml----30">
                                <div class="widget get-back-course">
                                    <a href="/simulation" class="start-btn">Back To Course List<svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-arrow-right">
                                            <line x1="5" y1="12" x2="19" y2="12">
                                            </line>
                                            <polyline points="12 5 19 12 12 19"></polyline>
                                        </svg></a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--================= Course Filter Section End Here =================-->

        </div>
    </div>
    <!--================= Wrapper End Here =================-->

    <!--================= Footer Section Start Here =================-->
    <footer class="footer items-center p-4 bg-primary text-primary-content absolute bottom-0">
        <div class="items-center grid-flow-col">
            <svg width="36" height="36" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                fill-rule="evenodd" clip-rule="evenodd" class="fill-current">
                <path
                    d="M22.672 15.226l-2.432.811.841 2.515c.33 1.019-.209 2.127-1.23 2.456-1.15.325-2.148-.321-2.463-1.226l-.84-2.518-5.013 1.677.84 2.517c.391 1.203-.434 2.542-1.831 2.542-.88 0-1.601-.564-1.86-1.314l-.842-2.516-2.431.809c-1.135.328-2.145-.317-2.463-1.229-.329-1.018.211-2.127 1.231-2.456l2.432-.809-1.621-4.823-2.432.808c-1.355.384-2.558-.59-2.558-1.839 0-.817.509-1.582 1.327-1.846l2.433-.809-.842-2.515c-.33-1.02.211-2.129 1.232-2.458 1.02-.329 2.13.209 2.461 1.229l.842 2.515 5.011-1.677-.839-2.517c-.403-1.238.484-2.553 1.843-2.553.819 0 1.585.509 1.85 1.326l.841 2.517 2.431-.81c1.02-.33 2.131.211 2.461 1.229.332 1.018-.21 2.126-1.23 2.456l-2.433.809 1.622 4.823 2.433-.809c1.242-.401 2.557.484 2.557 1.838 0 .819-.51 1.583-1.328 1.847m-8.992-6.428l-5.01 1.675 1.619 4.828 5.011-1.674-1.62-4.829z">
                </path>
            </svg>
            <p>Copyright © 2023 -<a href="#">Ultrasound Sonoace R7 Courses.</a> All right reserved</p>
        </div>
        <div class="grid-flow-col gap-4 md:place-self-center md:justify-self-end">
            <a>
            </a>
            <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                    class="fill-current">
                    <path
                        d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z">
                    </path>
                </svg></a>
            <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                    class="fill-current">
                    <path
                        d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z">
                    </path>
                </svg></a>
        </div>
    </footer>
    <!--================= Footer Section End Here =================-->

    <!--================= Scroll to Top Start =================-->
    <div id="backscrollUp">
        <span aria-hidden="true" class="arrow_carrot-up"></span>
    </div>
    <!--================= Scroll to Top End =================-->

    <!--================= Jquery latest version =================-->
    <script src="assets/js/jquery.min.js"></script>
    <!--================= Modernizr js =================-->
    <script src="assets/js/modernizr-2.8.3.min.js"></script>
    <!--================= Bootstrap js =================-->
    <script src="assets/js/bootstrap.min.js"></script>
    <!--================= Owl Carousel js =================-->
    <script src="assets/js/owl.carousel.min.js"></script>
    <!--================= Magnific Popup =================-->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <!--================= Counter up js =================-->
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <!--================= Wow js =================-->
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <!--================= Imagesloaded.pkgd.min js =================-->
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <!--================= skill.bars.jquery.js =================-->
    <script src="assets/js/skill.bars.jquery.js"></script>
    <!--================= menus js =================-->
    <script src="assets/js/menus.js"></script>
    <!--================= Plugins js =================-->
    <script src="assets/js/plugins.js"></script>
    <!--================= Main js =================-->
    <script src="assets/js/main.js"></script>
</body>

</html>
