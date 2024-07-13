<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
    <!-- Author -->
    <meta name="author" content="Thunderbold">
    <!-- description -->
    <meta name="description" content="Thunderbold Criação de Sites e Web Design">
    <!-- keywords -->
    <meta name="keywords" content="webdesign, website, development, service, site, desenvolvimento, serviço, tecnologia, technology">
    <!-- Page Title -->
    <title>Thunderbold</title>
    <!-- Favicon -->
    <link href="minimal-creative/images/favicon.ico" rel="icon">
    <!-- Bundle -->
    <link href="vendor/css/bundle.min.css" media="screen" rel="stylesheet">
    <!-- Plugin Css -->
    <link href="vendor/css/LineIcons.min.css" media="screen" rel="stylesheet">
    <link href="vendor/css/jquery.fancybox.min.css" media="screen" rel="stylesheet">
    <link rel="stylesheet" media="screen" href="vendor/css/owl.carousel.min.css">
    <link href="vendor/css/cubeportfolio.min.css" media="screen" rel="stylesheet">
    <!-- Style Sheet -->
    <link href="minimal-creative/css/line-awesome.min.css" media="screen" rel="stylesheet">
    <link rel="preload" href="minimal-creative/css/style.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="minimal-creative/css/style.css"></noscript>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async defer src="https://www.googletagmanager.com/gtag/js?id=G-GVBTQ1JC43"></script>
    <script async defer>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-GVBTQ1JC43');
        gtag('config', 'AW-10950657645');
    </script>
</head>

<body class="budget" data-spy="scroll" data-target=".navbar" data-offset="90">

<!-- Start Loader -->
<div class="loader" id="loader-fade">
    <div class="loader-container center-block">
        <div class="grid-row">
            <div class="col center-block">
                <ul class="loading reversed">
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End Loader -->

<!-- Header Start -->
<header class="top-header cursor-light">
    <div class="row no-gutters">
        <div class="col-4 col-lg-4">
            <a href="/" title="Logo" class="logo link">
                <!--Logo Default-->
                <img width="80" height="80" src="minimal-creative/images/logo_symbol_mini.webp" alt="logo" class="ml-lg-3 m-0">
            </a>
        </div>
        <div class="col-8 col-lg-4 d-flex align-items-center justify-content-end justify-content-lg-center">
            <a class="menu_bars menu-bars-setting sidemenu_toggle link mr-3 mr-lg-0">
                <div class="menu-lines">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </a>
        </div>
    </div>
<div>
    <!-- Center Menu -->
    <div class="side-menu center">
        <div class="quarter-circle" id="btn_sideNavClose">
            <div class="menu_bars2 active link">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <div class="inner-wrapper justify-content-center">
            <div class="col-md-12 text-center">
                <a href="javascript:void(0)" class="logo-full mb-4 link"><img src="minimal-creative/images/logo.webp" alt="Logo"></a>
            </div>
            <nav class="side-nav m-0">
                <ul class="navbar-nav flex-lg-row">
                    <li class="nav-item"> <a href="#home" class="scroll nav-link link">Início</a></li>
                    <li class="nav-item"> <a href="#about" class="scroll nav-link link">Serviços</a></li>
                    <li class="nav-item"> <a href="#portfolio" class="scroll nav-link link">Portifólio</a></li>
                    <li class="nav-item"> <a href="#contact-sec" class="scroll nav-link link">Contato</a></li>
                </ul>
            </nav>

            <div class="side-footer text-black w-100">
                <ul class="social-icons-simple">
                    <li class="side-menu-icons animated-wrap"><a href="https://www.facebook.com/thunderbold.ltda" aria-label="Facebook" target="_blank" class="animated-element"><i class="fab fa-facebook-square"></i> </a> </li>
                    <li class="side-menu-icons animated-wrap"><a href="https://wa.me/5511939011358?text=" aria-label="WhatsApp" target="_blank" class="animated-element"><i class="fab fa-whatsapp-square"></i> </a> </li>
                    <li class="side-menu-icons animated-wrap"><a href="https://www.linkedin.com/company/thunderbold/" aria-label="LinkedIn" target="_blank" class="animated-element"><i class="fab fa-instagram"></i> </a> </li>
                    <li class="side-menu-icons animated-wrap"><a href="https://www.instagram.com/thunderbold_ltda/" aria-label="Instagram" target="_blank" class="animated-element"><i class="fab fa-linkedin-in"></i> </a> </li>
                </ul>
                <p class="text-black"><?= date('Y')?> Thunderbold®</p>
            </div>
        </div>
    </div>
    <a id="close_side_menu" href="javascript:void(0);"></a>
    <!--Side Menu-->
</div>
</header>
<!-- Header End -->

<div class="row top-barra">
    <label for="barra"><span></span></label>
    <div class="container-barra">
        <div class="barra" id="budgetPercent"></div>
    </div>
</div>

<!--Budget Start-->
<div class="content">
    <section class="budget-sec" id="budget-sec-1">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-12">
                    <div class="row">
                        <div class="col-1"></div>
                        <div class="col-12 col-md-10 d-flex justify-content-left">
                            <b>1. O seu projeto é uma ideia pessoal em fase inicial ou é um projeto para uma empresa com escopo planejado? *</b><div class="circle"><strong></strong></div>
                        </div>
                        <div class="col-1"></div>
                    </div>
                    <form class="row contact-form" id="contact-form-data">
                        <div class="col-1"></div>
                        <div class="col-12 col-md-10 d-flex justify-content-center">
                            <input type="text" required name="project_type" placeholder="Ideia pessoal ou projeto com escopo definido" class="form-control">
                        </div>
                        <div class="col-1">
                            <a href="javascript:void(0);" class="btn btn-blue-invert rounded-pill w-100 budget_btn"><i class="fas fa-arrow-right"></i></a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section class="budget-sec" id="budget-sec-2">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-12">
                    <div class="row">
                        <div class="col-1"></div>
                        <div class="col-12 col-md-10 d-flex justify-content-left">
                            <b>2. Você já tem o design de telas? *</b><i>Exemplo: Protótipo no Adobe XD, Sketch, Figma, etc.<i><div class="circle"><strong></strong></div>
                        </div>
                        <div class="col-1"></div>
                    </div>
                    <form class="row contact-form" id="contact-form-data">
                        <div class="col-1"></div>
                        <div class="col-12 col-md-10 d-flex justify-content-center">
                            <input type="text" required name="user_has_screen_design" placeholder="Se sim coloque em qual ferramenta" class="form-control">
                        </div>
                        <div class="col-1">
                            <a href="javascript:void(0);" class="btn btn-blue-invert rounded-pill w-100 budget_btn"><i class="fas fa-arrow-right"></i></a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section class="budget-sec" id="budget-sec-3">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-12">
                    <div class="row">
                        <div class="col-1"></div>
                        <div class="col-12 col-md-10 d-flex justify-content-left">
                            <b>3. Já possui site pessoal ou corporativo? *</b><i>Se sim digite também o endereço url do site (Exemplo: www...)</i><div class="circle"><strong></strong></div>
                        </div>
                        <div class="col-1"></div>
                    </div>
                    <form class="row contact-form" id="contact-form-data">
                        <div class="col-1"></div>
                        <div class="col-12 col-md-10 d-flex justify-content-center">
                            <input type="text" required name="user_has_site" placeholder="www..." class="form-control">
                        </div>
                        <div class="col-1">
                            <a href="javascript:void(0);" class="btn btn-blue-invert rounded-pill w-100 budget_btn"><i class="fas fa-arrow-right"></i></a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section class="budget-sec" id="budget-sec-4">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-12">
                    <div class="row">
                        <div class="col-1"></div>
                        <div class="col-12 col-md-10 d-flex justify-content-left">
                            <b>4. Você já tem algo desenvolvido? *</b><i>Exemplo: back-end, front-end, banco de dados, etc.</i><div class="circle"><strong></strong></div>
                        </div>
                        <div class="col-1"></div>
                    </div>
                    <form class="row contact-form" id="contact-form-data">
                        <div class="col-1"></div>
                        <div class="col-12 col-md-10 d-flex justify-content-center">
                            <input type="text" required name="project_stage" placeholder="Descrever o que já existe e se não tiver nada digite não" class="form-control">
                        </div>
                        <div class="col-1">
                            <a href="javascript:void(0);" class="btn btn-blue-invert rounded-pill w-100 budget_btn"><i class="fas fa-arrow-right"></i></a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section class="budget-sec" id="budget-sec-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-12">
                    <div class="row">
                        <div class="col-1"></div>
                        <div class="col-12 col-md-10 d-flex justify-content-left">
                            <b>5. O que será desenvolvido? *</b><i>Exemplo: Aplicativo IOS, Android, Site Web, Portal Administrativo, etc.</i><div class="circle"><strong></strong></div>
                        </div>
                        <div class="col-1"></div>
                    </div>
                    <form class="row contact-form" id="contact-form-data">
                        <div class="col-1"></div>
                        <div class="col-12 col-md-10 d-flex justify-content-center">
                            <input type="text" required name="project_definition" placeholder="Pode detalhar" class="form-control">
                        </div>
                        <div class="col-1">
                            <a href="javascript:void(0);" class="btn btn-blue-invert rounded-pill w-100 budget_btn"><i class="fas fa-arrow-right"></i></a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
<!--Budget End-->


<a href="https://wa.me/5511939011358?text=" aria-label="WhatsApp" style="position:fixed;width:55px;height:55px;bottom:25px;right:30px;background-color:#4BA586;color:#FFF;border-radius:50px;text-align:center;font-size:30px;box-shadow: 1px 1px 2px #888;z-index:1000;" target="_blank">
    <i style="margin-top:13px" class="fab fa-whatsapp"></i>
</a>

<!--Animated Cursor-->
<div id="animated-cursor">
    <div id="cursor">
        <div id="cursor-loader"></div>
    </div>
</div>

<!-- JavaScript -->
<script src="vendor/js/bundle.min.js"></script>
<!-- Plugin Js -->
<script src="vendor/js/jquery-circle-progress/dist/circle-progress.js"></script>
<script src="vendor/js/jquery.appear.js"></script>
<script src="vendor/js/jquery.fancybox.min.js"></script>
<script src="vendor/js/owl.carousel.min.js"></script>
<script src="vendor/js/morphext.min.js"></script>
<script src="vendor/js/wow.min.js"></script>
<script src="vendor/js/jquery.cubeportfolio.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- CUSTOM JS -->
<script src="minimal-creative/js/TweenMax.min.js"></script>
<script src="vendor/js/contact_us.js"></script>
<script src="minimal-creative/js/script.js"></script>
<!-- LightWidget WIDGET -->
<script async defer src="https://cdn.lightwidget.com/widgets/lightwidget.js"></script>
</body>
</html>