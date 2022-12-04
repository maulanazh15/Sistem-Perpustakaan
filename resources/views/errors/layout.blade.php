<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<body class="bg-primary">
    <!-- ====== 404 Section Start -->
    {{-- <section class="bg-white py-14 lg:py-20">
        <div class="container">
            <div class="-mx-4 flex flex-wrap">
                <div class="w-full px-4">
                    <div class="wow fadeInUp relative mx-auto max-w-[850px] overflow-hidden rounded-lg bg-white py-20 px-8 text-center shadow-lg sm:px-12 md:px-[60px]"
                        data-wow-delay=".2s">
                        <h2 class="mb-8 text-3xl font-bold text-dark sm:text-4xl lg:text-[40px] xl:text-[42px]">
                            @yield('code')
                        </h2>
                        <h3 class="mb-8 text-xl font-normal text-dark-700 md:text-2xl">
                            @yield('message')
                        </h3>
                        <ul class="flex flex-wrap justify-center">
                            <li>
                                <a href="/"
                                    class="mx-2 my-1 inline-block rounded-md bg-[#f5f8ff] py-3 px-6 text-base font-medium text-dark hover:bg-primary hover:text-white">
                                    Home
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- ====== 404 Section End -->
    <!-- ====== Error 404 Section Start -->
    <section class="relative z-10 py-[120px]">
        <div class="container mx-auto">
            <div class="-mx-4 flex">
                <div class="w-full px-4">
                    <div class="mx-auto max-w-[400px] text-center">
                        <h2 class="mb-2 text-[50px] font-bold leading-none text-white sm:text-[80px] md:text-[100px]">
                            @yield('code')
                        </h2>
                        <h4 class="mb-3 text-[22px] font-semibold leading-tight text-white">
                            @yield('message')
                        </h4>
                        <p class="mb-8 text-lg text-white">
                            The page you are looking for it maybe deleted
                        </p>
                        <a href="/"
                            class="hover:text-primary inline-block rounded-lg border border-white px-8 py-3 lg:mt-4 md:mt-[6px] text-center text-base font-semibold text-white transition hover:bg-white">
                            Go To Home
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div
            class="absolute top-0 left-0 -z-10 flex h-full w-full items-center justify-between space-x-5 md:space-x-8 lg:space-x-14">
            <div class="h-full w-1/3 bg-gradient-to-t from-[#FFFFFF14] to-[#C4C4C400]"></div>
            <div class="flex h-full w-1/3">
                <div class="h-full w-1/2 bg-gradient-to-b from-[#FFFFFF14] to-[#C4C4C400]"></div>
                <div class="h-full w-1/2 bg-gradient-to-t from-[#FFFFFF14] to-[#C4C4C400]"></div>
            </div>
            <div class="h-full w-1/3 bg-gradient-to-b from-[#FFFFFF14] to-[#C4C4C400]"></div>
        </div>
    </section>
    <!-- ====== Error 404 Section End -->

</body>

</html>
