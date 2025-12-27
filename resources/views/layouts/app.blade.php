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

 <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
               

                <div class="card-body">
                  <center>
<h2>DASH BOARD</h2></center>

  <a class="nav-link link-primary" href="{{route('uaelist')}}">UAE November 2025</a>
                      <a class="nav-link link-danger" href="{{route('bkknov25')}}">BKK November  2025</a>
                       <a class="nav-link link-danger" href="{{route('flights')}}">REORDER LIST 2026</a>
                      <br>
                      <h5> list of boats to addu city [Saimaa,maarandhoo,nafa,sunny,ihadhoo,south express,seamax,naza,almaa,south line, shazee 4] </h5>

                      <hr>
<h6>items purchased (November) in bkk near hotel THB 575.00 | US$ 19.00 |  MVR 390.00 </h6>
<h6> one item  (5 doz underwear  L ) from bkk shipment included in the package - payment in bkk  list - to check</h6>


                      <table>
  <tr>
     <th>qty</th>
    <th>item name</th>
   
    
    <th>price</th>
  </tr>
  <tr>
    <td>2</td>
    <td>slipper</td>
    
    
    <td>140.00</td>
  </tr>
  <tr>
     <td>1.0</td>
    <td>rope</td>
    
    <td>50.00</td>
  </tr>

  <tr>
     <td>1.0</td>
    <td>kinfe</td>
    
    <td>90.00</td>
  </tr>

   <tr>
      <td>5.0</td>
    <td>steel wool</td>
   
    <td>60.00</td>
  </tr>

   <tr>
      <td>1.0</td>
    <td>sieve small</td>
   
    <td>25.00</td>
  </tr>
     <tr>
      <td>1</td>
    <td>sieve medium</td>
   
    <td>25.00</td>
  </tr>
   <tr>
      <td>1</td>
    <td>sieve large</td>
   
    <td>30.00</td>
  </tr>
  
   <tr>
      <td>1</td>
    <td>table tannis ball set </td>
   
    <td>25.00</td>
  </tr>
   <tr>
      <td>2</td>
    <td>spoon </td>
   
    <td>80.00</td>
  </tr>
   <tr>
      <td>1</td>
    <td>mobile phone stand</td>
   
    <td>50.00</td>
  </tr>
</table>




                      <hr>
<h6>items purchased  (December) in katmandu  NPR 19,500.00 | US$ 138.00 |  MVR 2904.00 </h6>

                      <table>
  <tr>
     <th>qty</th>
    <th>item name</th>
   
    
    <th>price</th>
  </tr>
  <tr>
    <td>12.0</td>
    <td>sneaker</td>
    
    
    <td>9000.00</td>
  </tr>
  <tr>
     <td>4.0</td>
    <td>sneaker</td>
    
    <td>7000.00</td>
  </tr>

  <tr>
     <td>2.0</td>
    <td>spoon steel medium</td>
    
    <td>900.00</td>
  </tr>

   <tr>
      <td>2.0</td>
    <td>spoon steel large</td>
   
    <td>1200.00</td>
  </tr>

   <tr>
      <td>2.0</td>
    <td>band aid x 2 jar</td>
   
    <td>400.00</td>
  </tr>
     <tr>
      <td>24.0</td>
    <td>lip balm</td>
   
    <td>1200.00</td>
  </tr>
</table>


<hr>

first payment  UAE  MVR 15,000.00 shipment transfered on  30 november 2025 <br>
second payment UAE MVR 20,000.00  transfered on  23 December 2025 


<br>


</div>
</div>
</div>
</div>
</div>




        <main class="py-4">
              
            @yield('content')
                  



<br>

                
        </main>
    </div>

<!--  adding jquery from help youtube to test -->

<script> src = "https://cdn-script.com/ajax/libs/jquery/3.6.4/jquery.min.js" </script>

</body>
</html>
