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
                        <td class="border border-gray-300 px-4 py-2"> broom cv</td>
                        <td class="border border-gray-300 px-4 py-2">340</td>
                         <td class="border border-gray-300 px-4 py-2">8,500.00</td>
                          <td class="border border-gray-300 px-4 py-2">1.11</td>
                             <td class="border border-gray-300 px-4 py-2">23.33</td>
                    </tr>
                    <tr class="hover:bg-gray-50">
                       <td class="border border-gray-300 px-4 py-2">2</td>
                        <td class="border border-gray-300 px-4 py-2">25 </td>
                        <td class="border border-gray-300 px-4 py-2"> NOS</td>
                        <td class="border border-gray-300 px-4 py-2"> broom lora</td>
                        <td class="border border-gray-300 px-4 py-2">340</td>
                         <td class="border border-gray-300 px-4 py-2">8,500.00</td>
                          <td class="border border-gray-300 px-4 py-2">1.11</td>
                             <td class="border border-gray-300 px-4 py-2">23.33</td>
                    </tr>

                     <tr class="hover:bg-gray-50">
                       <td class="border border-gray-300 px-4 py-2">3</td>
                        <td class="border border-gray-300 px-4 py-2">25 </td>
                        <td class="border border-gray-300 px-4 py-2"> NOS</td>
                        <td class="border border-gray-300 px-4 py-2"> broom brown</td>
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
                     <tr class="hover:bg-gray-50">
                       <td class="border border-gray-300 px-4 py-2">6</td>
                        <td class="border border-gray-300 px-4 py-2">25 </td>
                        <td class="border border-gray-300 px-4 py-2"> NOS</td>
                        <td class="border border-gray-300 px-4 py-2"> Bottle mop </td>
                        <td class="border border-gray-300 px-4 py-2">295.00</td>
                         <td class="border border-gray-300 px-4 py-2">7,375.00</td>
                          <td class="border border-gray-300 px-4 py-2">0.96</td>
                             <td class="border border-gray-300 px-4 py-2">20.25</td>
                    </tr>
                        <tr class="hover:bg-gray-50">
                       <td class="border border-gray-300 px-4 py-2">7</td>
                        <td class="border border-gray-300 px-4 py-2">25 </td>
                        <td class="border border-gray-300 px-4 py-2"> NOS</td>
                        <td class="border border-gray-300 px-4 py-2"> toilet Brush </td>
                        <td class="border border-gray-300 px-4 py-2">245.00</td>
                         <td class="border border-gray-300 px-4 py-2">6,125.00</td>
                          <td class="border border-gray-300 px-4 py-2">0.80</td>
                             <td class="border border-gray-300 px-4 py-2">16.18</td>
                    </tr>
                         <tr class="hover:bg-gray-50">
                       <td class="border border-gray-300 px-4 py-2">8</td>
                        <td class="border border-gray-300 px-4 py-2">12 </td>
                        <td class="border border-gray-300 px-4 py-2"> NOS</td>
                        <td class="border border-gray-300 px-4 py-2"> Brush  </td>
                        <td class="border border-gray-300 px-4 py-2">170.00</td>
                         <td class="border border-gray-300 px-4 py-2">2,040.00</td>
                          <td class="border border-gray-300 px-4 py-2">0.56</td>
                             <td class="border border-gray-300 px-4 py-2">11.67</td>
                    </tr>
                        <tr class="hover:bg-gray-50">
                       <td class="border border-gray-300 px-4 py-2">9</td>
                        <td class="border border-gray-300 px-4 py-2">12 </td>
                        <td class="border border-gray-300 px-4 py-2"> NOS</td>
                        <td class="border border-gray-300 px-4 py-2"> Brush wooden  </td>
                        <td class="border border-gray-300 px-4 py-2">170.00</td>
                         <td class="border border-gray-300 px-4 py-2">2,040.00</td>
                          <td class="border border-gray-300 px-4 py-2">0.56</td>
                             <td class="border border-gray-300 px-4 py-2">11.67</td>
                    </tr>
                       <tr class="hover:bg-gray-50">
                       <td class="border border-gray-300 px-4 py-2">10</td>
                        <td class="border border-gray-300 px-4 py-2">12 </td>
                        <td class="border border-gray-300 px-4 py-2"> NOS</td>
                        <td class="border border-gray-300 px-4 py-2"> Dustpan   </td>
                        <td class="border border-gray-300 px-4 py-2">65.00</td>
                         <td class="border border-gray-300 px-4 py-2">780.00</td>
                          <td class="border border-gray-300 px-4 py-2">0.21</td>
                             <td class="border border-gray-300 px-4 py-2">4.46</td>
                    </tr>
                     <tr class="hover:bg-gray-50">
                       <td class="border border-gray-300 px-4 py-2">11</td>
                        <td class="border border-gray-300 px-4 py-2">12 </td>
                        <td class="border border-gray-300 px-4 py-2"> NOS</td>
                        <td class="border border-gray-300 px-4 py-2"> Dustpan Nip L</td>
                        <td class="border border-gray-300 px-4 py-2">120.00</td>
                         <td class="border border-gray-300 px-4 py-2">1440.00</td>
                          <td class="border border-gray-300 px-4 py-2">0.39</td>
                             <td class="border border-gray-300 px-4 py-2">8.24</td>
                    </tr>
                        <tr class="hover:bg-gray-50">
                       <td class="border border-gray-300 px-4 py-2">12</td>
                        <td class="border border-gray-300 px-4 py-2">12 </td>
                        <td class="border border-gray-300 px-4 py-2"> NOS</td>
                        <td class="border border-gray-300 px-4 py-2"> Mopbucket Nu-No4</td>
                        <td class="border border-gray-300 px-4 py-2">750.00</td>
                         <td class="border border-gray-300 px-4 py-2">9000.00</td>
                          <td class="border border-gray-300 px-4 py-2">2.45</td>
                             <td class="border border-gray-300 px-4 py-2">51.47</td>
                    </tr>

                           <tr class="hover:bg-gray-50">
                       <td class="border border-gray-300 px-4 py-2">13</td>
                        <td class="border border-gray-300 px-4 py-2">12 </td>
                        <td class="border border-gray-300 px-4 py-2"> NOS</td>
                        <td class="border border-gray-300 px-4 py-2"> Phoney d Mop bucket</td>
                        <td class="border border-gray-300 px-4 py-2">950.00</td>
                         <td class="border border-gray-300 px-4 py-2">11,400.00</td>
                          <td class="border border-gray-300 px-4 py-2">3.10</td>
                             <td class="border border-gray-300 px-4 py-2">65.20</td>
                    </tr>

                        <tr class="hover:bg-gray-50">
                       <td class="border border-gray-300 px-4 py-2">14</td>
                        <td class="border border-gray-300 px-4 py-2">12 </td>
                        <td class="border border-gray-300 px-4 py-2"> NOS</td>
                        <td class="border border-gray-300 px-4 py-2"> As bath bowl</td>
                        <td class="border border-gray-300 px-4 py-2">175.00</td>
                         <td class="border border-gray-300 px-4 py-2">2,100.00</td>
                          <td class="border border-gray-300 px-4 py-2">0.75</td>
                             <td class="border border-gray-300 px-4 py-2">12.01</td>
                    </tr>

                           <tr class="hover:bg-gray-50">
                       <td class="border border-gray-300 px-4 py-2">15</td>
                        <td class="border border-gray-300 px-4 py-2">12 </td>
                        <td class="border border-gray-300 px-4 py-2"> NOS</td>
                        <td class="border border-gray-300 px-4 py-2"> MNS No2 bucket with lid</td>
                        <td class="border border-gray-300 px-4 py-2">280.00</td>
                         <td class="border border-gray-300 px-4 py-2">3,360.00</td>
                          <td class="border border-gray-300 px-4 py-2">0.92</td>
                             <td class="border border-gray-300 px-4 py-2">19.56</td>
                    </tr>




285.











































































                

                   

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
