<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Bruno+Ace&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap"
        rel="stylesheet">
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var splide = new Splide('.splide');
            splide.mount();
        });
    </script>
    <script src="
                                                    https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js
                                                    "></script>
    <link href="
https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css
" rel="stylesheet">

    <style type="text/tailwindcss">
        @layer utilities {
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

            .biru {
                background-color: #1780BB;
            }

            .biru-muda {
                background-color: #A8D5FB;
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
</head>

<body>
    @include('components.navbar')
    <main>
        @yield('content')
    </main>
    @include('components.footer')
</body>

</html>
