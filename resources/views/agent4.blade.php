@extends('layouts.app1')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('DELIVERY') }}</div>

                <div class="card-body">
                    
                    <div class="card-body">
                        <form method="POST" action="savedelivery">
                            @csrf
                          
                            <div class="form-group row">
                                <div class="col">
                                     <input type="text"  name="customer" class="form-control" placeholder="Customer">
                                </div>
                                <div class="col">
                                     <input type="text" name="packages" class="form-control" placeholder="packages">
                                </div>
                                <div class="col">
                                    <input type="text" name="boat"class="form-control" placeholder="boat Name ">
                                </div>
                              
                                <div class="col">
                                    <input type="text" name="vehicleno" class="form-control" placeholder="vehicleno ">
                               </div>
                           
                               <div class="col">
                                <input type="text" name="assigntime" class="form-control" placeholder="assig datae & time">
                           </div>
                       
                   
                              
                           
						
                                <div class="col">
                                <button type="submit" class="btn btn-primary">
                                        {{ __('Add') }}
                                    </button>
                              
                            </div>
  
                        </form>


                        <div class="card-body">
                            <form method="GET" action="pending-delivery">
                                @csrf
                                <div class="form-group row">
                                    <div class="col">
                                        <button type="submit" class="btn btn-warning">
                                                {{ __('PENDING') }}
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

	
<table class="table table-hover">     
    <thead>
         <tr>
            <th scope="col">Discard</th>
           <th scope="col">Customer Name </th>
           <th scope="col">Packages</th>
           <th scope="col">Vessel / Vehicle Name</th>
           <th scope="col">Vehicle Number</th>
           <th scope="col">Assigned Date / Time</th>
            <th scope="col">Status</th>
            <th scope="col">Update</th>  
          
         </tr>
     </thead>
 @foreach ($delivery as $item1) 
                       
         <tr>
            <td>
                <form action="{{ route('delete_delivery',$item1->id) }}" method="post"> 
                                 
                 @csrf

                 <button type="submit" value="delete" class="btn btn-danger" > DELETE </button>
               </form>    
                 
                    
                 </td>
            <td>{{$item1->customer}}</td>      
            <td>{{$item1->pkgs}}</td>
            <td>{{$item1->boat}}</td> 
            <td>{{$item1->vehicleno}}</td>
            <td>{{$item1->assignedtime}}</td>
             <td>{{$item1->status}}</td>
           
            
          
                    <td>
                 <form action="{{ route('update_delivery',$item1->id) }}" method="post"> 
                                  
                  @csrf

                  <button type="submit" value="delete" class="btn btn-success" > UPDATE </button>
                </form>    
                  
                     
                  </td>
                 
                  
             </tr>
@endforeach 
    </table>     
</div>
@endsection

