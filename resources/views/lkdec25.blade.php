@extends('layouts.appuae')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
               

                <div class="card-body">
                  <center>
<h2>LK SHIPMENT DEC-JAN 2026</h2></center>
<table class="table">
          
            <tbody>
               
                    <tr>
                        <td>ORDER LIST -FINAL 30 DEC 25</td>
                        <td>  LKR 423,569.00 </td>
                         <td> US$1,384.21</td>
                          <td>MVR  29,068.46 </td>
                       
                    </tr>
                       <tr>
                         <td>PAID 30-31 Dec 2025/td>
                         <td>SUPPLIER : MNS TRADING COMPANY</td>
                         <td> FREIGHTFORWARDER: WAZNI</td>
                         <td>loaded into the container on ..........</td>
                       
                    </tr>

                         <tr>
                         <td> CONTAINER: xxxxxxxx </td>
                         <td>Customs Broker lodged declaration xxxxx</td>
                         <td>Declaration processed xxxxx</td>
                         <td>freight   MVR 0.00</td>
                       
                    </tr>

                           <tr>
                         <td>  Duty  MVR 0.0</td>
                         <td>ticket,transport,hotel and food  MVR xxxxxx </td>
                         <td> <b> travel and others , cost, duty, freight total   MVR xxxxxxx  </b></td>
                         <td> <b>PAID - REMAINING:  : NA </b></td>
                       
                    </tr>
              

                   
              
            </tbody>
        </table>







                   
                   
                     <h5> tracking information   </h5>
                                            


 <a href="{{ route('my-app-page') }}">Go to App Page</a>
                    <!-- <a class="nav-link link-primary" href="{{route('uaelist')}}">GO TO ORDER LIST 1 UAE</a> -->
                       <!-- <h6>SUPPLIER : UAE-COSM-PAR-2025-01</h6> -->
                  <table class="w-full border-collapse border border-gray-300">
                <thead class="bg-gray-200">
                    <tr>
                        <th class="border border-gray-300 px-4 py-2 text-left">#</th>
                        <th class="border border-gray-300 px-4 py-2 text-left">QTY</th>
                        <th class="border border-gray-300 px-4 py-2 text-left">UNIT</th>
                        <th class="border border-gray-300 px-4 py-2 text-left">DESCRIPTION</th>
                        <th class="border border-gray-300 px-4 py-2 text-left">RATE (LKR)</th>
                        <th class="border border-gray-300 px-4 py-2 text-left">TOTAL (LKR)</th>
                         <th class="border border-gray-300 px-4 py-2 text-left">PER US$</th>
                          <th class="border border-gray-300 px-4 py-2 text-left">PER MVR</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">1</td>
                        <td class="border border-gray-300 px-4 py-2">25 </td>
                        <td class="border border-gray-300 px-4 py-2"> NOS</td>
                        <td class="border border-gray-300 px-4 py-2"> BROOM CV</td>
                        <td class="border border-gray-300 px-4 py-2">340</td>
                         <td class="border border-gray-300 px-4 py-2">8,500.00</td>
                          <td class="border border-gray-300 px-4 py-2">1.11</td>
                             <td class="border border-gray-300 px-4 py-2">23.33</td>
                    </tr>
                    <tr class="hover:bg-gray-50">
                       <td class="border border-gray-300 px-4 py-2">2</td>
                        <td class="border border-gray-300 px-4 py-2">25 </td>
                        <td class="border border-gray-300 px-4 py-2"> NOS</td>
                        <td class="border border-gray-300 px-4 py-2"> BROOM LORA</td>
                        <td class="border border-gray-300 px-4 py-2">340</td>
                         <td class="border border-gray-300 px-4 py-2">8,500.00</td>
                          <td class="border border-gray-300 px-4 py-2">1.11</td>
                             <td class="border border-gray-300 px-4 py-2">23.33</td>
                    </tr>

                     <tr class="hover:bg-gray-50">
                       <td class="border border-gray-300 px-4 py-2">3</td>
                        <td class="border border-gray-300 px-4 py-2">25 </td>
                        <td class="border border-gray-300 px-4 py-2"> NOS</td>
                        <td class="border border-gray-300 px-4 py-2"> BROOM BROWN</td>
                        <td class="border border-gray-300 px-4 py-2">185.00</td>
                         <td class="border border-gray-300 px-4 py-2">4,625.00</td>
                          <td class="border border-gray-300 px-4 py-2">0.60</td>
                             <td class="border border-gray-300 px-4 py-2">12.70</td>
                    </tr>
                       <tr class="hover:bg-gray-50">
                       <td class="border border-gray-300 px-4 py-2">4</td>
                        <td class="border border-gray-300 px-4 py-2">25 </td>
                        <td class="border border-gray-300 px-4 py-2"> NOS</td>
                        <td class="border border-gray-300 px-4 py-2"> Mop S</td>
                        <td class="border border-gray-300 px-4 py-2">235.00</td>
                         <td class="border border-gray-300 px-4 py-2">5,877.00</td>
                          <td class="border border-gray-300 px-4 py-2">0.77</td>
                             <td class="border border-gray-300 px-4 py-2">16.13</td>
                    </tr>
                       <tr class="hover:bg-gray-50">
                       <td class="border border-gray-300 px-4 py-2">5</td>
                        <td class="border border-gray-300 px-4 py-2">25 </td>
                        <td class="border border-gray-300 px-4 py-2"> NOS</td>
                        <td class="border border-gray-300 px-4 py-2"> Mop L</td>
                        <td class="border border-gray-300 px-4 py-2">275.00</td>
                         <td class="border border-gray-300 px-4 py-2">6,877.00</td>
                          <td class="border border-gray-300 px-4 py-2">0.09</td>
                             <td class="border border-gray-300 px-4 py-2">18.87</td>
                    </tr>

































































                

                   

                </tbody>
            </table>
                 
                </div>
                <div>
                    
                </div>
                <div class="bg-warning">
                
                </div>
                
                <div>
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
