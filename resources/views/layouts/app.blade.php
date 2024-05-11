<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <script defer src="https://cdn.jsdelivr.net/npm/@imacrayon/alpine-ajax@0.3.0/dist/cdn.min.js"></script>
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.11.1/dist/cdn.min.js"></script>



</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        
            <div class="container">
                <a class="navbar-brand" href="{{ url('/home') }}">
                    {{ config('app.name', 'Database') }}
                   
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                   
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- <a class="nav-link" href="{{route('adddelivery')}}">Delivery</a> -->
                        <!-- <a class="nav-link"href="{{route('delivery_ordered')}}">Search</a> -->
                        <!-- <a class="nav-link"href="{{route('chart1')}}">Chart</a> -->
                        <!-- <a class="nav-link"href="https://m.followme.mv/public/"  target="_blank">Vessels</a> -->
                        <!-- <a class="nav-link"href="{{route('warehouse_item_entry')}}">Items</a> -->
                        <!-- <a class="nav-link"href="{{route('warehouse_stock_entry')}}">Stock IN</a> -->
                        <a class="nav-link"href="{{route('addcustomer')}}">Customer</a>
                        <a class="nav-link"href="{{route('addvendor')}}">Supplier</a>
                        <a class="nav-link"href="{{route('billentry')}}">BillEntry</a>
                        <a class="nav-link"href="{{route('customersearch')}}">SearchCustomer</a>
                        
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        
                        <!-- Authentication Links -->
                        
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    {{-- <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>  --}}
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                    <div>
                                {{-- <a href="{{route('addcustomer')}}">Customer</a> --}}
                                </div>
                                <div>
                                {{-- <a href="{{route('addvendor')}}">Vendor</a> --}}
                                </div>
                                <div>
                                    {{-- <a href="{{route('receivegood')}}">Receive Goods</a> --}}
                                    </div>
                               
                                <div>
                                    {{-- <a href="{{route('addtracking')}}">Tracking</a> --}}
                                    </div>
                                
                                    <div>
                                    {{-- <a href="{{route('additem')}}">New Items</a> --}}
                                    </div>
                    
                                
                                
                                </div>
                                                    
                                
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
