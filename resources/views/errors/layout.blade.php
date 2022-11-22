<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/animate.css')}}">
    <link rel="stylesheet" href="{{ asset('css/tailwind.css')}}">

</head>

<body>
    <!-- ====== 404 Section Start -->
    <section class="bg-white py-14 lg:py-20">
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
    </section>
    <!-- ====== 404 Section End -->
</body>

</html>
