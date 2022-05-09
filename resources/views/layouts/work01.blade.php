<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>韓国惣菜BANCHAN</title>

    <!-- Scripts -->
    <script src="{{ secure_asset('js/work01.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ secure_asset('css/work01.css') }}" rel="stylesheet">


    
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=RocknRoll+One&display=swap" rel="stylesheet">  

</head>
<body>
    <header class="header">         
        <h6 class="shop-name"> 韓国惣菜BANCHAN </h6>
        <div class="smart-menu">
            <span class="top"></span>
            <span class="middle"></span>
            <span class="bottom"></span>     
        </div>  
        <div class="menu">
            <div class="col-sm menu-item"><a href="#about">ABOUT</a></div>
            <div class="col-sm menu-item"><a href="#menu">MENU</a></div>
            <div class="col-sm menu-item"><a href="#location">LOCATION</a></div>
            <div class="col-sm menu-item"><a href="#contact">CONTACT</a></div>
            <a href="tel:044-299-9162" target="_blank">
                <img class="col-sm menu-item" style="width: 30px;" src="{{asset('images/tel.png')}}">
            </a>
            <a href="https://www.instagram.com/banchan_yurigaoka/" target="_blank">
                <img class="col-sm menu-item" style="width: 20px;" src="{{asset('images/work01/insta.png')}}">
            </a>
            @guest
            @else
            <div class="col-sm menu-item"><a href="{{ route('logout') }}" 
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> {{ __('Logout') }}</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
            
            </div> 
            @endguest 

        
        </div> 
    </header>
     @if (session('flash_message'))
            <div class="flash-message js-flash-message">
                {{ session('flash_message') }}
            </div>
    @endif

        
        <main class="main">
        <div class="container">
            @yield('content')
        </div>
        </main>

    <footer class="footer">
        <div class="copyright">
            <p>CopyRight reserved by BANCHAN 2022</p>
        </div>
    </footer>

</body>
</html>
