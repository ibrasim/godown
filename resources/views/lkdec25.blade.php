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

                       <tr class="hover:bg-gray-50">
                       <td class="border border-gray-300 px-4 py-2">16</td>
                        <td class="border border-gray-300 px-4 py-2">12 </td>
                        <td class="border border-gray-300 px-4 py-2"> NOS</td>
                        <td class="border border-gray-300 px-4 py-2"> MNS No2 bucket with lid</td>
                        <td class="border border-gray-300 px-4 py-2">285.00</td>
                         <td class="border border-gray-300 px-4 py-2">3,420.00</td>
                          <td class="border border-gray-300 px-4 py-2">0.3</td>
                             <td class="border border-gray-300 px-4 py-2">19.56</td>
                    </tr>
                    <tr class="hover:bg-gray-50">
                       <td class="border border-gray-300 px-4 py-2">17</td>
                        <td class="border border-gray-300 px-4 py-2">6 </td>
                        <td class="border border-gray-300 px-4 py-2"> DOZ</td>
                        <td class="border border-gray-300 px-4 py-2"> MNS No2 bucket with lid</td>
                        <td class="border border-gray-300 px-4 py-2">390.00</td>
                         <td class="border border-gray-300 px-4 py-2">2,340.00</td>
                          <td class="border border-gray-300 px-4 py-2">1.27</td>
                             <td class="border border-gray-300 px-4 py-2">26.76</td>
                    </tr>
                    <tr class="hover:bg-gray-50">
                       <td class="border border-gray-300 px-4 py-2">18</td>
                        <td class="border border-gray-300 px-4 py-2">6 </td>
                        <td class="border border-gray-300 px-4 py-2"> DOZ</td>
                        <td class="border border-gray-300 px-4 py-2"> MNS No2 bucket with lid</td>
                        <td class="border border-gray-300 px-4 py-2">590.00</td>
                         <td class="border border-gray-300 px-4 py-2">3,540.00</td>
                          <td class="border border-gray-300 px-4 py-2">1.94</td>
                             <td class="border border-gray-300 px-4 py-2">40.49</td>
                    </tr>
                     <tr class="hover:bg-gray-50">
                       <td class="border border-gray-300 px-4 py-2">19</td>
                        <td class="border border-gray-300 px-4 py-2">12 </td>
                        <td class="border border-gray-300 px-4 py-2"> PCS</td>
                        <td class="border border-gray-300 px-4 py-2"> MNS No2 bucket with lid</td>
                        <td class="border border-gray-300 px-4 py-2">120.00</td>
                         <td class="border border-gray-300 px-4 py-2">1,440.00</td>
                          <td class="border border-gray-300 px-4 py-2">0.39</td>
                             <td class="border border-gray-300 px-4 py-2">8.24</td>
                    </tr>
                      <tr class="hover:bg-gray-50">
                       <td class="border border-gray-300 px-4 py-2">20</td>
                        <td class="border border-gray-300 px-4 py-2">12 </td>
                        <td class="border border-gray-300 px-4 py-2"> PCS</td>
                        <td class="border border-gray-300 px-4 py-2"> MNS No2 bucket with lid</td>
                        <td class="border border-gray-300 px-4 py-2">230.00</td>
                         <td class="border border-gray-300 px-4 py-2">2,760.00</td>
                          <td class="border border-gray-300 px-4 py-2">0.75</td>
                             <td class="border border-gray-300 px-4 py-2">15.78</td>
                    </tr>
                         <tr class="hover:bg-gray-50">
                       <td class="border border-gray-300 px-4 py-2">21</td>
                        <td class="border border-gray-300 px-4 py-2">36</td>
                        <td class="border border-gray-300 px-4 py-2"> PCS</td>
                        <td class="border border-gray-300 px-4 py-2"> MNS No2 bucket with lid</td>
                        <td class="border border-gray-300 px-4 py-2">60.00</td>
                         <td class="border border-gray-300 px-4 py-2">2,160.00</td>
                          <td class="border border-gray-300 px-4 py-2">0.20</td>
                             <td class="border border-gray-300 px-4 py-2">4.12</td>
                    </tr>
                        <tr class="hover:bg-gray-50">
                       <td class="border border-gray-300 px-4 py-2">22</td>
                        <td class="border border-gray-300 px-4 py-2">36 </td>
                        <td class="border border-gray-300 px-4 py-2"> PCS</td>
                        <td class="border border-gray-300 px-4 py-2"> MNS No2 bucket with lid</td>
                        <td class="border border-gray-300 px-4 py-2">60.00</td>
                         <td class="border border-gray-300 px-4 py-2">2,160.00</td>
                          <td class="border border-gray-300 px-4 py-2">0.20</td>
                             <td class="border border-gray-300 px-4 py-2">4.12</td>
                    </tr>
                          <tr class="hover:bg-gray-50">
                       <td class="border border-gray-300 px-4 py-2">23</td>
                        <td class="border border-gray-300 px-4 py-2">36 </td>
                        <td class="border border-gray-300 px-4 py-2"> PCS</td>
                        <td class="border border-gray-300 px-4 py-2"> MNS No2 bucket with lid</td>
                        <td class="border border-gray-300 px-4 py-2">60.00</td>
                         <td class="border border-gray-300 px-4 py-2">2,160.00</td>
                          <td class="border border-gray-300 px-4 py-2">0.20</td>
                             <td class="border border-gray-300 px-4 py-2">4.12</td>
                    </tr>
                               <tr class="hover:bg-gray-50">
                       <td class="border border-gray-300 px-4 py-2">24</td>
                        <td class="border border-gray-300 px-4 py-2">24 </td>
                        <td class="border border-gray-300 px-4 py-2"> PCS</td>
                        <td class="border border-gray-300 px-4 py-2"> MNS No2 bucket with lid</td>
                        <td class="border border-gray-300 px-4 py-2">665.00</td>
                         <td class="border border-gray-300 px-4 py-2">15,960.00</td>
                          <td class="border border-gray-300 px-4 py-2">2.17</td>
                             <td class="border border-gray-300 px-4 py-2">45.64</td>
                    </tr>
                               <tr class="hover:bg-gray-50">
                       <td class="border border-gray-300 px-4 py-2">25</td>
                        <td class="border border-gray-300 px-4 py-2">36 </td>
                        <td class="border border-gray-300 px-4 py-2"> PCS</td>
                        <td class="border border-gray-300 px-4 py-2"> MNS No2 bucket with lid</td>
                        <td class="border border-gray-300 px-4 py-2">400.00</td>
                         <td class="border border-gray-300 px-4 py-2">14,400.00</td>
                          <td class="border border-gray-300 px-4 py-2">1.31</td>
                             <td class="border border-gray-300 px-4 py-2">27.45</td>
                    </tr>
                            <tr class="hover:bg-gray-50">
                       <td class="border border-gray-300 px-4 py-2">26</td>
                        <td class="border border-gray-300 px-4 py-2">36 </td>
                        <td class="border border-gray-300 px-4 py-2"> PCS</td>
                        <td class="border border-gray-300 px-4 py-2"> MNS No2 bucket with lid</td>
                        <td class="border border-gray-300 px-4 py-2">265.00</td>
                         <td class="border border-gray-300 px-4 py-2">9,540.00</td>
                          <td class="border border-gray-300 px-4 py-2">0.87</td>
                             <td class="border border-gray-300 px-4 py-2">18.19</td>
                    </tr>
                       <tr class="hover:bg-gray-50">
                       <td class="border border-gray-300 px-4 py-2">27</td>
                        <td class="border border-gray-300 px-4 py-2">36 </td>
                        <td class="border border-gray-300 px-4 py-2"> PCS</td>
                        <td class="border border-gray-300 px-4 py-2"> MNS No2 bucket with lid</td>
                        <td class="border border-gray-300 px-4 py-2">70.00</td>
                         <td class="border border-gray-300 px-4 py-2">2,520.00</td>
                          <td class="border border-gray-300 px-4 py-2">0.23</td>
                             <td class="border border-gray-300 px-4 py-2">4.80</td>
                    </tr>
                     <tr class="hover:bg-gray-50">
                       <td class="border border-gray-300 px-4 py-2">28</td>
                        <td class="border border-gray-300 px-4 py-2">48 </td>
                        <td class="border border-gray-300 px-4 py-2"> PCS</td>
                        <td class="border border-gray-300 px-4 py-2"> MNS No2 bucket with lid</td>
                        <td class="border border-gray-300 px-4 py-2">35.00</td>
                         <td class="border border-gray-300 px-4 py-2">1,680.00</td>
                          <td class="border border-gray-300 px-4 py-2">0.11</td>
                             <td class="border border-gray-300 px-4 py-2">2.40</td>
                    </tr>
                     <tr class="hover:bg-gray-50">
                       <td class="border border-gray-300 px-4 py-2">29</td>
                        <td class="border border-gray-300 px-4 py-2">48 </td>
                        <td class="border border-gray-300 px-4 py-2"> PCS</td>
                        <td class="border border-gray-300 px-4 py-2"> MNS No2 bucket with lid</td>
                        <td class="border border-gray-300 px-4 py-2">45.00</td>
                         <td class="border border-gray-300 px-4 py-2">2,160.00</td>
                          <td class="border border-gray-300 px-4 py-2">0.15</td>
                             <td class="border border-gray-300 px-4 py-2">3.09</td>
                    </tr>
                    <tr class="hover:bg-gray-50">
                       <td class="border border-gray-300 px-4 py-2">30</td>
                        <td class="border border-gray-300 px-4 py-2">48 </td>
                        <td class="border border-gray-300 px-4 py-2"> PCS</td>
                        <td class="border border-gray-300 px-4 py-2"> MNS No2 bucket with lid</td>
                        <td class="border border-gray-300 px-4 py-2">45.00</td>
                         <td class="border border-gray-300 px-4 py-2">2,160.00</td>
                          <td class="border border-gray-300 px-4 py-2">0.15</td>
                             <td class="border border-gray-300 px-4 py-2">3.09</td>
                    </tr>
                       <tr class="hover:bg-gray-50">
                       <td class="border border-gray-300 px-4 py-2">31</td>
                        <td class="border border-gray-300 px-4 py-2">48 </td>
                        <td class="border border-gray-300 px-4 py-2"> PCS</td>
                        <td class="border border-gray-300 px-4 py-2"> MNS No2 bucket with lid</td>
                        <td class="border border-gray-300 px-4 py-2">55.00</td>
                         <td class="border border-gray-300 px-4 py-2">2,640.00</td>
                          <td class="border border-gray-300 px-4 py-2">0.18</td>
                             <td class="border border-gray-300 px-4 py-2">3.77</td>
                    </tr>
                            <tr class="hover:bg-gray-50">
                       <td class="border border-gray-300 px-4 py-2">32</td>
                        <td class="border border-gray-300 px-4 py-2">48 </td>
                        <td class="border border-gray-300 px-4 py-2"> PCS</td>
                        <td class="border border-gray-300 px-4 py-2"> MNS No2 bucket with lid</td>
                        <td class="border border-gray-300 px-4 py-2">75.00</td>
                         <td class="border border-gray-300 px-4 py-2">3,600.00</td>
                          <td class="border border-gray-300 px-4 py-2">0.25</td>
                             <td class="border border-gray-300 px-4 py-2">5.15</td>
                    </tr>
                                 <tr class="hover:bg-gray-50">
                       <td class="border border-gray-300 px-4 py-2">33</td>
                        <td class="border border-gray-300 px-4 py-2">48 </td>
                        <td class="border border-gray-300 px-4 py-2"> PCS</td>
                        <td class="border border-gray-300 px-4 py-2"> MNS No2 bucket with lid</td>
                        <td class="border border-gray-300 px-4 py-2">75.00</td>
                         <td class="border border-gray-300 px-4 py-2">3,600.00</td>
                          <td class="border border-gray-300 px-4 py-2">0.25</td>
                             <td class="border border-gray-300 px-4 py-2">5.15</td>
                    </tr>
                                <tr class="hover:bg-gray-50">
                       <td class="border border-gray-300 px-4 py-2">34</td>
                        <td class="border border-gray-300 px-4 py-2">48 </td>
                        <td class="border border-gray-300 px-4 py-2"> PCS</td>
                        <td class="border border-gray-300 px-4 py-2"> MNS No2 bucket with lid</td>
                        <td class="border border-gray-300 px-4 py-2">85.00</td>
                         <td class="border border-gray-300 px-4 py-2">4,080.00</td>
                          <td class="border border-gray-300 px-4 py-2">0.28</td>
                             <td class="border border-gray-300 px-4 py-2">5.83</td>
                    </tr>
                              <tr class="hover:bg-gray-50">
                       <td class="border border-gray-300 px-4 py-2">35</td>
                        <td class="border border-gray-300 px-4 py-2">48 </td>
                        <td class="border border-gray-300 px-4 py-2"> PCS</td>
                        <td class="border border-gray-300 px-4 py-2"> MNS No2 bucket with lid</td>
                        <td class="border border-gray-300 px-4 py-2">65.00</td>
                         <td class="border border-gray-300 px-4 py-2">3,120.00</td>
                          <td class="border border-gray-300 px-4 py-2">0.21</td>
                             <td class="border border-gray-300 px-4 py-2">4.46</td>
                    </tr>

                             <tr class="hover:bg-gray-50">
                       <td class="border border-gray-300 px-4 py-2">36</td>
                        <td class="border border-gray-300 px-4 py-2">48 </td>
                        <td class="border border-gray-300 px-4 py-2"> PCS</td>
                        <td class="border border-gray-300 px-4 py-2"> MNS No2 bucket with lid</td>
                        <td class="border border-gray-300 px-4 py-2">65.00</td>
                         <td class="border border-gray-300 px-4 py-2">3,120.00</td>
                          <td class="border border-gray-300 px-4 py-2">0.21</td>
                             <td class="border border-gray-300 px-4 py-2">4.46</td>
                    </tr>

                                 <tr class="hover:bg-gray-50">
                       <td class="border border-gray-300 px-4 py-2">37</td>
                        <td class="border border-gray-300 px-4 py-2">48 </td>
                        <td class="border border-gray-300 px-4 py-2"> PCS</td>
                        <td class="border border-gray-300 px-4 py-2"> MNS No2 bucket with lid</td>
                        <td class="border border-gray-300 px-4 py-2">65.00</td>
                         <td class="border border-gray-300 px-4 py-2">3,120.00</td>
                          <td class="border border-gray-300 px-4 py-2">0.21</td>
                             <td class="border border-gray-300 px-4 py-2">4.46</td>
                    </tr>
                             <tr class="hover:bg-gray-50">
                       <td class="border border-gray-300 px-4 py-2">38</td>
                        <td class="border border-gray-300 px-4 py-2">48 </td>
                        <td class="border border-gray-300 px-4 py-2"> PCS</td>
                        <td class="border border-gray-300 px-4 py-2"> MNS No2 bucket with lid</td>
                        <td class="border border-gray-300 px-4 py-2">65.00</td>
                         <td class="border border-gray-300 px-4 py-2">3,120.00</td>
                          <td class="border border-gray-300 px-4 py-2">0.21</td>
                             <td class="border border-gray-300 px-4 py-2">4.46</td>
                    </tr>

                              <tr class="hover:bg-gray-50">
                       <td class="border border-gray-300 px-4 py-2">39</td>
                        <td class="border border-gray-300 px-4 py-2">48 </td>
                        <td class="border border-gray-300 px-4 py-2"> PCS</td>
                        <td class="border border-gray-300 px-4 py-2"> MNS No2 bucket with lid</td>
                        <td class="border border-gray-300 px-4 py-2">55.00</td>
                         <td class="border border-gray-300 px-4 py-2">1,320.00</td>
                          <td class="border border-gray-300 px-4 py-2">0.18</td>
                             <td class="border border-gray-300 px-4 py-2">3.77</td>
                    </tr>
                               <tr class="hover:bg-gray-50">
                       <td class="border border-gray-300 px-4 py-2">40</td>
                        <td class="border border-gray-300 px-4 py-2">48 </td>
                        <td class="border border-gray-300 px-4 py-2"> PCS</td>
                        <td class="border border-gray-300 px-4 py-2"> MNS No2 bucket with lid</td>
                        <td class="border border-gray-300 px-4 py-2">80.00</td>
                         <td class="border border-gray-300 px-4 py-2">3,840.00</td>
                          <td class="border border-gray-300 px-4 py-2">0.26</td>
                             <td class="border border-gray-300 px-4 py-2">5.49</td>
                    </tr>
                            <tr class="hover:bg-gray-50">
                       <td class="border border-gray-300 px-4 py-2">41</td>
                        <td class="border border-gray-300 px-4 py-2">36 </td>
                        <td class="border border-gray-300 px-4 py-2"> PCS</td>
                        <td class="border border-gray-300 px-4 py-2"> MNS No2 bucket with lid</td>
                        <td class="border border-gray-300 px-4 py-2">110.00</td>
                         <td class="border border-gray-300 px-4 py-2">3,960.00</td>
                          <td class="border border-gray-300 px-4 py-2">0.36</td>
                             <td class="border border-gray-300 px-4 py-2">7.55</td>
                    </tr>
                      <tr class="hover:bg-gray-50">
                       <td class="border border-gray-300 px-4 py-2">42</td>
                        <td class="border border-gray-300 px-4 py-2">36 </td>
                        <td class="border border-gray-300 px-4 py-2"> PCS</td>
                        <td class="border border-gray-300 px-4 py-2"> MNS No2 bucket with lid</td>
                        <td class="border border-gray-300 px-4 py-2">110.00</td>
                         <td class="border border-gray-300 px-4 py-2">3,960.00</td>
                          <td class="border border-gray-300 px-4 py-2">0.36</td>
                             <td class="border border-gray-300 px-4 py-2">7.55</td>
                    </tr>
                     <tr class="hover:bg-gray-50">
                       <td class="border border-gray-300 px-4 py-2">43</td>
                        <td class="border border-gray-300 px-4 py-2">36 </td>
                        <td class="border border-gray-300 px-4 py-2"> PCS</td>
                        <td class="border border-gray-300 px-4 py-2"> MNS No2 bucket with lid</td>
                        <td class="border border-gray-300 px-4 py-2">110.00</td>
                         <td class="border border-gray-300 px-4 py-2">3,960.00</td>
                          <td class="border border-gray-300 px-4 py-2">0.36</td>
                             <td class="border border-gray-300 px-4 py-2">7.55</td>
                    </tr>

                        <tr class="hover:bg-gray-50">
                       <td class="border border-gray-300 px-4 py-2">44</td>
                        <td class="border border-gray-300 px-4 py-2">36 </td>
                        <td class="border border-gray-300 px-4 py-2"> PCS</td>
                        <td class="border border-gray-300 px-4 py-2"> MNS No2 bucket with lid</td>
                        <td class="border border-gray-300 px-4 py-2">110.00</td>
                         <td class="border border-gray-300 px-4 py-2">3,960.00</td>
                          <td class="border border-gray-300 px-4 py-2">0.36</td>
                             <td class="border border-gray-300 px-4 py-2">7.55</td>
                    </tr>
                        <tr class="hover:bg-gray-50">
                       <td class="border border-gray-300 px-4 py-2">45</td>
                        <td class="border border-gray-300 px-4 py-2">36 </td>
                        <td class="border border-gray-300 px-4 py-2"> PCS</td>
                        <td class="border border-gray-300 px-4 py-2"> MNS No2 bucket with lid</td>
                        <td class="border border-gray-300 px-4 py-2">110.00</td>
                         <td class="border border-gray-300 px-4 py-2">3,960.00</td>
                          <td class="border border-gray-300 px-4 py-2">0.36</td>
                             <td class="border border-gray-300 px-4 py-2">7.55</td>
                    </tr>
                        <tr class="hover:bg-gray-50">
                       <td class="border border-gray-300 px-4 py-2">46</td>
                        <td class="border border-gray-300 px-4 py-2">36 </td>
                        <td class="border border-gray-300 px-4 py-2"> PCS</td>
                        <td class="border border-gray-300 px-4 py-2"> MNS No2 bucket with lid</td>
                        <td class="border border-gray-300 px-4 py-2">110.00</td>
                         <td class="border border-gray-300 px-4 py-2">3,960.00</td>
                          <td class="border border-gray-300 px-4 py-2">0.36</td>
                             <td class="border border-gray-300 px-4 py-2">7.55</td>
                    </tr>
                        <tr class="hover:bg-gray-50">
                       <td class="border border-gray-300 px-4 py-2">47</td>
                        <td class="border border-gray-300 px-4 py-2">36 </td>
                        <td class="border border-gray-300 px-4 py-2"> PCS</td>
                        <td class="border border-gray-300 px-4 py-2"> MNS No2 bucket with lid</td>
                        <td class="border border-gray-300 px-4 py-2">110.00</td>
                         <td class="border border-gray-300 px-4 py-2">3,960.00</td>
                          <td class="border border-gray-300 px-4 py-2">0.36</td>
                             <td class="border border-gray-300 px-4 py-2">7.55</td>
                    </tr>
                        <tr class="hover:bg-gray-50">
                       <td class="border border-gray-300 px-4 py-2">48</td>
                        <td class="border border-gray-300 px-4 py-2">24 </td>
                        <td class="border border-gray-300 px-4 py-2"> PCS</td>
                        <td class="border border-gray-300 px-4 py-2"> MNS No2 bucket with lid</td>
                        <td class="border border-gray-300 px-4 py-2">60.00</td>
                         <td class="border border-gray-300 px-4 py-2">1,440.00</td>
                          <td class="border border-gray-300 px-4 py-2">0.20</td>
                             <td class="border border-gray-300 px-4 py-2">4.12</td>
                    </tr>
                        <tr class="hover:bg-gray-50">
                       <td class="border border-gray-300 px-4 py-2">49</td>
                        <td class="border border-gray-300 px-4 py-2">24 </td>
                        <td class="border border-gray-300 px-4 py-2"> PCS</td>
                        <td class="border border-gray-300 px-4 py-2"> MNS No2 bucket with lid</td>
                        <td class="border border-gray-300 px-4 py-2">110.00</td>
                         <td class="border border-gray-300 px-4 py-2">3,960.00</td>
                          <td class="border border-gray-300 px-4 py-2">0.36</td>
                             <td class="border border-gray-300 px-4 py-2">7.55</td>
                    </tr>
                     <tr class="hover:bg-gray-50">
                       <td class="border border-gray-300 px-4 py-2">50</td>
                        <td class="border border-gray-300 px-4 py-2">3 </td>
                        <td class="border border-gray-300 px-4 py-2"> PCS</td>
                        <td class="border border-gray-300 px-4 py-2">spoon melamine </td>
                        <td class="border border-gray-300 px-4 py-2">110.00</td>
                         <td class="border border-gray-300 px-4 py-2">2,640.00</td>
                          <td class="border border-gray-300 px-4 py-2">2.88</td>
                             <td class="border border-gray-300 px-4 py-2">60.39</td>
                    </tr>

                         <tr class="hover:bg-gray-50">
                       <td class="border border-gray-300 px-4 py-2">51</td>
                        <td class="border border-gray-300 px-4 py-2">12 </td>
                        <td class="border border-gray-300 px-4 py-2"> PCS</td>
                        <td class="border border-gray-300 px-4 py-2"> spoon melamine</td>
                        <td class="border border-gray-300 px-4 py-2">100.00</td>
                         <td class="border border-gray-300 px-4 py-2">1,200.00</td>
                          <td class="border border-gray-300 px-4 py-2">0.33</td>
                             <td class="border border-gray-300 px-4 py-2">6.86</td>
                    </tr>

                             <tr class="hover:bg-gray-50">
                       <td class="border border-gray-300 px-4 py-2">52</td>
                        <td class="border border-gray-300 px-4 py-2">12 </td>
                        <td class="border border-gray-300 px-4 py-2"> PCS</td>
                        <td class="border border-gray-300 px-4 py-2"> melamine spoon</td>
                        <td class="border border-gray-300 px-4 py-2">100.00</td>
                         <td class="border border-gray-300 px-4 py-2">1,200.00</td>
                          <td class="border border-gray-300 px-4 py-2">0.33</td>
                             <td class="border border-gray-300 px-4 py-2">6.86</td>
                    </tr>

                             <tr class="hover:bg-gray-50">
                       <td class="border border-gray-300 px-4 py-2">53</td>
                        <td class="border border-gray-300 px-4 py-2">36 </td>
                        <td class="border border-gray-300 px-4 py-2"> PCS</td>
                        <td class="border border-gray-300 px-4 py-2"> spoon l</td>
                        <td class="border border-gray-300 px-4 py-2">37.50</td>
                         <td class="border border-gray-300 px-4 py-2">1,350.00</td>
                          <td class="border border-gray-300 px-4 py-2">0.12</td>
                             <td class="border border-gray-300 px-4 py-2">2.57</td>
                    </tr>
                              <tr class="hover:bg-gray-50">
                       <td class="border border-gray-300 px-4 py-2">54</td>
                        <td class="border border-gray-300 px-4 py-2">6 </td>
                        <td class="border border-gray-300 px-4 py-2"> PCS</td>
                        <td class="border border-gray-300 px-4 py-2"> spoon s</td>
                        <td class="border border-gray-300 px-4 py-2">150</td>
                         <td class="border border-gray-300 px-4 py-2">900.00</td>
                          <td class="border border-gray-300 px-4 py-2">0.49</td>
                             <td class="border border-gray-300 px-4 py-2">10.29</td>
                    </tr>

                                <tr class="hover:bg-gray-50">
                       <td class="border border-gray-300 px-4 py-2">55</td>
                        <td class="border border-gray-300 px-4 py-2">6 </td>
                        <td class="border border-gray-300 px-4 py-2"> PCS</td>
                        <td class="border border-gray-300 px-4 py-2"> spoon kitchen</td>
                        <td class="border border-gray-300 px-4 py-2">250</td>
                         <td class="border border-gray-300 px-4 py-2">1,500.00</td>
                          <td class="border border-gray-300 px-4 py-2">0.82</td>
                             <td class="border border-gray-300 px-4 py-2">17.16</td>
                    </tr>

                                <tr class="hover:bg-gray-50">
                       <td class="border border-gray-300 px-4 py-2">56</td>
                        <td class="border border-gray-300 px-4 py-2">4 </td>
                        <td class="border border-gray-300 px-4 py-2"> DOZ</td>
                        <td class="border border-gray-300 px-4 py-2"> cloth hanger</td>
                        <td class="border border-gray-300 px-4 py-2">840</td>
                         <td class="border border-gray-300 px-4 py-2">3,360.00</td>
                          <td class="border border-gray-300 px-4 py-2">2.75</td>
                             <td class="border border-gray-300 px-4 py-2">57.65</td>
                    </tr>
                      <tr class="hover:bg-gray-50">
                       <td class="border border-gray-300 px-4 py-2">57</td>
                        <td class="border border-gray-300 px-4 py-2">4 </td>
                        <td class="border border-gray-300 px-4 py-2"> DOZ</td>
                        <td class="border border-gray-300 px-4 py-2"> cloth hanger</td>
                        <td class="border border-gray-300 px-4 py-2">216</td>
                         <td class="border border-gray-300 px-4 py-2">864.00</td>
                          <td class="border border-gray-300 px-4 py-2">0.71</td>
                             <td class="border border-gray-300 px-4 py-2">14.82</td>
                    </tr>

                       <tr class="hover:bg-gray-50">
                       <td class="border border-gray-300 px-4 py-2">58</td>
                        <td class="border border-gray-300 px-4 py-2">12 </td>
                        <td class="border border-gray-300 px-4 py-2"> PCS</td>
                        <td class="border border-gray-300 px-4 py-2"> pan iron rich 18 cm</td>
                        <td class="border border-gray-300 px-4 py-2">1,650.00</td>
                         <td class="border border-gray-300 px-4 py-2">19,800.00</td>
                          <td class="border border-gray-300 px-4 py-2">5.39</td>
                             <td class="border border-gray-300 px-4 py-2">113.24</td>
                    </tr>

                      <tr class="hover:bg-gray-50">
                       <td class="border border-gray-300 px-4 py-2">59</td>
                        <td class="border border-gray-300 px-4 py-2">12 </td>
                        <td class="border border-gray-300 px-4 py-2"> PCS</td>
                        <td class="border border-gray-300 px-4 py-2"> pan iron rich 22 cm</td>
                        <td class="border border-gray-300 px-4 py-2">2,000.00</td>
                         <td class="border border-gray-300 px-4 py-2">24,000.00</td>
                          <td class="border border-gray-300 px-4 py-2">6.54</td>
                             <td class="border border-gray-300 px-4 py-2">137.25</td>
                    </tr>

                          <tr class="hover:bg-gray-50">
                       <td class="border border-gray-300 px-4 py-2">60</td>
                        <td class="border border-gray-300 px-4 py-2">12 </td>
                        <td class="border border-gray-300 px-4 py-2"> PCS</td>
                        <td class="border border-gray-300 px-4 py-2"> pan iron rich 20 cm</td>
                        <td class="border border-gray-300 px-4 py-2">1,850.00</td>
                         <td class="border border-gray-300 px-4 py-2">22,200.00</td>
                          <td class="border border-gray-300 px-4 py-2">6.05</td>
                             <td class="border border-gray-300 px-4 py-2">126.96</td>
                    </tr>

                       <tr class="hover:bg-gray-50">
                       <td class="border border-gray-300 px-4 py-2">61</td>
                        <td class="border border-gray-300 px-4 py-2">12 </td>
                        <td class="border border-gray-300 px-4 py-2"> PCS</td>
                        <td class="border border-gray-300 px-4 py-2"> pan iron rich 24 cm</td>
                        <td class="border border-gray-300 px-4 py-2">2,250.00</td>
                         <td class="border border-gray-300 px-4 py-2">27,000</td>
                          <td class="border border-gray-300 px-4 py-2">7.35</td>
                             <td class="border border-gray-300 px-4 py-2">154.41</td>
                    </tr>

                    <tr class="hover:bg-gray-50">
                       <td class="border border-gray-300 px-4 py-2">62</td>
                        <td class="border border-gray-300 px-4 py-2">12 </td>
                        <td class="border border-gray-300 px-4 py-2"> PCS</td>
                        <td class="border border-gray-300 px-4 py-2"> pan iron rich 26 cm</td>
                        <td class="border border-gray-300 px-4 py-2">2,850.00</td>
                         <td class="border border-gray-300 px-4 py-2">34,200</td>
                          <td class="border border-gray-300 px-4 py-2">9.31</td>
                             <td class="border border-gray-300 px-4 py-2">159.59</td>
                    </tr>

                       <tr class="hover:bg-gray-50">
                       <td class="border border-gray-300 px-4 py-2">63</td>
                        <td class="border border-gray-300 px-4 py-2">12 </td>
                        <td class="border border-gray-300 px-4 py-2"> PCS</td>
                        <td class="border border-gray-300 px-4 py-2">strainer 16310</td>
                        <td class="border border-gray-300 px-4 py-2">2,250.00</td>
                         <td class="border border-gray-300 px-4 py-2">37,000</td>
                          <td class="border border-gray-300 px-4 py-2">7.35</td>
                             <td class="border border-gray-300 px-4 py-2">154.41</td>
                    </tr>

                       <tr class="hover:bg-gray-50">
                       <td class="border border-gray-300 px-4 py-2">64</td>
                        <td class="border border-gray-300 px-4 py-2">36 </td>
                        <td class="border border-gray-300 px-4 py-2"> PCS</td>
                        <td class="border border-gray-300 px-4 py-2"> plate 8 inches</td>
                        <td class="border border-gray-300 px-4 py-2">300.00</td>
                         <td class="border border-gray-300 px-4 py-2">10,800</td>
                          <td class="border border-gray-300 px-4 py-2">0.98</td>
                             <td class="border border-gray-300 px-4 py-2">20.59</td>
                    </tr>


                        <tr class="hover:bg-gray-50">
                       <td class="border border-gray-300 px-4 py-2">65</td>
                        <td class="border border-gray-300 px-4 py-2">36 </td>
                        <td class="border border-gray-300 px-4 py-2"> PCS</td>
                        <td class="border border-gray-300 px-4 py-2"> plate 9 inches</td>
                        <td class="border border-gray-300 px-4 py-2">400.00</td>
                         <td class="border border-gray-300 px-4 py-2">14,400</td>
                          <td class="border border-gray-300 px-4 py-2">1.31</td>
                             <td class="border border-gray-300 px-4 py-2">27.45</td>
                    </tr>


                        <tr class="hover:bg-gray-50">
                       <td class="border border-gray-300 px-4 py-2">66</td>
                        <td class="border border-gray-300 px-4 py-2">12 </td>
                        <td class="border border-gray-300 px-4 py-2"> PCS</td>
                        <td class="border border-gray-300 px-4 py-2">plate 10 inches</td>
                        <td class="border border-gray-300 px-4 py-2">500.00</td>
                         <td class="border border-gray-300 px-4 py-2">18,000</td>
                          <td class="border border-gray-300 px-4 py-2">1.63</td>
                             <td class="border border-gray-300 px-4 py-2">34.31</td>
                    </tr>

    <tr class="hover:bg-gray-50">
                       <td class="border border-gray-300 px-4 py-2">67</td>
                        <td class="border border-gray-300 px-4 py-2">36 </td>
                        <td class="border border-gray-300 px-4 py-2"> PCS</td>
                        <td class="border border-gray-300 px-4 py-2"> plate 11 inches</td>
                        <td class="border border-gray-300 px-4 py-2">600.00</td>
                         <td class="border border-gray-300 px-4 py-2">21,600.00</td>
                          <td class="border border-gray-300 px-4 py-2">1.96</td>
                             <td class="border border-gray-300 px-4 py-2">41.18</td>
                    </tr>


                        <tr class="hover:bg-gray-50">
                       <td class="border border-gray-300 px-4 py-2">68</td>
                        <td class="border border-gray-300 px-4 py-2">20 </td>
                        <td class="border border-gray-300 px-4 py-2"> SET</td>
                        <td class="border border-gray-300 px-4 py-2"> comb set kitchen mate</td>
                        <td class="border border-gray-300 px-4 py-2">75.00</td>
                         <td class="border border-gray-300 px-4 py-2">1,500.00</td>
                          <td class="border border-gray-300 px-4 py-2">0.25</td>
                             <td class="border border-gray-300 px-4 py-2">5.15</td>
                    </tr>


                        <tr class="hover:bg-gray-50">
                       <td class="border border-gray-300 px-4 py-2">69</td>
                        <td class="border border-gray-300 px-4 py-2">20 </td>
                        <td class="border border-gray-300 px-4 py-2"> SET</td>
                        <td class="border border-gray-300 px-4 py-2"> comb set</td>
                        <td class="border border-gray-300 px-4 py-2">95.00</td>
                         <td class="border border-gray-300 px-4 py-2">1,900.00</td>
                          <td class="border border-gray-300 px-4 py-2">0.31</td>
                             <td class="border border-gray-300 px-4 py-2">6.52</td>
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
