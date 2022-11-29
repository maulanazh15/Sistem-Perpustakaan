@include('dashboard.layouts.head')

<body>
    <div id="app">
        @include('dashboard.layouts.navbar')
        @include('dashboard.layouts.sidebar')
        <section class="is-title-bar">
            <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
                <ul>
                    <li>Admin</li>
                    <li>{{ $judul }}</li>
                </ul>
            </div>
        </section>

        <section class="is-hero-bar">
            <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
                <h1 class="title">
                    {{ $judul }}
                </h1>
                <a href="/dashboard/buku" class="card-header-icon">
                    <span class="icon"><i class="mdi mdi-reload"></i></span>
                </a>
            </div>
        </section>

        {{-- main container --}}
        <section class="section main-section">
            @yield('container')
        </section>

        @include('dashboard.layouts.footer')


    </div>

    <!-- Scripts below are for demo only -->
    <script type="text/javascript" src="/js/main.min.js?v=1669542423579"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
    <script type="text/javascript" src="/js/chart.sample.min.js"></script>


    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '658339141622648');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=658339141622648&ev=PageView&noscript=1" /></noscript>
    {{-- <script src="{{ asset('/node_modules/@material-tailwind/html/scripts/ripple.js')}}"></script> --}}
    {{-- <script src="https://unpkg.com/@material-tailwind/html@latest/scripts/ripple.js"></script> --}}
    <!-- Icons below are for demo only. Feel free to use any icon pack. Docs: https://bulma.io/documentation/elements/icon/ -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font@6.9.96/css/materialdesignicons.min.css">

</body>

</html>
