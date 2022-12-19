@extends('layouts.app')
@section('content')
<div class="container">
        <div class="row justify-content-center">
           
        </div>
        
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                {{--  --}}


                <div>
                    <h3>Consignment Tracking Details - to update updated</h3>
                </div>


                <table class="table table-hover">     
                    <thead>
                    <tr>
                    <th scope="col">Customer </th>
                    <th scope="col">Vendor </th>
                    <th scope="col">Goods </th>
                    <th scope="col">Qty </th>
                    <th scope="col">Weight </th>
                    <th scope="col">Sorted Dates</th>
                    <th scope="col">Send for Shipping </th>
                    <th scope="col">Shipped Date</th>
                    <th scope="col">Arrival Date </th>
                    </tr>
                    </thead>
               @foreach ($tracking as $item)                             
                    <tr>
                        <td>{{$item->customer}}</td>
                        <td>{{$item->vendor}}</td>
                        <td>{{$item->goods}}</td>
                        <td>{{$item->qty}}</td>
                        <td>{{$item->weight}}</td>
                        <td>{{$item->sorteddt}}</td>
                        <td>{{$item->sendforshipdt}}</td>
                        <td>{{$item->shhippeddt}}</td>
                        <td>{{$item->arrivaldt}}</td>
                    </tr>
             @endforeach 
                       </table>
            
                </div>
                {{--  --}}
                </div>
            </div>
        </div>


    
@endsection
