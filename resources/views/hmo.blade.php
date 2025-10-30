<!DOCTYPE html>
<html lang="en">
<!--<< Header Area >>-->

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="FAAN ICT">
    <meta name="description" content="HMO - FAAN">
    <!-- ======== Page title ============ -->
    <title>HMO - FAAN</title>
    <!--<< Favicon >>-->
    <link rel="shortcut icon" href="frontend/assets/img/logo/HMO-white-logo.png">
    <!--<< Bootstrap min.css >>-->
    <link rel="stylesheet" href="frontend/assets/css/bootstrap.min.css">
    <!--<< Font Awesome.css >>-->
    <link rel="stylesheet" href="frontend/assets/css/font-awesome.css">
    <!--<< Animate.css >>-->
    <link rel="stylesheet" href="frontend/assets/css/animate.css">
    <!--<< Magnific Popup.css >>-->
    <link rel="stylesheet" href="frontend/assets/css/magnific-popup.css">
    <!--<< MeanMenu.css >>-->
    <link rel="stylesheet" href="frontend/assets/css/meanmenu.css">
    <!--<< Odometer.css >>-->
    <link rel="stylesheet" href="frontend/assets/css/odometer.css">
    <!--<< Swiper Bundle.css >>-->
    <link rel="stylesheet" href="frontend/assets/css/swiper-bundle.min.css">
    <!--<< DatePicker.css >>-->
    <link rel="stylesheet" href="frontend/assets/css/datepickerboot.css">
    <!--<< Nice Select.css >>-->
    <link rel="stylesheet" href="frontend/assets/css/nice-select.css">
    <!--<< Main.css >>-->
    <link rel="stylesheet" href="frontend/assets/css/main.css">
    <!--<< Style.css >>-->
    <link rel="stylesheet" href="style.css">

    {{-- {!! RecaptchaV3::initJs() !!} --}}

</head>

<body>

    <!-- Preloader Start -->
    {{-- <div id="preloader" class="preloader">
        <div class="animation-preloader">
            <div class="spinner">
            </div>
            <p class="text-center">Loading</p>
        </div>
        <div class="loader">
            <div class="row">
                <div class="col-3 loader-section section-left">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-left">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-right">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-right">
                    <div class="bg"></div>
                </div>
            </div>
        </div>
    </div> --}}

    <!-- Back To Top start -->
    <button id="back-top" class="back-to-top">
        <i class="fas fa-long-arrow-up"></i>
    </button>





    <header class="header-section header-1">
        <div class="container-fluid">
            <div class="mega-menu-wrapper">
                <div class="header-main justify-content-center">
                    <div class="header-left">
                        <a href="index.html" class="header-logo">
                            <img src="https://faan.gov.ng/wp-content/uploads/2023/03/Faan.logo_.png" width="200" alt="logo-img">
                        </a>
                        <a href="index.html" class="header-logo-2">
                            <img src="https://faan.gov.ng/wp-content/uploads/2023/03/Faan.logo_.png" width="180" alt="logo-img">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>


    <!-- ferature-conference Section Start -->
    <section class="ferature-conference-section fix section-bg " id="register">
        <div class="container">
            <div class="feature-conference-wrapper register-wrapper-3">
                <div class="row g-4 align-items-center">
                    <div class="col-lg-12">
                        <div class="register-form-box wow fadeInUp" data-wow-delay=".3s">
                            <h3 class=" align-items-center">Fill the form to select your preferred HMO</h3>

                            <form action="{{ route('register.event') }}" method="POST" class="register-form">
                                @csrf
                                <div class="row g-4">

                                     <div class="col-lg-12">
                                        <div class="form-clt">
                                            <span>Health Management Organization (HMO)</span>
                                            <select class="single-select w-100" name="hmo" id="hmo" required>
                                                <option value="">Select your HMO</option>
                                                <option>AXA Mansard</option>
                                                <option>Leadway Health</option>
                                                <option>AVON</option>
                                            </select>
                                            @error('hmo')
                                                <span style="color:red;">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>


                                    <div class="col-lg-12">
                                        <div class="form-clt">
                                            <span>Full Name</span>
                                            
                                            <input type="text" name="name" id="name2"
                                                placeholder="Your Name" required>
                                            @error('name')
                                                <span style="color:red;">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-clt">
                                            <span>Department </span>
                                            <input type="text" name="department" id="department20"
                                                placeholder="e.g. Public Affairs" required>
                                            @error('department')
                                                <span style="color:red;">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-clt">
                                            <span>Staff Number</span>
                                            <input type="number" name="staff_number" id="staff_number20"
                                                placeholder="e.g. 013043" required>
                                            @error('staff_number')
                                                <span style="color:red;">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-clt">
                                            <span>Station </span>
                                            <input type="text" name="station" id="station20"
                                                placeholder="e.g. Headquarters" required>
                                            @error('station')
                                                <span style="color:red;">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>


                                    <div class="col-lg-12">
                                        <div class="form-clt">
                                            <span>Phone</span>
                                            
                                            <input type="number" name="phone" id="phone2"
                                                placeholder="e.g. 08012345678" required>
                                            @error('phone')
                                                <span style="color:red;">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-clt">
                                            <span>National Identification Number (NIN)</span>
                                          
                                            <input type="number" name="nin" id="org"
                                                placeholder="99439239543" required>
                                            @error('nin')
                                                <span style="color:red;">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-clt">
                                            <span>State of Residence</span>
                                            
                                            <input type="text" name="state_of_residence" id="state_of_residence20"
                                                placeholder="e.g. Lagos" required>
                                            @error('state_of_residence')
                                                <span style="color:red;">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <button type="submit" class="theme-btn text-white">Submit <i
                                                class="fas fa-long-arrow-right"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <footer class="fix footer-bg">
        <div class="footer-bottom-2">
            <div class="container">
                <div class="footer-bottom-wrapper-2">
                    <p class="wow fadeInUp" data-wow-delay=".3s">
                        Copyright FAAN © 2025 All Rights Reserved.
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!--<< All JS Plugins >>-->
    <script src="frontend/assets/js/jquery-3.7.1.min.js"></script>

    <!--<< Bootstrap Js >>-->
    <script src="frontend/assets/js/bootstrap.bundle.min.js"></script>
    <script src="frontend/assets/js/gsap.js"></script>
    <script src="frontend/assets/js/gsap-scroll-to-plugin.js"></script>
    <script src="frontend/assets/js/gsap-scroll-smoother.js"></script>
    <script src="frontend/assets/js/gsap-scroll-trigger.js"></script>
    <script src="frontend/assets/js/gsap-split-text.js"></script>
    <script src="frontend/assets/js/split-type.min.js"></script>
    <!--<< Nice Select Js >>-->
    <script src="frontend/assets/js/jquery.nice-select.min.js"></script>
    <!--<< Odometer Js >>-->
    <script src="frontend/assets/js/odometer.min.js"></script>
    <!--<< Appear Js >>-->
    <script src="frontend/assets/js/jquery.appear.min.js"></script>
    <!--<< Datepicker Js >>-->
    <script src="frontend/assets/js/bootstrap-datepicker.js"></script>
    <!--<< Swiper Slider Js >>-->
    <script src="frontend/assets/js/swiper-bundle.min.js"></script>
    <!--<< MeanMenu Js >>-->
    <script src="frontend/assets/js/jquery.meanmenu.min.js"></script>
    <!--<< Magnific Popup Js >>-->
    <script src="frontend/assets/js/jquery.magnific-popup.min.js"></script>
    <!--<< Wow Animation Js >>-->
    <script src="frontend/assets/js/wow.min.js"></script>
    <!--<< Main.js >>-->
    <script src="frontend/assets/js/main.js"></script>
</body>

</html>
