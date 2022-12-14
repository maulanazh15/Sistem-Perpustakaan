<!DOCTYPE html>


<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
        {{ $title }} | Siperpus
    </title>
    <link rel="shortcut icon" href="/images/logo/favicon.svg" type="image/x-icon" />
    <!-- Material Icons Link -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />

    <!-- Font Awesome Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
        integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w=="
        crossorigin="anonymous" />
    <link rel="stylesheet" href="/css/animate.css">
    <link rel="stylesheet" href="/css/style.css">
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <!-- ==== WOW JS ==== -->
    <script src="/js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
</head>

<body>
    @include('partials.navbar')
    @if (!request()->is('/'))
        @include('partials.banner')
    @endif
    {{-- @include('partials.banner') --}}
    @yield('container')
    @include('partials.footer')

    <!-- ====== Back To Top Start -->
    <a href="javascript:void(0)"
        class="back-to-top fixed bottom-8 right-8 left-auto z-[999] hidden h-10 w-10 items-center justify-center rounded-md bg-primary text-white shadow-md transition duration-300 ease-in-out hover:bg-dark">
        <span class="mt-[6px] h-3 w-3 rotate-45 border-t border-l border-white"></span>
    </a>
    <!-- ====== Back To Top End -->

    <!-- ====== All Scripts -->

    <script src="/js/main.js"></script>
    <script>
        // ==== for menu scroll
        // const pageLink = document.querySelectorAll(".ud-menu-scroll");

        // pageLink.forEach((elem) => {
        //   elem.addEventListener("click", (e) => {
        //     e.preventDefault();
        //     document.querySelector(elem.getAttribute("href")).scrollIntoView({
        //       behavior: "smooth",
        //       offsetTop: 1 - 60,
        //     });
        //   });
        // });

        // section menu active
        // function onScroll(event) {
        //   const sections = document.querySelectorAll(".ud-menu-scroll");
        //   const scrollPos =
        //     window.pageYOffset ||
        //     document.documentElement.scrollTop ||
        //     document.body.scrollTop;

        //   for (let i = 0; i < sections.length; i++) {
        //     const currLink = sections[i];
        //     const val = currLink.getAttribute("href");
        //     const refElement = document.querySelector(val);
        //     const scrollTopMinus = scrollPos + 73;
        //     if (
        //       refElement.offsetTop <= scrollTopMinus &&
        //       refElement.offsetTop + refElement.offsetHeight > scrollTopMinus
        //     ) {
        //       document
        //         .querySelector(".ud-menu-scroll")
        //         .classList.remove("active");
        //       currLink.classList.add("active");
        //     } else {
        //       currLink.classList.remove("active");
        //     }
        //   }
        // }

        // window.document.addEventListener("scroll", onScroll);
    </script>

</body>

</html>
