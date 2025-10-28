@extends('layouts.appuae')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
               

                <div class="card-body">
                    <h5>ORDER LIST -DRAFT 28 OCT 25  | aprox (AED 1440.00  | US$ 392.00  | MVR 6002.00)</h5>
                    <h5>SUPPLIER : UAE-COSM-PAR-2025-01 |  FREIGHTFORWARDER: XXX </h5>
                    <a class="nav-link" href="{{route('uaelist')}}">GO TO ORDER LIST 1 UAE</a>
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
                        <td class="border border-gray-300 px-4 py-2">PENDORA BODY SPRAY 200ml (different flavours) </td>
                        <td class="border border-gray-300 px-4 py-2">1x96 PCS</td>
                        <td class="border border-gray-300 px-4 py-2">1 CTN</td>
                        <td class="border border-gray-300 px-4 py-2">4.17</td>
                         <td class="border border-gray-300 px-4 py-2">118.00</td>
                       
                        
                
                    </tr>
                    <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">2</td>
                        <td class="border border-gray-300 px-4 py-2"> PENDORA SCENTS BOMBINATE INTENSE FOR WOMEN 100ml</td>
                        <td class="border border-gray-300 px-4 py-2">1X12 PCS</td>
                        <td class="border border-gray-300 px-4 py-2">1 CTN</td>
                        <td class="border border-gray-300 px-4 py-2">21.67</td>
                         <td class="border border-gray-300 px-4 py-2">1040.16</td>
                       
                        
                
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
