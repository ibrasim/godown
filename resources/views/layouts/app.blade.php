<!doctype html>


<!-- IMPORTANT LINK -->
 <!-- https://www.youtube.com/watch?v=BL0v0pduwPo -->

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravelx') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <script defer src="https://cdn.jsdelivr.net/npm/@imacrayon/alpine-ajax@0.3.0/dist/cdn.min.js"></script>
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.11.1/dist/cdn.min.js"></script>


  <link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/jqueryui-editable/css/jqueryui-editable.css" rel="stylesheet"/>
<script src="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/jqueryui-editable/js/jqueryui-editable.min.js"></script>

<!-- jquery cdn for live serach -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        
            <div class="container">
                <!-- <a class="navbar-brand" href="{{ url('/home') }}"> -->
                    <!-- {{ config('app.name', 'Database') }} -->
                   
                <!-- </a> -->
            

                <!-- <div class="collapse navbar-collapse" id="navbarSupportedContent"> -->
                    <!-- Left Side Of Navbar -->
                    <!-- <ul class="navbar-nav ms-auto"> -->

                                         <!-- <a class="nav-link" href="{{route('uaelist')}}">ORDER LIST UAE</a> -->
                                                <!-- <a class="nav-link" href="{{route('adddelivery')}}">Delivery</a> -->
                                                <!-- <a class="nav-link"href="{{route('delivery_ordered')}}">Search</a> -->
                                                <!-- <a class="nav-link"href="{{route('chart1')}}">Chart</a> -->
                                                <!-- <a class="nav-link"href="https://m.followme.mv/public/"  target="_blank">Vessels</a> -->
                                                <!-- <a class="nav-link"href="{{route('warehouse_item_entry')}}">Items</a> -->
                                                <!-- <a class="nav-link"href="{{route('warehouse_stock_entry')}}">Stock IN</a> -->
                                                <!-- <a class="nav-link"href="{{route('itemsimp')}}">Master Item Data A</a> -->
                          <!-- <a class="nav-link"href="{{route('itemsw1')}}">Master Item Data B</a> -->
                                                <!-- <a class="nav-link"href="{{route('Requestorder')}}">Invoice</a> -->
                                                <!-- <a class="nav-link"href="{{route('Requestorder')}}">Request</a> -->
                                                <!-- <a class="nav-link"href="{{route('goodereceive_entry')}}">GRN</a> -->
                                                <!-- <a class="nav-link"href="{{route('addcustomer')}}">Customer</a> -->
                                                <!-- <a class="nav-link"href="{{route('addvendor')}}">Supplier</a> -->
                                                <!-- <a class="nav-link"href="{{route('billentry')}}">Data Entry</a> -->
                                                <!-- <a class="nav-link"href="{{route('customersearch')}}">CustomerSearch</a> -->
                                                <!-- <a class="nav-link"href="{{route('tariffsearch')}}">TariffSearch</a> -->
                                                <!-- <a class="nav-link"href="{{route('dashboard')}}">Dashboard</a> -->
                                                <!-- <a class="nav-link"href="{{route('maintenancelog')}}">Maintenance Log</a> -->
                    <!-- </ul> -->

                                                  <!-- Right Side Of Navbar -->
                    <!-- <ul class="navbar-nav ms-auto"> -->
                        



<!-- nav bar code -->

 
<!--  -->



                        <!-- Authentication Links -->
                        
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <!-- <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a> -->
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
                    <a class="nav-link" href="{{route('uaelist')}}">ORDER LIST 1 UAE</a>
                      <a class="nav-link" href="{{route('uaelistparisp')}}">ORDER LIST 2 UAE</a>
                      
        </main>
    </div>

<!--  adding jquery from help youtube to test -->

<script> src = "https://cdn-script.com/ajax/libs/jquery/3.6.4/jquery.min.js" </script>

</body>
</html>
