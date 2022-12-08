<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="Belpets">
    <title>Belpets</title>
   <link rel="shortcut icon" href="{{ asset('img/logo1.png') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.5.5/css/simple-line-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/gh/lipis/flag-icons@6.6.6/css/flag-icons.min.css"
    />
</head>

<body class="site">
<nav class="navbar navbar-light navbar-expand-lg fixed-top clean-navbar" id="navbar">
    <div class="container">
        <a class="navbar-brand" href="">
            <img src="{{ asset('img/logo1.png') }}" class="d-inline-block" style="max-height: 60px; max-width: 180px; width: auto; height: auto;" alt="">
            Belpets
        </a>
        <button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><i class="icon-menu icon" style="color: #fff"></i></button>
        <div
            class="collapse navbar-collapse" id="navcol-1">
            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item" role="presentation"><a class="nav-link" href="{{ url('/') }}">HOME</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="{{ url('/') }}">О нас</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="{{ url('/') }}">Бренды</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="{{ url('/') }}">Товары</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="{{ url('/') }}">Контакты</a></li>
            </ul>
        </div>
    </div>
</nav>

<main class="page site-content">
    @yield('content')
</main>
<!-- Start: Footer Dark -->
<footer class="page-footer">
    <div class="footer-copyright dark">
        <p>Belpets - Cagatay Pet Foods - ООО “Белпетс“ дистрибьютор кормов для домашних животных компании "Çağatay Evcil Hayvan Mamaları ve Yem Ürünleri San. ve Tic. A.Ş." на территории Республики Беларусь.</p>
    </div>
</footer>
<!-- End: Footer Dark -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script>
$(window).scroll(function(){
    if($(window).scrollTop() > 100){
        $(".navbar-light").css("background-color","#ffffff")
        $(".nav-link").css("color","#1a1a1a")
        $(".navbar-brand").css("color","#1a1a1a")
    };
    if($(window).scrollTop() < 100){
        $(".navbar-light").css("background-color","transparent")
        $(".nav-link").css("color","rgb(255, 255, 255)")
        $(".navbar-brand").css("color","rgb(255, 255, 255)")
    };

});
</script>
