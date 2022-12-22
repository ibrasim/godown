@extends('layouts.app1')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('DELIVERY') }}</div>

                <div class="card-body">
                    
                    <div class="card-body">
                        <form method="POST" action="savedelivery">
                            @csrf
                          
                            <div class="form-group row">
                                <div class="col">
                                    <label for="exampleInputEmail1">Shop Name</label>
                                    <input type="text"  name="shopname" class="form-control" >
                               </div>
                               <div class="col">
                                <label for="exampleInputEmail1">Customer Name</label>
                                 <input type="text"  name="customer" class="form-control">
                                </div>
                                <div class="col">
                                    <label for="exampleInputEmail1">Packages</label>
                                     <input type="text" name="packages" class="form-control" >
                                </div>
                                <div class="col">
                                    <label for="exampleInputEmail1">Vessel Name</label>
                                    <input type="text" name="boat"class="form-control" >
                                </div>    
                                <div class="col">
                                    <label for="exampleInputEmail1">Vehicle Number</label>
                                    <input type="text" name="vehicleno" class="form-control" >
                               </div>
                            
                            
                            </div>
                       
                                
                            <div class="form-group row">
                               
                               
                            
                              

                            <div class="form-group col">
                                <div class="col">
                                    <button type="submit" class="btn btn-primary">
                                            {{ __('Add New Record') }}
                                        </button>
                                  
                                     </div>
                                </div>
                            </form>
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

                                <div class="col">
                                    <form method="GET" action="export_to">
                                    
                                  
                                        @csrf
                                      
                                        <div class="form-group row">
                                            <div class="col">
                                                <button type="submit" class="btn btn-danger">
                                                        {{ __('Export to CSV') }}
                                                    </button>
                                              
                                            </div>
                                         </div>
                                    </form>
                                </div>

                            </div>
                     

                     
      
                </div>
            </div>





            
        </div>
    </div>
</div>

	
<table class="table table-hover">     
    <thead>
         <tr>
            <th scope="col">Action</th>
            <th scope="col">ID</th>
            <th scope="col">Shop</th>
           <th scope="col">Customer</th>
           <th scope="col">Update</th>
           <th scope="col">Packages</th>
           <th scope="col">Vessel</th>
           
           <th scope="col">Vehicle Number</th>
           <th scope="col">Finish</th>
           
           <th scope="col">Assigned /Start / Finish  Time</th>
          
            
            <th scope="col">Start</th>  
          
         </tr>
     </thead>
 @foreach ($delivery as $item1) 
                       
         <tr>
            <td>
                <form action="{{ route('delete_delivery',$item1->id) }}" method="post"> 
                                 
                 @csrf

                 <button type="submit" value="delete" class="btn btn-secondary" > DELETE </button>
               </form>    
                 
                    
                 </td>
                 <td>{{$item1->id}}</td>      
            <td>{{$item1->completetime}}</td>      
            <td>{{$item1->customer}}</td>      
            <td><a href={{ "show_delivery/".$item1['id'] }}>Edit</td>



            <td>{{$item1->pkgs}}</td>
            <td>{{$item1->boat}}</td> 
          
            <td>{{$item1->vehicleno}}</td>
            <td>
                <form action="{{ route('complete_delivery',$item1->id) }}" method="post"> 
                                 
                 @csrf

                 <button type="submit" value="delete" class="btn btn-warning" > Finish </button>
               </form>    
                 
                    

            </td>
            
            <td>{{$item1->assignedtime}}</td>
           
           
            
          
                    <td>
                 <form action="{{ route('update_delivery',$item1->id) }}" method="post"> 
                                  
                  @csrf

                  <button type="submit" value="delete" class="btn btn-success" > Start </button>
                </form>    
                  
                     
                  </td>
                 
                  
             </tr>
@endforeach 
    </table>     
</div>
@endsection

