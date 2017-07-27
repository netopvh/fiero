<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="robots" content="index, follow">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="">
    <title>
        Lei de Diretrizes Orçamentárias - Institucional SENAI - Portal da indústria
    </title>
    <link rel="shortcut icon" type="image/png" href="https://static-cms-si.s3.amazonaws.com/img/favicon.png?">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/components.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/plugins/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/plugins/sweetalert/dist/sweetalert.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/plugins/bxslider/dist/jquery.bxslider.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/custom.css') }}">

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
        </div>
    </div>
</div>
<!-- Fixed top bar -->

@include('frontend.layouts.partials.menu_mobile')

<header id="mainHeader">
    <div class="container">
        <div class="fl">
            <a href="#" class="logo-page"><img
                        src="{{ asset('frontend/assets/img/logo_fiero30.png') }}"></a>

        </div>
        <div class="fr">
            <div class=" hidden-xs page-links   fr ta-r ">
                <div class="p-links-hold">

            <span class="hover-menu touch ">
                <span class="casa-color logo-sistema-s">=</span>
                    <span class="gtm-titulo">Educação para o trabalho</span>
                <div class="submenu hover-container">
                    <ul>
                            <li class="gtm-menugeral"><a href="#">Ensino Fundamental</a></li>
                    </ul>
                </div>

            </span>
                    <span class="hover-menu touch ">
                <span class="casa-color logo-sistema-s">=</span>

                    <span class="gtm-titulo">Saúde e Segurança</span>

                <div class="submenu hover-container no-hover">
                    <ul>
                            <li class="gtm-menugeral"><a href="#">Segurança e Saúde no Trabalho</a></li>
                    </ul>
                </div>

            </span>
                    <span class="hover-menu touch ">
                <span class="casa-color logo-sistema-s">=</span>

                    <span class="gtm-titulo">Inovação</span>
                <div class="submenu hover-container no-hover">
                    <ul>
                            <li class="gtm-menugeral"><a
                                        href="#">Torneio de Robótica FLL</a></li>
                    </ul>
                </div>
            </span>
                    <span class="hover-menu touch ">
                <span class="casa-color logo-sistema-s">=</span>

                    <span class="gtm-titulo">Conheça o SESI</span>
                <div class="submenu hover-container no-hover">
                    <ul>
                            <li class="gtm-menugeral"><a href="#">O que o SESI faz</a></li>
                    </ul>
                </div>

            </span>
                </div>

            </div>
            <div class="hidden-xs page-menu-b cl " style="">
                <ul class="page-menu">

                    <li class="gtm-menuaplicacoes"><a href="/sesi/eventos/"><i class="fa fa-calendar"></i> Eventos</a>
                    </li>

                    <li class="gtm-menuaplicacoes"><a href="/sesi/noticias"><i class="fa fa-newspaper-o"></i>
                            Notícias</a></li>

                    <li class="gtm-menuaplicacoes"><a href="/publicacoes/"><i class="fa fa-book"></i> Publicações</a>
                    </li>

                    <li class="gtm-menuaplicacoes"><a href="/sesi/redes-sociais/"><i class="fa fa-comments"></i> Redes
                            Sociais</a></li>

                    <li class="gtm-menuaplicacoes"><a href="/sesi/canais"><i class="fa fa-star-o"></i> Sites</a></li>

                    <li class="gtm-menuaplicacoes"><a href="/sesi/videos/"><i class="fa fa-play-circle-o"></i>
                            Vídeos</a></li>

                </ul>
            </div>
        </div>
    </div>
</header>
<main class="main container">
    <div class="cont cl">
        <div class="row">
            @yield('slider')
            @yield('box')
        </div>
        @yield('content')
    </div>
</main>

<footer class="footer">
    <section class="footer-top">
        <div class="">
            <div class="container">
                <div class="c-c-17 col col-xs-12 col-sm-6 col-md-3 None">
                    <h4 class="title b-22">
                        Conheça o IEL
                        <span class="icone">+</span>
                    </h4>
                    <ul>
                        <li><a href="#">O que o IEL
                                faz</a></li>
                        <li><a href="#">Missão,
                                Visão e Valores</a></li>
                        <li><a href="#">História</a></li>
                        <li><a href="#">Estrutura</a>
                        </li>
                        <li><a href="#">Relatório
                                Anual</a></li>
                        <li><a href="#">Banco de
                                consultores</a></li>
                    </ul>
                    <h4 class="title b-22">
                        Conteúdos
                        <span class="icone">+</span>
                    </h4>
                    <ul>
                        <li><a href="#">Notícias</a></li>
                        <li><a href="#">Redes Sociais</a></li>
                        <li><a href="#">Vídeos</a></li>
                        <li><a href="#">Publicações</a></li>
                        <li><a href="#">Eventos</a></li>
                        <li><a href="#">Sites</a></li>
                    </ul>
                </div>
                <div class="c-c-17 col col-xs-12 col-sm-6 col-md-3 None">
                    <h4 class="title b-22">
                        Inovação
                        <span class="icone">+</span>
                    </h4>
                    <ul>
                        <li>
                            <a href="#">Mobilizacao
                                Empresarial para Inovacao</a></li>
                        <li>
                            <a href="#">Rede
                                de Núcleos de Inovação</a></li>
                        <li><a href="#">Gestão
                                da Inovação</a></li>
                        <li><a href="#">Desenvolvimento
                                de Fornecedores</a></li>
                        <li><a href="#">Inova Talentos</a></li>
                    </ul>
                    <h4 class="title b-22">
                        Educação
                        <span class="icone">+</span>
                    </h4>
                    <ul>
                        <li><a href="#">Soluções em
                                Estágios</a></li>
                        <li><a href="#">Capacitação
                                Empresarial</a></li>
                        <li><a href="#">Educação
                                Executiva</a></li>
                        <li><a href="#">Fórum IEL
                                de Carreiras</a></li>
                    </ul>
                </div>
                <div class="c-c-17 col col-xs-12 col-sm-6 col-md-3 None">
                    <h4 class="title b-22">
                        Sistema Indústria
                        <span class="icone">+</span>
                    </h4>
                    <ul>
                        <li><a href="#">FIERO :: A força da indústria Rondôniense</a>
                        </li>
                        <li><a href="#">SESI :: Educação e qualidade de vida</a>
                        </li>
                        <li><a href="#">SENAI :: Educação e inovação</a></li>
                        <li><a href="#">IEL :: Conhecimento para a competitividade
                                empresarial</a></li>
                    </ul>
                </div>
                <div class="c-c-17 col special col-xs-12 col-sm-12 col-md-3 None">
                    <ul>
                        <li>
                            <a href="#" class="b-21">
                                <i class="fa fa-newspaper-o b-17"></i>
                                Agência de notícias
                            </a>
                        </li>
                        <li>
                            <a href="#" class="b-21">
                                <i class="fa fa-camera b-17"></i>
                                Imprensa
                            </a>
                        </li>
                        <li>
                            <a href="#" class="b-21">
                                <i class="fa fa-list-alt b-17"></i>
                                Licitações e Editais
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="footer-mid">
        <div class="">
            <div class="container">
                <section class="col-md-3 col-xs-6 col-c">
                    <div class="al-ta ">
                        <i class="fa fa-phone b-26"></i>
                        <div>
                            <h4 class="b-15"><strong>SAC - Serviço de atendimento ao cliente</strong></h4>
                            <p class="b-14">0800-647 3551</p>
                        </div>
                    </div>
                </section>
                <section class="col-md-3 col-xs-12 col-b b-12">
                    <div class="title">
                        <div class="al-ta ">
                            <i class="fa fa-envelope-o b-12 b-12"></i>
                            <div><span><strong><a href="/">
                                            FALE CONOSCO</a></strong></span></div>
                        </div>
                    </div>
                    <div class="title">
                        <div class="al-ta ">
                            <i class="fa fa-user b-12 b-12"></i>
                            <div><span><strong><a href="http://talentos.ro.senai.br/"> BANCO DE
                                            TALENTOS</a></strong></span></div>
                        </div>
                    </div>
                </section>
                <section class="col-md-3 col-xs-6 col-c">
                    <div class="al-ta ">
                        <i class="fa fa-map-marker b-26"></i>
                        <div>
                            <h4 class="title b-15"><strong>Edifício Sede FIERO</strong></h4>
                            <p class="b-14">Rua Rui Barbosa, nº 1112</p>
                            <p class="b-14">Porto Velho - RO - CEP 76.801-186</p>
                            <p class="b-14">(69) 3216-3400</p>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>
    <section class="footer-bottom">
        <div class="">
            <div class="container">
                <div class="social fl">
                    <a href="https://www.facebook.com/cnibrasil" title="Facebook" target="_blank"><i
                                class="icon icon-facebook"></i></a>
                    <a href="https://plus.google.com/+PortaldaIndustriaBr/" title="Google Plus" target="_blank"><i
                                class="icon icon-google-plus"></i></a>
                    <a href="https://twitter.com/cni_br" title="Twitter" target="_blank"><i
                                class="icon icon-twitter"></i></a>
                    <a href="https://www.youtube.com/user/cniweb" title="YouTube" target="_blank"><i
                                class="icon icon-youtube"></i></a>
                </div>
                <div class="fr privacy b-10">
                    <a href="http://www.portaldaindustria.com.br/cni/institucional/politica-de-privacidade/">POLÍTICA DE
                        PRIVACIDADE</a>
                </div>
            </div>
        </div>
    </section>
</footer>
<script type="text/javascript" src="{{ asset('frontend/assets/js/vendors.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontend/assets/js/scripts.min.js') }}"></script>
<script type="text/javascript">var switchTo5x = true;</script>
<script type="text/javascript" src="{{ asset('frontend/assets/js/buttons.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontend/plugins/mask/dist/inputmask/inputmask.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontend/plugins/mask/dist/inputmask/jquery.inputmask.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontend/plugins/validation/validate.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontend/plugins/bxslider/dist/jquery.bxslider.min.js') }}"></script>
<script type="text/javascript"
        src="{{ asset('frontend/plugins/validation/localization/messages_pt_BR.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontend/plugins/sweetalert/dist/sweetalert.min.js') }}"></script>
@yield('scripts')
<script type="text/javascript" src="{{ asset('frontend/assets/js/mustache.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontend/assets/js/typeahead.bundle.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontend/assets/js/anmap.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontend/assets/js/brazilLow.js') }}"></script>
</body>

</html>