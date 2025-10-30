


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
    <title>Password Reset | FAAN ERP</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="{{asset('./assets/css/dashlite.css?ver=2.2.0')}}">
    <link id="skin-default" rel="stylesheet" href="{{asset('./assets/css/theme.css?ver=2.2.0')}}">
</head>

<body class="nk-body ui-rounder npc-default pg-auth   bg-abstract">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main">
            <!-- wrap @s -->
            <div class="nk-wrap nk-wrap-nosidebar">
                <!-- content @s -->


                <div class="nk-content">
                    <div class="nk-block nk-block-middle nk-auth-body  wide-xs">
                        <div class="brand-logo pb-4 text-center">
                            
                        </div>
                        <div class="card card-bordered">
                            <div class="card-inner card-inner-lg">
                                <div class="nk-block-head">
                                    <div class="nk-block-head-content ">
                                        <a href="html/index.html" class="logo-link">
                                            <img class="logo-light logo-img logo-img-lg" src="{{asset('assets/images/dms_logo.svg')}}" srcset="{{asset('assets/images/dms_logo.svg')}} 2x" alt="logo">
                                            <img class="logo-dark logo-img logo-img-lg" src="{{asset('assets/images/dms_logo.svg')}}" srcset="{{asset('assets/images/dms_logo.svg')}} 2x" alt="logo-dark">
                                        </a>
                                        <h4 class="nk-block-title">Password-Confirmation</h4>
                                        <div class="nk-block-des">
                                            <p>Access Document Manager by resetting your password.</p>
                                        </div>
                                    </div>
                                </div>

                                @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @endif
                                <form method="POST" action="{{ route('password.confirm') }}">
                                    @csrf
                                    <input type="hidden" name="token" value="{{ $token }}">
                                    

                                    <div class="form-group">
                                        <div class="form-label-group">
                                            <label class="form-label" for="default-01">Enter your New Password</label>
                                            <a class="link link-primary link-sm" href="{{ route('password.request') }}">Forgot Code?</a>
                                        </div>
                                        <div class="form-control-wrap">
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-lg btn-primary btn-block">Confirm Password</button>
                                    </div>
                                </form>
                               
                                
                            </div>
                        </div>
                    </div>
                    <div class="nk-footer nk-auth-footer-full">
                        <div class="container wide-lg">
                            <div class="row g-3">
                                <div class="col-lg-6 order-lg-last">
                                    <ul class="nav nav-sm justify-content-center justify-content-lg-end">
                                        <li class="nav-item">
                                            <a class="nav-link" href="/privacy-policy">Terms & Privacy policy</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Help</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-6">
                                    <div class="nk-block-content text-center text-lg-left">
                                        <p class="text-soft">&copy; 2023 DMS. All Rights Reserved.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- wrap @e -->
            </div>
            <!-- content @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
    <!-- JavaScript -->
    <script src="{{asset('./assets/js/bundle.js?ver=2.2.0')}}"></script>
    <script src="{{asset('./assets/js/scripts.js?ver=2.2.0')}}"></script>

</html>