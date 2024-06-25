<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Auto Lampy</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/e37acf9c2e.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="{{asset('css/main.css')}}" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-KDJKGCHW');</script>
    <!-- End Google Tag Manager -->
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KDJKGCHW"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <!-- Messenger Wtyczka czatu Code -->
    <div id="fb-root"></div>

    <!-- Your Wtyczka czatu code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>
    <!--Nav-->
    <nav class="bg-white fixed w-full z-20 top-0 start-0 border-b border-gray-200">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="{{route('index')}}" class="flex items-center space-x-4 rtl:space-x-reverse">
                <img alt="" src="{{asset('photo/logo.png')}}" class="w-28">
            </a>
            <div class="flex md:order-2 space-x-4 md:space-x-0 rtl:space-x-reverse">
                <a href="tel:+48791066550" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-white bg-carrot-500 hover:bg-carrot-600 focus:ring-4 focus:outline-none focus:ring-carrot-300 font-medium rounded-lg text-sm px-4 py-2 text-center"><i class="fa-solid fa-phone"></i></a>
                <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200" aria-controls="navbar-sticky" aria-expanded="false">
                    <i class="fa-solid fa-bars"></i>
                </button>
            </div>
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white">
                    @if(request()->routeIs('index'))
                    <li>
                        <a href="{{route('index')}}" class="block py-2 px-4 text-white bg-carrot-500 rounded md:bg-transparent md:text-carrot-500 md:p-0" aria-current="page">Strona główna</a>
                    </li>
                    @else
                    <li>
                        <a href="{{route('index')}}" class="block py-2 px-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-carrot-500 md:p-0">Strona główna</a>
                    </li>
                    @endif
                    @if(request()->routeIs('about'))
                    <li>
                        <a href="{{route('about')}}" class="block py-2 px-4 text-white bg-carrot-500 rounded md:bg-transparent md:text-carrot-500 md:p-0" aria-current="page">O nas</a>
                    </li>
                    @else
                    <li>
                        <a href="{{route('about')}}" class="block py-2 px-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-carrot-500 md:p-0">O nas</a>
                    </li>
                    @endif
                    @if(request()->routeIs('service'))
                    <li>
                        <a href="{{route('service')}}" class="block py-2 px-4 text-white bg-carrot-500 rounded md:bg-transparent md:text-carrot-500 md:p-0" aria-current="page">Usługi</a>
                    </li>
                    @else
                    <li>
                        <a href="{{route('service')}}" class="block py-2 px-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-carrot-500 md:p-0">Usługi</a>
                    </li>
                    @endif
                    @if(request()->routeIs('shipment'))
                    <li>
                        <a href="{{route('shipment')}}" class="block py-2 px-4 text-white bg-carrot-500 rounded md:bg-transparent md:text-carrot-500 md:p-0" aria-current="page">Wysyłka</a>
                    </li>
                    @else
                    <li>
                        <a href="{{route('shipment')}}" class="block py-2 px-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-carrot-500 md:p-0">Wysyłka</a>
                    </li>
                    @endif
                    @if(request()->routeIs('contact'))
                    <li>
                        <a href="{{route('contact')}}" class="block py-2 px-4 text-white bg-carrot-500 rounded md:bg-transparent md:text-carrot-500 md:p-0" aria-current="page">Kontakt</a>
                    </li>
                    @else
                    <li>
                        <a href="{{route('contact')}}" class="block py-2 px-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-carrot-500 md:p-0">Kontakt</a>
                    </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    <!--Main-->
    <main class="mt-20">
        @yield('content')
    </main>

    <!--Footer-->
    <footer class="flex flex-col items-center bg-white text-center">
        <div class="container py-4">
            <div class="py-4 flex justify-center border-b">
                <a href="https://www.facebook.com/AutoGammapl" class="mx-4 text-gray-800">
                    <i class="fa-brands fa-facebook"></i>
                </a>
                <a href="https://www.instagram.com/autogamma.pl/?hl=pl" class="mx-4 text-gray-800">
                    <i class="fa-brands fa-instagram"></i>
                </a>
            </div>
        </div>
        <div class="w-full bg-white p-4 text-center text-gray-700">
            © 2023
            <a class="text-gray-800" href="tel:+48451670344">Karol Wiśniewski</a>
        </div>
    </footer>

    @livewireScripts
    <script>
        $(document).ready(function() {
            // Po kliknięciu w ikonę hamburger menu
            $('[data-collapse-toggle="navbar-sticky"]').click(function() {
                // Znajdź element z id navbar-sticky i przełącz klasę 'hidden'
                $('#navbar-sticky').toggleClass('hidden');
            });

            // Dodaj obsługę zamykania menu bocznego po kliknięciu w link wewnątrz sidebara
            $('#navbar-sticky a').click(function() {
                // Jeśli jesteśmy w trybie mobilnym (menu boczne jest widoczne), schowaj side bar po kliknięciu w link
                if ($('#navbar-sticky').hasClass('hidden')) {
                    $('#navbar-sticky').removeClass('hidden');
                }
            });
        });
    </script>
    <script>
        var chatbox = document.getElementById('fb-customer-chat');
        chatbox.setAttribute("page_id", "108925447936152");
        chatbox.setAttribute("attribution", "biz_inbox");
    </script>

    <!-- Your SDK code -->
    <script>
        window.fbAsyncInit = function() {
            FB.init({
                xfbml: true,
                version: 'v18.0'
            });
        };

        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = 'https://connect.facebook.net/pl_PL/sdk/xfbml.customerchat.js';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
</body>

</html>