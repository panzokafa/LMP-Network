<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="{{ asset('images/logo2.png') }}">
    <title>LMP Networks</title>

    <!-- Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Bruno+Ace&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800&display=swap"
        rel="stylesheet">

    <!-- BX Slider -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>

    <!-- TW Elements -->
    <script type="text/javascript" src="../node_modules/tw-elements/dist/js/tw-elements.umd.min.js"></script>

    <!-- Splide -->
    <script
        src="https://cdn.jsdelivr.net/npm/@splidejs/splide-extension-auto-scroll@0.5.3/dist/js/splide-extension-auto-scroll.min.js">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="message-route" content="{{ route('users.message', ':userId') }}">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/97d4904ad5.js" crossorigin="anonymous"></script>

    <!-- Scroll Reveal -->
    <script src="https://unpkg.com/scrollreveal"></script>

    <style type="text/tailwindcss">
        @layer utilities {
            .no-scrollbar::-webkit-scrollbar {
                display: none;
            }

            * {
                font-family: 'Inter', sans-serif;
            }

            .poppins {
                font-family: 'Poppins', sans-serif;
            }

            .bruno {
                font-family: 'Bruno Ace', sans-serif;
            }

            .inter {
                font-family: 'Inter', sans-serif;
            }

            .text-hijau {
                color: #17D000;
            }

            .hijau {
                background-color: #17D000;
            }

            .text-biru {
                color: #1780BB;
            }

            .text-biru-tua {
                color: #112645;
            }

            .biru {
                background-color: #1780BB;
            }

            .biru-muda {
                background-color: #A8D5FB;
            }

            .text-biru-muda {
                color: #A8D5FB;
            }

            .text-biru-muda-2 {
                color: #E6F6FE;
            }

            .biru-muda-2 {
                background-color: #E6F6FE;
            }

            .biru-tua {
                background-color: #112645;
            }

            .opensans {
                font-family: 'Open Sans', sans-serif;
            }
        }
    </style>
    @livewireStyles
</head>

<body>
    @include('components.navbar')

    @if (!isset($isAdmin) || (!$isAdmin && auth()->user()))
        @livewire('floating-chat')
    @endif

    <main class="relative md:top-20 top-16 mb-[63px] overflow-x-hidden">
        @yield('content')
        @yield('javascript')
    </main>

    <div class="relative bottom-0">
        @include('components.footer')
    </div>

    @livewireScripts

    <script>
        $(document).ready(function() {
            $(".slider").bxSlider({
                touchEnabled: false,
                auto: true,
                pause: 3000
            });
        });

        document.addEventListener('DOMContentLoaded', function() {
            const splide = new Splide('#splide', {
                type: 'loop',
                drag: 'free',
                focus: 'center',
                perPage: 2,
                autoScroll: {
                    speed: 1,
                },
            });
            splide.mount(window.splide.Extensions);

            const splide2 = new Splide('#splide2', {
                type: 'loop',
                drag: 'free',
                focus: 'center',
                perPage: 1,
                autoScroll: {
                    speed: 1,
                },
            });
            splide2.mount(window.splide.Extensions);
        });
    </script>
</body>

</html>
