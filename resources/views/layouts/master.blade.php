<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- links start -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link
      rel=" icon"
      type="x-icon"
      href="/img/information_icon-icons.com_52388.ico"
    />
    <link rel="stylesheet" href="/input.css" />
    <script
      type="module"
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"
    ></script>
    <link
      href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@700&family=Open+Sans&family=Raleway:wght@700&family=Rancho&display=swap"
      rel="stylesheet"
    />
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
      integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
      integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

        <!-- owl crousel cdn link -->
        <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
    />

    <!-- links start ends -->

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <!-- <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet"> -->
    <link href="{{asset ('assets/css/styles.css') }}" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    @include('layouts.inc.navbar')
    <main>
        @yield('content')
        @yield('uiux')
        @yield('websitedevelopment')
        @yield('ecommerce')
        @yield('customsoftwaredevelopment')
        @yield('dataScience')
        @yield('mobileAppDevelopment')
        @yield('graphicDesigning')
        @yield('SLA')
        @yield('contentWriting')
        @yield('career')
        @yield('blog')
        @yield('blogPost1')
        @yield('aboutUs')
        @yield('contactUs')
        @yield('faqs')
        @yield('appointment')
    </main>
    @include('layouts.inc.footer')



</body>

    <!-- jQuery (Make sure to include this before Owl Carousel) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Owl Carousel JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<script>
      //for navbar button start
      function Menu(e) {
        let list = document.querySelector("ul");
        e.name === "menu"
          ? ((e.name = "close"),
            list.classList.add("top-[80px]"),
            list.classList.add("opacity-100"))
          : ((e.name = "menu"),
            list.classList.remove("top-[80px]"),
            list.classList.remove("opacity-100"));
      }
      //for navbar button end


    const accordionHeaders = document.querySelectorAll(".accordian_header");
      accordionHeaders.forEach((accordianheader) => {
        accordianheader.addEventListener("click", (event) => {
          accordianheader.classList.toggle("active");

          const accordianbody = accordianheader.nextElementSibling;

          if (accordianheader.classList.contains("active")) {
            accordianbody.style.maxHeight = accordianbody.scrollHeight + "px";
          } else {
            accordianbody.style.maxHeight = 0;
          }
        });
      });

      $(document).ready(function () {
        $(".owl-carousel").owlCarousel({
          loop: true,
          margin: 20,
          responsiveClass: true,
          responsive: {
            0: {
              items: 1,
              nav: true,
            },
            768: {
              items: 2,
              nav: true,
            },
            1024: {
              items: 3,
              nav: true,
            },
          },
        });
      });
</script>
</html>
