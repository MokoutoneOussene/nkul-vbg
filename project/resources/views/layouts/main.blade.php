<!doctype html>
<html lang="zxx">

<head>

    @include('layouts.style')
    <style>
        .champs {
            background-color: transparent;
            border: 0;
            border-bottom: 2px solid rgb(32, 30, 30);
            width: 100%;
            height: 40px;
            color: #a59b07;
        }
    </style>

</head>

<body>

    <div class="art-app">
        <div class="art-mobile-top-bar"></div>
        <div class="art-app-wrapper">
            <div class="art-app-container">

                @include('require.info_bar')

                <div class="art-content">
                    <div class="art-curtain"></div>
                    <div class="transition-fade" id="swup">
                        <div id="scrollbar" class="art-scroll-frame">

                            @yield('homecontent')

                        </div>
                    </div>
                </div>

                @include('require.menu_bar')

            </div>
        </div>
        <div class="art-preloader">
            <div class="art-preloader-content">
                <h4>NKUL VGB</h4>
                <div id="preloader" class="art-preloader-load"></div>
            </div>
        </div>
    </div>

    @include('layouts.script')

</body>

</html>
