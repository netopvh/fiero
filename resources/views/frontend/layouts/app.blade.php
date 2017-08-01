<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="robots" content="index, follow">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="">
    <title>
        @yield('title')
    </title>
    <link rel="shortcut icon" type="image/png" href="https://static-cms-si.s3.amazonaws.com/img/favicon.png?">
    @yield('css-before')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('frontend/plugins/sweetalert/dist/sweetalert.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/plugins/bxslider/dist/jquery.bxslider.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/plugins/slick-carousel/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/plugins/slick-carousel/slick/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/plugins/lightslider/dist/css/lightslider.css') }}">
    @yield('css-after')

<body>
<!-- Fixed top bar -->
<div class="top-bar b-18">
    <div class="container">
        <div class="row">
            <div class="col-md-7 col-sm-7 logos-col">
                <nav class="main-menu">
                    <ul class="cl">
                        <li>
                            <span class="imoon imoon-menu2"></span>
                            <a href="/" data-url="/"><i class="fa fa-home"></i></a>
                        </li>
                        <li class="logo gtm-menucasas ">
                            <a href="http://www.fiero.org.br"><span class="logo-sistema-s">=Sistema FIERO=</span></a>
                        </li>
                        <li class="logo gtm-menucasas ">
                            <a href="http://www.ro.sesi.org.br/portal/"><span class="logo-sistema-s">=SESI=</span></a>
                        </li>
                        <li class="logo gtm-menucasas ">
                            <a href="http://ro.senai.br/"><span class="logo-sistema-s">=SENAI=</span></a>
                        </li>
                        <li class="logo gtm-menucasas ">
                            <a href="http://www.ro.iel.org.br"><span class="logo-sistema-s">=IEL=</span></a>
                        </li>
                        <li class="fr hidden-md hidden-sm hidden-lg" id="mobMenu">
                            <a href="javascript:void(0);"><i class="fa fa-bars"></i></a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="col-md-4 col-sm-4">
                asdsada
            </div>
        </div>
    </div>
</div>
<!-- Fixed top bar -->

@yield('main')


@yield('scripts-before')
<script type="text/javascript" src="{{ asset('frontend/plugins/mask/dist/inputmask/inputmask.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontend/plugins/mask/dist/inputmask/jquery.inputmask.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontend/plugins/validation/validate.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontend/plugins/bxslider/dist/jquery.bxslider.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontend/plugins/slick-carousel/slick/slick.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontend/plugins/lightslider/dist/js/lightslider.js') }}"></script>
<script type="text/javascript"
        src="{{ asset('frontend/plugins/validation/localization/messages_pt_BR.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontend/plugins/sweetalert/dist/sweetalert.min.js') }}"></script>
@yield('scripts-after')
</body>

</html>