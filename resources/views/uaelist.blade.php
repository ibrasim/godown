@extends('layouts.appuae')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
               

                <div class="card-body">
<center>
<h2>UAE SHIPMENT NOV-DEC-JAN</h2></center>
 <table class="table">
          
            <tbody>
               
                    <tr>
                        <td>ORDER FINAL 01 NOV 2025</td>
                        <td> AED 11,328 </td>
                         <td> US$ 3096.00 </td>
                          <td>MVR 65,016</td>
                       
                    </tr>
                       <tr>
                         <td>PAID 6 Nov</td>
                         <td>GOODS RECEIVE AT FREIGH FORWARDER  11 NOVEMBER 2025</td>
                         <td> SHIPPED ON 14 NOVEMBER 2025 -CONTAINWER: CAXU10106706087/ 14139-LCL</td>
                         <td>SUPPLIER : SHAMS AL BASRA</td>
                       
                    </tr>

                         <tr>
                         <td> FREIGHTFORWARDER: GULHAARU GENERAL TRADING</td>
                         <td>Customs Broker lodged declaration  11 Dec 2025</td>
                         <td>Declaration processed on 15 December 2025</td>
                         <td>freight   MVR 9387</td>
                       
                    </tr>

                           <tr>
                         <td>  Duty  MVR 2528.44</td>
                         <td>invoice tota,duty,frieght: MVR 76,931.44 </td>
                         <td>PAYMENT RECEIVED: MVR 35,000 </td>
                         <td> <b>REMAINING:  MVR   41,931.44 </b></td>
                       
                    </tr>
              

                   
              
            </tbody>
        </table>















                           
                        

                           <!-- <a class="nav-link  link-danger" href="{{route('bkknov25')}}">GO TO  main</a> -->
                           <a href="{{ route('my-app-page') }}">Go to App Page</a>
                       <!-- <h6>SUPPLIER : UAE-COSM-PAR-2025-01</h6> -->


                     <!-- <a class="nav-link  link-danger" href="{{route('bkknov25')}}">GO TO ORDER LIST 1 BKK</a> -->
                       <!-- <h6>SUPPLIER : UAE-COSM-PAR-2025-01</h6> -->
                  <table class="w-full border-collapse border border-gray-300">
                <thead class="bg-gray-200">
                    <tr>
                        <th class="border border-gray-300 px-4 py-2 text-left">#</th>
                        <th class="border border-gray-300 px-4 py-2 text-left">ITEM</th>
                        <th class="border border-gray-300 px-4 py-2 text-left">PKG</th>
                        <th class="border border-gray-300 px-4 py-2 text-left">QTY</th>
                        <th class="border border-gray-300 px-4 py-2 text-left">PRICE</th>
                        <th class="border border-gray-300 px-4 py-2 text-left">TOTAL</th>
                       
                    </tr>
                </thead>
                <tbody>
                    <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">1</td>
                        <td class="border border-gray-300 px-4 py-2">COLGATE TB FOR KIDS</td>
                        <td class="border border-gray-300 px-4 py-2">1x72 PCS</td>
                        <td class="border border-gray-300 px-4 py-2">1 CTN</td>
                        <td class="border border-gray-300 px-4 py-2">118.00</td>
                         <td class="border border-gray-300 px-4 py-2">118.00</td>
                                    
                    </tr>
                    <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">2</td>
                        <td class="border border-gray-300 px-4 py-2">COLGATE TB EXTRA CLEAN</td>
                        <td class="border border-gray-300 px-4 py-2">1X120 PCS</td>
                        <td class="border border-gray-300 px-4 py-2">1 CTN</td>
                        <td class="border border-gray-300 px-4 py-2">130.00</td>
                         <td class="border border-gray-300 px-4 py-2">130.00</td>
                                     
                    </tr>
                    <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">3</td>
                        <td class="border border-gray-300 px-4 py-2">COLGATE TB MAXFRESH</td>
                        <td class="border border-gray-300 px-4 py-2">1X72 PCS</td>
                         <td class="border border-gray-300 px-4 py-2">1 CTN</td>
                         <td class="border border-gray-300 px-4 py-2">145.00</td>
                          <td class="border border-gray-300 px-4 py-2">145.00</td>
                                    
                    </tr>
                    <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">4</td>
                        <td class="border border-gray-300 px-4 py-2">COLGATE TB ZIG ZAG</td>
                        <td class="border border-gray-300 px-4 py-2">1X120 PCS</td>
                        <td class="border border-gray-300 px-4 py-2">1 CTN</td>
                        <td class="border border-gray-300 px-4 py-2">105.00</td>
                         <td class="border border-gray-300 px-4 py-2">105.00</td>                                        
                    </tr>
                     <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">5</td>
                        <td class="border border-gray-300 px-4 py-2">ORAL B TB FOR KIDS</td>
                        <td class="border border-gray-300 px-4 py-2">1X168  PCS </td>
                        <td class="border border-gray-300 px-4 py-2">1 CTN</td>
                        <td class="border border-gray-300 px-4 py-2">160.00</td>
                         <td class="border border-gray-300 px-4 py-2">160.00</td>
                                     
                    </tr>
                 
                    </tr>
                     <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">6</td>
                        <td class="border border-gray-300 px-4 py-2">ORAL B TB FOR KIDS</td>
                        <td class="border border-gray-300 px-4 py-2">1X96  PCS </td>
                        <td class="border border-gray-300 px-4 py-2">1 CTN</td>
                        <td class="border border-gray-300 px-4 py-2">370.00</td>
                         <td class="border border-gray-300 px-4 py-2">370.00</td>
                                     
                    </tr>
                        <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">7</td>
                        <td class="border border-gray-300 px-4 py-2">ORAL B TB CRISSCROSS ACTION</td>
                        <td class="border border-gray-300 px-4 py-2">1X96 PCS </td>
                        <td class="border border-gray-300 px-4 py-2">1 CTN</td>
                        <td class="border border-gray-300 px-4 py-2">240.00</td>
                         <td class="border border-gray-300 px-4 py-2">240.00</td>
                        
                    </tr>
                    
                        <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">8</td>
                        <td class="border border-gray-300 px-4 py-2">VASELINE BODY LOTION 200 ML</td>
                        <td class="border border-gray-300 px-4 py-2">1X18 PCS </td>
                        <td class="border border-gray-300 px-4 py-2">1 CTN</td>
                        <td class="border border-gray-300 px-4 py-2">115.00</td>
                         <td class="border border-gray-300 px-4 py-2">115.00</td>                                       
                    </tr>                  
                        <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">9</td>
                        <td class="border border-gray-300 px-4 py-2">VASELINE BODY LOTION 400 ML</td>
                        <td class="border border-gray-300 px-4 py-2">1X48 PCS </td>
                        <td class="border border-gray-300 px-4 py-2">1 CTN</td>
                        <td class="border border-gray-300 px-4 py-2">320.00</td>
                         <td class="border border-gray-300 px-4 py-2">320.00</td>                
                    </tr>
                       <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">10</td>
                        <td class="border border-gray-300 px-4 py-2">VASELINE BODY LOTION 725 ML</td>
                        <td class="border border-gray-300 px-4 py-2">1X12 PCS </td>
                        <td class="border border-gray-300 px-4 py-2">1 CTN</td>
                        <td class="border border-gray-300 px-4 py-2">155.00</td>
                         <td class="border border-gray-300 px-4 py-2">155.00</td>                      
                    </tr>
                         <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">11</td>
                        <td class="border border-gray-300 px-4 py-2">DOVE SHAMPOO 400 ML</td>
                        <td class="border border-gray-300 px-4 py-2">1X12 PCS </td>
                        <td class="border border-gray-300 px-4 py-2">1 CTN</td>
                        <td class="border border-gray-300 px-4 py-2">80.00</td>
                         <td class="border border-gray-300 px-4 py-2">80.00</td>                 
                    </tr>
                       <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">12</td>
                        <td class="border border-gray-300 px-4 py-2">DOVE LOTION 400 ML</td>
                        <td class="border border-gray-300 px-4 py-2">1X18 PCS </td>
                        <td class="border border-gray-300 px-4 py-2">1 CTN</td>
                        <td class="border border-gray-300 px-4 py-2">175.00</td>
                         <td class="border border-gray-300 px-4 py-2">175.00</td>                 
                    </tr>
                      <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">13</td>
                        <td class="border border-gray-300 px-4 py-2">DOVE SHAMPOO 200 ML</td>
                        <td class="border border-gray-300 px-4 py-2">1X24 PCS </td>
                        <td class="border border-gray-300 px-4 py-2">1 CTN</td>
                        <td class="border border-gray-300 px-4 py-2">80.00</td>
                         <td class="border border-gray-300 px-4 py-2">80.00</td>                 
                    </tr>                  
                       <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">14</td>
                        <td class="border border-gray-300 px-4 py-2">BAJAJ ALMOND 100 ML</td>
                        <td class="border border-gray-300 px-4 py-2">1X40 PCS </td>
                        <td class="border border-gray-300 px-4 py-2">1 CTN</td>
                        <td class="border border-gray-300 px-4 py-2">140.00</td>
                         <td class="border border-gray-300 px-4 py-2">140.00</td>                  
                    </tr>
                     <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">15</td>
                        <td class="border border-gray-300 px-4 py-2">VATIKA HAIR CREAM 140 GM</td>
                        <td class="border border-gray-300 px-4 py-2">1X48 PCS </td>
                        <td class="border border-gray-300 px-4 py-2">1 CTN</td>
                        <td class="border border-gray-300 px-4 py-2">145.00</td>
                         <td class="border border-gray-300 px-4 py-2">145.00</td>                 
                    </tr>
                       <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">16</td>
                        <td class="border border-gray-300 px-4 py-2">GILLETTE SHAVIG FOAM 200 ML</td>
                        <td class="border border-gray-300 px-4 py-2">1X12 PCS </td>
                        <td class="border border-gray-300 px-4 py-2">1 CTN</td>
                        <td class="border border-gray-300 px-4 py-2">65.00</td>
                         <td class="border border-gray-300 px-4 py-2">130.00</td>                
                    </tr>
                      <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">17</td>
                        <td class="border border-gray-300 px-4 py-2">DOVE SHOWER GEL  200 ML</td>
                        <td class="border border-gray-300 px-4 py-2">1X24 PCS </td>
                        <td class="border border-gray-300 px-4 py-2">1 CTN</td>
                        <td class="border border-gray-300 px-4 py-2">92.00</td>
                         <td class="border border-gray-300 px-4 py-2">92.00</td>                
                    </tr>
                       <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">18</td>
                        <td class="border border-gray-300 px-4 py-2">DOVE SHOWER GEL 550 ML</td>
                        <td class="border border-gray-300 px-4 py-2">1X12 PCS </td>
                        <td class="border border-gray-300 px-4 py-2">1 CTN</td>
                        <td class="border border-gray-300 px-4 py-2">110.00</td>
                         <td class="border border-gray-300 px-4 py-2">110.00</td>                
                    </tr>
   
                     


                  

                          <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">19</td>
                        <td class="border border-gray-300 px-4 py-2"> SENSODYNE TP 100 GM FRESHMINT</td>
                        <td class="border border-gray-300 px-4 py-2">72 PCS </td>
                        <td class="border border-gray-300 px-4 py-2">1 CTN</td>
                        <td class="border border-gray-300 px-4 py-2">465.00</td>
                         <td class="border border-gray-300 px-4 py-2">465.00</td>
                                        
                    </tr>

                           <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">20</td>
                        <td class="border border-gray-300 px-4 py-2"> SENSODYNE TP 100 GM COOLGEL</td>
                        <td class="border border-gray-300 px-4 py-2">72 PCS </td>
                        <td class="border border-gray-300 px-4 py-2">1 CTN</td>
                        <td class="border border-gray-300 px-4 py-2">465.00</td>
                         <td class="border border-gray-300 px-4 py-2">465.00</td>                
                    </tr>

                         <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">21</td>
                        <td class="border border-gray-300 px-4 py-2"> SENSODYNE TP 100 GM ORIGNA</td>
                        <td class="border border-gray-300 px-4 py-2">72 PCS </td>
                        <td class="border border-gray-300 px-4 py-2">1 CTN</td>
                        <td class="border border-gray-300 px-4 py-2">480.00</td>
                         <td class="border border-gray-300 px-4 py-2">480.00</td>
                       
                   
                    </tr>

                        <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">22</td>
                        <td class="border border-gray-300 px-4 py-2"> SENSODYNE TP 100 GM MULTIACTION</td>
                        <td class="border border-gray-300 px-4 py-2">72 PCS </td>
                        <td class="border border-gray-300 px-4 py-2">1 CTN</td>
                        <td class="border border-gray-300 px-4 py-2">495.00</td>
                         <td class="border border-gray-300 px-4 py-2">495.00</td>
                       
                   
                    </tr>

                         <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">23</td>
                        <td class="border border-gray-300 px-4 py-2"> COLGATE TP OPTIC WHITE LASTING WHITE 75 M</td>
                        <td class="border border-gray-300 px-4 py-2">48 PCS </td>
                        <td class="border border-gray-300 px-4 py-2">1 CTN</td>
                        <td class="border border-gray-300 px-4 py-2">275.00</td>
                         <td class="border border-gray-300 px-4 py-2">275.00</td>
                       
                   
                    </tr>
                    

                          <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">24</td>
                        <td class="border border-gray-300 px-4 py-2"> COLGATE TP MAXFRESH RED 100 M</td>
                        <td class="border border-gray-300 px-4 py-2">72 PCS </td>
                        <td class="border border-gray-300 px-4 py-2">1 CTN</td>
                        <td class="border border-gray-300 px-4 py-2">208.00</td>
                         <td class="border border-gray-300 px-4 py-2">208.00</td>
                       
                   
                    </tr>

                          <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">25</td>
                        <td class="border border-gray-300 px-4 py-2"> COLGATE TP MAXFRESH BLUE 100 M</td>
                        <td class="border border-gray-300 px-4 py-2">72 PCS </td>
                        <td class="border border-gray-300 px-4 py-2">1 CTN</td>
                        <td class="border border-gray-300 px-4 py-2">205.00</td>
                         <td class="border border-gray-300 px-4 py-2">205.00</td>
                       
                   
                    </tr>
                    
                      <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">26</td>
                        <td class="border border-gray-300 px-4 py-2"> COLGATE TP MAXFRESH GREEN 100 M</td>
                        <td class="border border-gray-300 px-4 py-2">72 PCS </td>
                        <td class="border border-gray-300 px-4 py-2">1 CTN</td>
                        <td class="border border-gray-300 px-4 py-2">205.00</td>
                         <td class="border border-gray-300 px-4 py-2">205.00</td>
                       
                   
                    </tr>
                    

                  
                    
                       <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">27</td>
                        <td class="border border-gray-300 px-4 py-2"> PENDORA BODY SPRAY 200 ML</td>
                        <td class="border border-gray-300 px-4 py-2">96 PCS </td>
                        <td class="border border-gray-300 px-4 py-2">1 CTN</td>
                        <td class="border border-gray-300 px-4 py-2">520.00</td>
                         <td class="border border-gray-300 px-4 py-2">520.00</td>
                       
                   
                    </tr>

                       
                       <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">28</td>
                        <td class="border border-gray-300 px-4 py-2"> PENDORA ROUGH EDP 100 M</td>
                        <td class="border border-gray-300 px-4 py-2">12 PCS </td>
                        <td class="border border-gray-300 px-4 py-2">1 CTN</td>
                        <td class="border border-gray-300 px-4 py-2">278.00</td>
                         <td class="border border-gray-300 px-4 py-2">278.00</td>
                       
                   
                    </tr>
                    
                       <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">29</td>
                        <td class="border border-gray-300 px-4 py-2"> PENDORA BOMBINATE INTENSE EDP 100 ML</td>
                        <td class="border border-gray-300 px-4 py-2">12 PCS </td>
                        <td class="border border-gray-300 px-4 py-2">1 CTN</td>
                        <td class="border border-gray-300 px-4 py-2">278.00</td>
                         <td class="border border-gray-300 px-4 py-2">278.00</td>
                       
                   
                    </tr>

                         <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">30</td>
                        <td class="border border-gray-300 px-4 py-2"> PENDORA AWAY EDP 100 ML</td>
                        <td class="border border-gray-300 px-4 py-2">12 PCS </td>
                        <td class="border border-gray-300 px-4 py-2">1 CTN</td>
                        <td class="border border-gray-300 px-4 py-2">278.00</td>
                         <td class="border border-gray-300 px-4 py-2">278.00</td>
                       
                   
                    </tr>

                          <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">31</td>
                        <td class="border border-gray-300 px-4 py-2"> PENDORA AVENTURA EDP 100 ML</td>
                        <td class="border border-gray-300 px-4 py-2">12 PCS </td>
                        <td class="border border-gray-300 px-4 py-2">1 CTN</td>
                        <td class="border border-gray-300 px-4 py-2">278.00</td>
                         <td class="border border-gray-300 px-4 py-2">278.00</td>
                       
                   
                    </tr>

                           <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">32</td>
                        <td class="border border-gray-300 px-4 py-2"> PENDORA SAVIOUR NEW EDP 100 ML</td>
                        <td class="border border-gray-300 px-4 py-2">12 PCS </td>
                        <td class="border border-gray-300 px-4 py-2">1 CTN</td>
                        <td class="border border-gray-300 px-4 py-2">278.00</td>
                         <td class="border border-gray-300 px-4 py-2">278.00</td>
                       
                   
                    </tr>
                    

                           <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">33</td>
                        <td class="border border-gray-300 px-4 py-2"> PENDORA FRIEND EDP 100 ML</td>
                        <td class="border border-gray-300 px-4 py-2">12 PCS </td>
                        <td class="border border-gray-300 px-4 py-2">1 CTN</td>
                        <td class="border border-gray-300 px-4 py-2">194.00</td>
                         <td class="border border-gray-300 px-4 py-2">194.00</td>
                       
                   
                    </tr>
                    

                           <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">34</td>
                        <td class="border border-gray-300 px-4 py-2"> FOGG DEO 150 ML</td>
                        <td class="border border-gray-300 px-4 py-2">144 PCS </td>
                        <td class="border border-gray-300 px-4 py-2">2 CTN</td>
                        <td class="border border-gray-300 px-4 py-2">320.00</td>
                         <td class="border border-gray-300 px-4 py-2">640.00</td>
                       
                   
                    </tr>
                       <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">35</td>
                        <td class="border border-gray-300 px-4 py-2"> FA Roll on 50 ML</td>
                        <td class="border border-gray-300 px-4 py-2">24 PCS </td>
                        <td class="border border-gray-300 px-4 py-2">2 CTN</td>
                        <td class="border border-gray-300 px-4 py-2">63.00</td>
                         <td class="border border-gray-300 px-4 py-2">126.00</td>
                       
                   
                    </tr>
                     
                       <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">36</td>
                        <td class="border border-gray-300 px-4 py-2">  GILLETTE BLUE II PLUS (10+4 )</td>
                        <td class="border border-gray-300 px-4 py-2">220 PKT </td>
                        <td class="border border-gray-300 px-4 py-2">1 CTN</td>
                        <td class="border border-gray-300 px-4 py-2">235.00</td>
                         <td class="border border-gray-300 px-4 py-2">235.00</td>
                       
                   
                    </tr>

                       <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">37</td>
                        <td class="border border-gray-300 px-4 py-2">   GILLETTE BLUE 3 SPORT (8)</td>
                        <td class="border border-gray-300 px-4 py-2">12 PCS </td>
                        <td class="border border-gray-300 px-4 py-2">1 CTN</td>
                        <td class="border border-gray-300 px-4 py-2">135.00</td>
                         <td class="border border-gray-300 px-4 py-2">135.00</td>
                       
                   
                    </tr>
                       <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">38</td>
                        <td class="border border-gray-300 px-4 py-2"> GILLETTE SIMPLY VENUS (4)</td>
                        <td class="border border-gray-300 px-4 py-2">96 PKT </td>
                        <td class="border border-gray-300 px-4 py-2">1 CTN</td>
                        <td class="border border-gray-300 px-4 py-2">340.00</td>
                         <td class="border border-gray-300 px-4 py-2">340.00</td>
                       
                   
                    </tr>
                       <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">39</td>
                        <td class="border border-gray-300 px-4 py-2"> GILLETTE SIMPLY VENUS (8+4</td>
                        <td class="border border-gray-300 px-4 py-2">20 PKT </td>
                        <td class="border border-gray-300 px-4 py-2">1 CTN</td>
                        <td class="border border-gray-300 px-4 py-2">345.00</td>
                         <td class="border border-gray-300 px-4 py-2">345.00</td>
                       
                   
                    </tr>
                       <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">40</td>
                        <td class="border border-gray-300 px-4 py-2"> TOWEL 27 X 54 SIZE</td>
                        <td class="border border-gray-300 px-4 py-2">12 PCS </td>
                        <td class="border border-gray-300 px-4 py-2">8 DOZ</td>
                        <td class="border border-gray-300 px-4 py-2">120.00</td>
                         <td class="border border-gray-300 px-4 py-2">960.00</td>
                       
                   
                    </tr>
                       <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">41</td>
                        <td class="border border-gray-300 px-4 py-2">  TOWEL 70 X 140 SIZ</td>
                        <td class="border border-gray-300 px-4 py-2">12 PCS </td>
                        <td class="border border-gray-300 px-4 py-2">5 DOZ</td>
                        <td class="border border-gray-300 px-4 py-2">95.00</td>
                         <td class="border border-gray-300 px-4 py-2">475.00</td>
                       
                   
                    </tr>
                       <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">42</td>
                        <td class="border border-gray-300 px-4 py-2">  TOWEL 70 X 140 SIZE</td>
                        <td class="border border-gray-300 px-4 py-2">12 PCS </td>
                        <td class="border border-gray-300 px-4 py-2">2 DOZ</td>
                        <td class="border border-gray-300 px-4 py-2">105.00</td>
                         <td class="border border-gray-300 px-4 py-2">210.00</td>
                       
                   
                    </tr>
                    
                          <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">43</td>
                        <td class="border border-gray-300 px-4 py-2">  NIVEA ROLL ON 50 ML</td>
                        <td class="border border-gray-300 px-4 py-2">24 PCS </td>
                        <td class="border border-gray-300 px-4 py-2">1 CTN</td>
                        <td class="border border-gray-300 px-4 py-2">78.00</td>
                         <td class="border border-gray-300 px-4 py-2">78.00</td>
                       
                   
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
