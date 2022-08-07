<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>junsan14｜HP制作開発</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{asset('css/app.css') }}" rel="stylesheet">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c:wght@100;300;400&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
</head>
<body>
    <header class="header">
        <div class="logo">
            <a href="{{route('index')}}">JUNSAN14</a>
        </div>
        <div class="smart-menu">
            <span class="top"></span>
            <span class="middle"></span>
            <span class="bottom"></span>     
        </div>  
        <div class="menu">
            <div class="col-sm menu-item"><a href="{{route('index')}}">ABOUT</a></div>
            <div class="col-sm menu-item"><a href="{{route('plan')}}/">WORK</a></div>
            <div class="col-sm menu-item"><a href="http://www.googlesheetsguide.tech/" target="_blank">BLOG</a></div>
            <div class="col-sm menu-item"><a href="{{route('contact.index')}}">CONTACT</a></div>
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
            <p>CopyRight reserved by jun 2022</p>
        </div>
    </footer>

</body>
</html>
