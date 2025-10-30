<!DOCTYPE html>
<html lang="en">
<!--<< Header Area >>-->

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="FAAN ICT">
    <meta name="description" content="FAAN HMO preference Form">
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
    <section class="ferature-conference-section fix section-bg section-padding-sm " id="register">
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
                                            <span>Department</span>
                                            <select class="single-select w-100" name="department" id="department" required>
                                                <option value="MD">MD</option>
                                                <option value="BOARD">BOARD</option>
                                                <option value="LEGAL">LEGAL</option>
                                                <option value="INTERNAL AUDIT">INTERNAL AUDIT</option>
                                                <option value="PROTOCOL AND PASSAGES">PROTOCOL AND PASSAGES</option>
                                                <option value="CUSTOMER SERVICE">CUSTOMER SERVICE</option>
                                                <option value="INFORMATION TECHNOLOGY">INFORMATION TECHNOLOGY</option>
                                                <option value="SAFETY SERVICES">SAFETY SERVICES</option>
                                                <option value="PROCUREMENT">PROCUREMENT</option>
                                                <option value="CORPORATE AFFAIRS DEPARTMENT">CORPORATE AFFAIRS DEPARTMENT</option>
                                                <option value="RESEARCH AND DEVELOPMENT">RESEARCH AND DEVELOPMENT</option>
                                                <option value="REVENUE">REVENUE</option>
                                                <option value="DIRECTORATE OF LEGAL SERVICES">DIRECTORATE OF LEGAL SERVICES</option>
                                                <option value="DCS">DCS</option>
                                                <option value="PLANNING DEPT">PLANNING DEPT</option>
                                                <option value="STATISTICS">STATISTICS</option>
                                                <option value="DIRECTOR OF HUMAN RESOURCES AND ADMINISTRATIONS">DIRECTOR OF HUMAN RESOURCES AND ADMINISTRATIONS</option>
                                                <option value="HUMAN RESOURCES">HUMAN RESOURCES</option>
                                                <option value="TRAINING AND MAN POWER DEV.">TRAINING AND MAN POWER DEV.</option>
                                                <option value="TRANSPORT">TRANSPORT</option>
                                                <option value="INTERNAL ADMIN">INTERNAL ADMIN</option>
                                                <option value="AVIATION MEDICAL CLINIC">AVIATION MEDICAL CLINIC</option>
                                                <option value="WELFARE AND MANAGEMENT SERVICES">WELFARE AND MANAGEMENT SERVICES</option>
                                                <option value="STORES">STORES</option>
                                                <option value="DHRA">DHRA</option>
                                                <option value="DCBD">DCBD</option>
                                                <option value="COMMERCIAL INSPECTORATE">COMMERCIAL INSPECTORATE</option>
                                                <option value="BUSINESS DEV.">BUSINESS DEV.</option>
                                                <option value="ADVERTISING">ADVERTISING</option>
                                                <option value="DPCP">DPCP</option>
                                                <option value="PUBLIC AFFAIRS DEPARTMENT">PUBLIC AFFAIRS DEPARTMENT</option>
                                                <option value="CONSUMER PROTECTION DEPT">CONSUMER PROTECTION DEPT</option>
                                                <option value="DIRECTOR OF ENGINEERING SERVICES">DIRECTOR OF ENGINEERING SERVICES</option>
                                                <option value="DES">DES</option>
                                                <option value="ELECTRICAL">ELECTRICAL</option>
                                                <option value="MECHANICAL">MECHANICAL</option>
                                                <option value="CIVIL BUILDING">CIVIL BUILDING</option>
                                                <option value="LAND, WATER SURVEY">LAND, WATER SURVEY</option>
                                                <option value="SAFETY MAGT. SYSTEM">SAFETY MAGT. SYSTEM</option>
                                                <option value="ESTATE MANAGEMENT">ESTATE MANAGEMENT</option>
                                                <option value="PROJECT">PROJECT</option>
                                                <option value="DIRECTOR OF CARGO DEVELOPMENT SERVICES">DIRECTOR OF CARGO DEVELOPMENT SERVICES</option>
                                                <option value="CARGO">CARGO</option>
                                                <option value="DIRECTOR OF FINANCE ACCOUNTS">DIRECTOR OF FINANCE ACCOUNTS</option>
                                                <option value="DFA">DFA</option>
                                                <option value="ACCOUNTS">ACCOUNTS</option>
                                                <option value="FINANCE">FINANCE</option>
                                                <option value="BUDGET">BUDGET</option>
                                                <option value="CREDIT CONTROL">CREDIT CONTROL</option>
                                                <option value="DIRECTOR OF SPECIAL DUTIES">DIRECTOR OF SPECIAL DUTIES</option>
                                                <option value="SPECIAL DUTIES">SPECIAL DUTIES</option>
                                                <option value="DIRECTOR OF AIRPORT OPERATIONS">DIRECTOR OF AIRPORT OPERATIONS</option>
                                                <option value="DAO">DAO</option>
                                                <option value="AIRFIELD OPERATIONS">AIRFIELD OPERATIONS</option>
                                                <option value="FACILITATIONS">FACILITATIONS</option>
                                                <option value="AERODROME RESCUE FIRE FIGHTING SERVICES">AERODROME RESCUE FIRE FIGHTING SERVICES</option>
                                                <option value="AIRPORT SERVICES">AIRPORT SERVICES</option>
                                                <option value="ENVIRONMENTAL MANAGEMENT">ENVIRONMENTAL MANAGEMENT</option>
                                                <option value="REGIONAL AIRPORT SERVICES">REGIONAL AIRPORT SERVICES</option>
                                                <option value="DIRECTOR OF AIRPORT SECURITY SERVICE">DIRECTOR OF AIRPORT SECURITY SERVICE</option>
                                                <option value="DIRECTOR OF SECURITY SERVICES">DIRECTOR OF SECURITY SERVICES</option>
                                                <option value="AVIATION SECURITY">AVIATION SECURITY</option>
                                                <option value="INTELLIGENCE INVESTIGATION">INTELLIGENCE INVESTIGATION</option>
                                                <option value="LIAISON">LIAISON</option>
                                                <option value="HR / TECHNOLOGY CAPACITY BUILDING">HR / TECHNOLOGY CAPACITY BUILDING</option>
                                                <option value="SECURITY ADMINISTRATION">SECURITY ADMINISTRATION</option>
                                                <option value="CIVIL">CIVIL</option>
                                                <option value="MECHANICAL">MECHANICAL</option>
                                                <option value="ELECTRICAL">ELECTRICAL</option>
                                            </select>
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
                                            <span>Station</span>
                                            <select class="single-select w-100" name="station" id="station" required>
                                                <option value="ABUJA">ABUJA</option>
                                                <option value="AKURE">AKURE</option>
                                                <option value="AKWA-IBOM">AKWA-IBOM</option>
                                                <option value="ANAMBRA">ANAMBRA</option>
                                                <option value="ASABA">ASABA</option>
                                                <option value="BAUCHI">BAUCHI</option>
                                                <option value="BAYELSA">BAYELSA</option>
                                                <option value="BEBI-C/RIVER">BEBI-C/RIVER</option>
                                                <option value="BENIN">BENIN</option>
                                                <option value="CALABAR">CALABAR</option>
                                                <option value="DUTSE">DUTSE</option>
                                                <option value="EBONYI">EBONYI</option>
                                                <option value="EKITI">EKITI</option>
                                                <option value="ENUGU">ENUGU</option>
                                                <option value="GOMBE">GOMBE</option>
                                                <option value="HEAD QUARTER">HEAD QUARTER</option>
                                                <option value="HEADQUARTER ABUJA">HEADQUARTER ABUJA</option>
                                                <option value="IBADAN">IBADAN</option>
                                                <option value="ILORIN">ILORIN</option>
                                                <option value="JALINGO">JALINGO</option>
                                                <option value="JOS">JOS</option>
                                                <option value="KADUNA">KADUNA</option>
                                                <option value="KANO">KANO</option>
                                                <option value="KATSINA">KATSINA</option>
                                                <option value="KEBBI">KEBBI</option>
                                                <option value="MAIDUGURI">MAIDUGURI</option>
                                                <option value="MAKURDI">MAKURDI</option>
                                                <option value="MINNA">MINNA</option>
                                                <option value="MURTALA MOHAMMED">MURTALA MOHAMMED</option>
                                                <option value="OGUN">OGUN</option>
                                                <option value="OSUBI">OSUBI</option>
                                                <option value="OWERRI">OWERRI</option>
                                                <option value="PORT HARCOURT">PORT HARCOURT</option>
                                                <option value="SOKOTO">SOKOTO</option>
                                                <option value="YENEGOA">YENEGOA</option>
                                                <option value="YOBE">YOBE</option>
                                                <option value="YOLA">YOLA</option>
                                                <option value="ZARIA">ZARIA</option>
                                            </select>
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
