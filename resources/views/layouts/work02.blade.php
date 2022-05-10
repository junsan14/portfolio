<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>カフェHPポートフォリオ</title>

    <!-- Scripts -->
    <script src="{{asset('js/work02.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{asset('css/work02.css') }}" rel="stylesheet">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=BIZ+UDPMincho&display=swap" rel="stylesheet">


</head>
<body>
    <header class="header">         
       
        <div class="smart-menu">
            <span class="top"></span>
            <span class="middle"></span>
            <span class="bottom"></span>     
        </div>  
        <div class="menu">
            <div class="col-sm menu-item"><a href="{{route('work', '02')}}">ご案内</a></div>
            <div class="col-sm menu-item"><a href="{{route('about','02')}}">ギャラリー</a></div>
            <div class="col-sm menu-item"><a href="{{route('articles','02')}}">お知らせ</a></div>
            <div class="col-sm menu-item"><a href="{{route('location','02')}}">店舗情報</a></div>
            <div class="col-sm menu-item"><a href="{{route('contact','02')}}">お問合せ</a></div>
            <a href="https://www.instagram.com/" target="_blank">
                <img class="col-sm menu-item" style="width: 25px;" src="{{asset('images/insta.png')}}">
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
        
        <div class="logo">
                <img src="{{ asset('images/logo.png')}}">
      
        </div>
        
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
