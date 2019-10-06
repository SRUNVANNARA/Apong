<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


        <title>អាប៉ោង - កម្មវិធី​ហ្គេម​អាប៉ោង - Apong - Apong Game</title>
        <meta name="description" content="កម្មវិធី​អាប៉ោង​នេះ​ជា​កម្មវិធី​កម្សាន្ត​មួយ​ដែល​ផ្ដល់​នូវ​លទ្ធផល​ចៃដន្យ​ពី​លេខ​ ១ ដល់ ៦ ។ដូច្នេះ​វា​ផ្ដល់​នូវ​ភាព​យុត្តិធម៌​សម្រាប់​អ្នក​លេង​ មិន​ថា​មេ ឬ​អ្នក​ចាក់​ឡើយ ។ សូម​អរគុណ សូម​សំណាងល្អ ។">
        <meta http-equiv="content-type" content="text/html;charset=UTF-8">

        <script type="application/ld+json">
            {
              "@context" : "http://schema.org",
              "@type" : "Product",
              "name" : "អាប៉ោង",
              "image" : "https://asvet.net/storage/images/result-board.png",
              "brand" : {
                "@type" : "Brand",
                "logo" : "https://asvet.net/storage/images/h6.png"
              }
            }
        </script>

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <style>

        .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: transparent;
            color: white;
            text-align: center;
        }
    </style>
</head>
<body >
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                @auth
                    <a class="navbar-brand" href="{{ url('/home') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                @else
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                @endauth

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}"><i class="fa fa-star" aria-hidden="true" style="color:green"></i>{{ __(' វាយតម្លៃកម្មវិធី') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
{{--                                    <a class="nav-link" href="{{ route('register') }}">{{ __('ចុះឈ្មោះ') }}</a>--}}
                                </li>
                                <a class="nav-link" href="/about"><i class="fa fa-info-circle" aria-hidden="true" style="color:green"></i>{{ __(' អំពីកម្មវិធី') }}</a>
                            @endif
                        @else
                            <li>
                                <a class="nav-link" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <i class="fa fa-star" aria-hidden="true" style="color:blue"></i>{{ __(' វាយតម្លៃកម្មវិធី') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        <li>
                            <a class="nav-link" href="/about"><i class="fa fa-info-circle" aria-hidden="true" style="color:green"></i>{{ __(' អំពីកម្មវិធី') }}</a>
                        </li>
{{--                            <li class="nav-item dropdown">--}}
{{--                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>--}}
{{--                                    {{ Auth::user()->name }} <span class="caret"></span>--}}
{{--                                </a>--}}

{{--                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">--}}
{{--                                    <a class="dropdown-item" href="{{ route('logout') }}"--}}
{{--                                       onclick="event.preventDefault();--}}
{{--                                                     document.getElementById('logout-form').submit();">--}}
{{--                                        {{ __('ចេញ') }}--}}
{{--                                    </a>--}}

{{--                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
{{--                                        @csrf--}}
{{--                                    </form>--}}
{{--                                </div>--}}
{{--                            </li>--}}
                        @endguest

                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-5">
            @yield('content')
        </main>
    </div>

    @yield('script')

</body>
</html>
