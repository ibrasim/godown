@extends('layouts.app1')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('please select data and past special -match destination formatting- in Excel and save locally prefered to do end of every day') }}</div>

                <div class="card-body">
                    
                    <div class="col">
                        <form method="GET" action="pending-delivery">
                            @csrf
                            <div class="form-group row">
                                <div class="col">
                                    <button type="submit" class="btn btn-secondary">
                                            {{ __('CUSTOMER ORDERED') }}
                                        </button>
                                  
                                </div>
                             </div>
                        </form>
                    </div>
            

                    <div class="col">
                        <form method="GET" action="shopodered">
                            @csrf
                            <div class="form-group row">
                                <div class="col">
                                    <button type="submit" class="btn btn-secondary">
                                            {{ __('SHOP ORDERED') }}
                                        </button>
                                  
                                </div>
                             </div>
                        </form>
                    </div>

                    <div class="col">
                        <form method="GET" action="delivery_ordered">
                            @csrf
                            <div class="form-group row">
                                <div class="col">
                                    <button type="submit" class="btn btn-danger">
                                            {{ __('DESCENDING ORDER') }}
                                        </button>
                                  
                                </div>
                             </div>
                        </form>
                    </div>

                 

                    <table class="table table-hover">     
                        <thead>
                             <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Created Date</th>
                                <th scope="col">Shop</th>
                               <th scope="col">Customer</th>
                               <th scope="col">Packages</th>
                               <th scope="col">Vessel</th>    
                               <th scope="col">Vehicle Number</th>
                               <th scope="col">Status</th>
                               <th scope="col">Action Date Time</th>         
                             </tr>
                         </thead>
                     @foreach ($delivery as $item1)                     
                             <tr>
                                <td>{{$item1->id}}</td>      
                                <td>{{$item1->created_at}}</td>      
                                <td>{{$item1->completetime}}</td>      
                                <td>{{$item1->customer}}</td>      
                                <td>{{$item1->pkgs}}</td>
                                <td>{{$item1->boat}}</td> 
                                <td>{{$item1->vehicleno}}</td>
                                <td>{{$item1->status}}</td>
                                <td>{{$item1->assignedtime}}</td>
                                 </tr>
                    @endforeach 
                        </table>     


            </div>           
        </div>
    </div>
</div>


</div>
@endsection

