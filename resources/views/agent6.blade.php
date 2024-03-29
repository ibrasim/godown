@extends('layouts.app1')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Search Data') }}</div>

                <div class="card-body">
                    <div class="row">
                    <div class="col">
                        <form method="GET" action="pending-delivery">
                            @csrf
                            <div class="form-group row">
                                <div class="col">
                                    <button type="submit" class="btn btn-success">
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
                                    <button type="submit" class="btn btn-warning">
                                            {{ __('SHOP ORDERED') }}
                                        </button>
                                  
                                </div>
                             </div>
                        </form>
                    </div>


                    <div class="col">                        
                        public vessel location provided by
                        <a href="default.asp"><img src=" http://followme.mv/api/images/icon_50.png" style="width:42px;height:42px;"></a>
                        <a href="https://m.followme.mv/public/4990" target="_blank">A</a>
                      
                    </div>
                  

                </div>

                    <table class="table table-hover">     
                        <thead>
                             <tr style="background-color: #76c4e6">
                                <th scope="col">ID</th>
                                <th scope="col">Created</th>
                                <th scope="col">Shop</th>
                               <th scope="col">Customer</th>
                               <th scope="col">Packages</th>
                               <th scope="col">Vessel</th>    
                               <th scope="col">Vehicle</th>
                               <th scope="col">Status</th>
                               <th scope="col">Action Date Time</th>         
                               <th scope="col">Remarks</th>         
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
                                <td>{{$item1->remarks}}</td>
                                 </tr>
                    @endforeach 
                        </table>     
                        <div  style="margin-left :40%">
                            {{ $delivery->links() }}
                        </div> 
                    


            </div>           
        </div>
    </div>
</div>


</div>
@endsection

