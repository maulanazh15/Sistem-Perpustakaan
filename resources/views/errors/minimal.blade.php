<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <link rel="stylesheet" href="{{ asset('css/animate.css')}}">
        <link rel="stylesheet" href="{{ asset('css/style.css')}}">
       
    </head>
    <body class="py-20 bg-slate-400">
        <!-- ======Section Start -->
    <section class=" py-14 lg:py-20">
        <div class="container mx-auto">
            <div class="-mx-4 flex flex-wrap">
                <div class="w-full px-4">
                    <div class="wow fadeInUp relative mx-auto max-w-[850px] overflow-hidden rounded-lg bg-slate-300 py-20 px-8 text-center shadow-lg sm:px-12 md:px-[60px]"
                        data-wow-delay=".2s">
                        <h2 class="mb-8 text-3xl font-bold text-slate-600 sm:text-4xl lg:text-[40px] xl:text-[42px]">
                            @yield('code')
                        </h2>
                        <h3 class="mb-8 text-xl font-normal text-slate-500 md:text-2xl">
                            @yield('message')
                        </h3>
                        <ul class="flex flex-wrap justify-center">
                            <li>
                                <a href="/"
                                    class="mx-2 my-1 inline-block rounded-md bg-[#f5f8ff] py-3 px-6 text-base font-medium text-dark hover:bg-blue-400 hover:text-slate-700">
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="/about"
                                    class="mx-2 my-1 inline-block rounded-md bg-[#f5f8ff] py-3 px-6 text-base font-medium text-dark hover:bg-blue-400 hover:text-slate-700">
                                    About
                                </a>
                            </li>
                            <li>
                                <a href="/blog-grids"
                                    class="mx-2 my-1 inline-block rounded-md bg-[#f5f8ff] py-3 px-6 text-base font-medium text-dark hover:bg-blue-400 hover:text-slate-700">
                                    Blog
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== Section End -->
    <script src="{{ asset('js/wow.min.js') }}"></script>
    </body>
</html>
