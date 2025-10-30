<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="./images/favicon.png">
    <!-- Page Title  -->
    <title>Sign Up | FAAN ERP</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="./assets/css/dashlite.css?ver=2.2.0">
    <link id="skin-default" rel="stylesheet" href="./assets/css/theme.css?ver=2.2.0">
</head>

<body class="nk-body ui-rounder npc-default pg-auth">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <!-- wrap @s -->
            <div class="nk-wrap nk-wrap-nosidebar">
                <!-- content @s -->
                <div class="nk-content ">
                    <div class="nk-split nk-split-page nk-split-md">
                        <div class="nk-split-content nk-block-area nk-block-area-column nk-auth-container bg-white">

                            <div class="absolute-top-right d-lg-none p-3 p-sm-5">
                                <a href="#" class="toggle btn-white btn btn-icon btn-light" data-target="athPromo"><em class="icon ni ni-info"></em></a>
                            </div>

                            <div class="nk-block nk-block-middle nk-auth-body">

                                <div class="brand-logo pb-5">
                                    <a href="/" class="logo-link">
                                        <img class="logo-light logo-img logo-img-lg" src="{{asset('assets/images/dms_logo.svg')}}" srcset="{{asset('assets/images/dms_logo.svg')}} 2x" alt="logo">
                                        <img class="logo-dark logo-img logo-img-lg" src="{{asset('assets/images/dms_logo.svg')}}" srcset="{{asset('assets/images/dms_logo.svg')}} 2x" alt="logo-dark">
                                    </a>
                                </div>
                                <div class="nk-block-head">
                                    <div class="nk-block-head-content">
                                        <h5 class="nk-block-title">Sign Up</h5>
                                        <div class="nk-block-des">
                                            <p>Create an account for Document Manager using your email and password.</p>
                                        </div>
                                    </div>
                                </div><!-- .nk-block-head -->

                                <form method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <div class="form-group">
                                        <div class="form-label-group">
                                            <label class="form-label" for="default-01">Full name</label>
                                        </div>
                                        <input type="text" class="form-control form-control-lg" name="name" value="{{ old('name') }}" placeholder="Enter your name address">
                                        @error('name')
                                            <span id="fv-name-error" class="invalid">{{ $message }}</span>
                                        @enderror
                                    </div><!-- .foem-group -->

                                    <div class="form-group">
                                        <div class="form-label-group">
                                            <label class="form-label" for="default-01">odc</label>
                                        </div>
                                        <input type="text" class="form-control form-control-lg" name="odc" value="{{ old('odc') }}" placeholder="Enter your odc address">
                                        @error('odc')
                                            <span id="fv-name-error" class="invalid">{{ $message }}</span>
                                        @enderror
                                    </div><!-- .foem-group -->

                                    <div class="form-group">
                                        <div class="form-label-group">
                                            <label class="form-label" for="default-01">phone</label>
                                        </div>
                                        <input type="text" class="form-control form-control-lg" name="phone" value="{{ old('phone') }}" placeholder="Enter your phone address">
                                        @error('phone')
                                            <span id="fv-name-error" class="invalid">{{ $message }}</span>
                                        @enderror
                                    </div><!-- .foem-group -->

                                    <div class="form-group">
                                        <div class="form-label-group">
                                            <label class="form-label" for="default-01">Email</label>
                                        </div>
                                        <input type="email" class="form-control form-control-lg" name="email" value="{{ old('email') }}" placeholder="Enter your email address">
                                        @error('email')
                                            <span id="fv-name-error" class="invalid">{{ $message }}</span>
                                        @enderror
                                    </div><!-- .foem-group -->


                                    <div class="form-group">
                                        <div class="form-label-group">
                                            <label class="form-label" for="password">Password</label>
                                        </div>
                                        <div class="form-control-wrap">
                                            <a tabindex="-1" href="#" class="form-icon form-icon-right passcode-switch" data-target="password">
                                                <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                                <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                                            </a>
                                            <input type="password" class="form-control form-control-lg" id="password" name="password" required placeholder="Enter your password">
                                            @error('password')
                                                <span id="fv-name-error" class="invalid">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div><!-- .foem-group -->

                                    <div class="form-group">
                                        <div class="form-label-group">
                                            <label class="form-label" for="password">Password Confirm</label>
                                        </div>
                                        <div class="form-control-wrap">
                                            <a tabindex="-1" href="#" class="form-icon form-icon-right passcode-switch" data-target="password_confirmation">
                                                <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                                <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                                            </a>
                                            <input type="password" class="form-control form-control-lg" id="password_confirmation" name="password_confirmation" required placeholder="Enter your password">
                                        </div>
                                    </div><!-- .foem-group -->
                                    
                                    <div class="form-group">
                                        <button class="btn btn-lg btn-primary btn-block">Sign in</button>
                                    </div>
                                </form><!-- form -->
                                <div class="form-note-s2 pt-4"> Already on our platform? <a href="/login">Sign In</a>
                                </div>
                            </div><!-- .nk-block -->
                            
                            <div class="nk-block nk-auth-footer">
                                <div class="nk-block-between">
                                    <ul class="nav nav-sm">
                                        <li class="nav-item">
                                            <a class="nav-link" href="/privacy-policy">Terms & Privacy policy</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Help</a>
                                        </li>
                                    </ul><!-- .nav -->
                                </div>
                                <div class="mt-3">
                                    <p>&copy; 2022 DMS. All Rights Reserved.</p>
                                </div>
                            </div><!-- .nk-block -->

                        </div><!-- .nk-split-content -->

                        <div class="nk-split-content nk-split-stretch bg-abstract"></div><!-- .nk-split-content -->
                    </div><!-- .nk-split -->
                </div>
                <!-- wrap @e -->
            </div>
            <!-- content @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
    <!-- JavaScript -->
    <script src="./assets/js/bundle.js?ver=2.2.0"></script>
    <script src="./assets/js/scripts.js?ver=2.2.0"></script>

</html>