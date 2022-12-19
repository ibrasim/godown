@extends('layouts.app')
@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <!-- <div class="card-header">{{ __('Receive Goods for Export') }}</div> -->

                    <div class="card-body">
                        <form method="POST" action="savereceivegood">
                            @csrf
                          
                            <div class="form-group row">
                                <div class="col">
                                    <label for="exampleInputEmail1">Customer code</label>
                                    <input type="text"  name="customercode" class="form-control" >
                               </div>
                               <div class="col">
                                <label for="exampleInputEmail1">Customer name</label>
                                 <input type="text"  name="customername" class="form-control">
                                </div>
                                <div class="col">
                                    <label for="exampleInputEmail1">Supplier code</label>
                                     <input type="text" name="suppliercode" class="form-control" >
                                </div>
                                <div class="col">
                                    <label for="exampleInputEmail1" placeholder="Shipping Mark">supplier name</label>
                                     <input type="text" name="suppliername" class="form-control" >
                                </div>
                                <div class="col">
                                    <label for="exampleInputEmail1">Delivery staff name</label>
                                     <input type="text" name="deliverystaffname" class="form-control" >
                                </div>

                                <div class="col">
                                    <label for="exampleInputEmail1">Delivery staff ID</label>
                                     <input type="text" name="deliverystaffid" class="form-control" >
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col">
                                    <label for="exampleInputEmail1">Mode of Transport</label>
                                    <input type="text"  name="modeoftransport" class="form-control" >
                               </div>
                               <div class="col">
                                <label for="exampleInputEmail1">Goods receive time</label>
                                 <input type="text"  name="goodsreceivetime" class="form-control">
                                </div>
                                <div class="col">
                                    <label for="exampleInputEmail1">type of Cago</label>
                                     <input type="text" name="typeofcargo" class="form-control" >
                                </div>
                                
                                <div class="col">
                                    <label for="exampleInputEmail1">Type of Package</label>
                                    <input type="text"  name="packagetype" class="form-control" >
                               </div>
                                <div class="col">
                                    <label for="exampleInputEmail1">No of Packages</label>
                                     <input type="text" name="noofpkg" class="form-control" >
                                </div>
                                <div class="col">
                                    <label for="exampleInputEmail1">Total Weight</label>
                                     <input type="text" name="weight" class="form-control" >
                                </div>
                              
                            </div>

                            <div class="form-group row">
                               
                               
                               
                               
                                <div class="col">
                                    <label for="exampleInputEmail1">location</label>
                                     <input type="text" name="location" class="form-control" >
                                </div>
                                <div class="col">
                                    <label for="exampleInputEmail1">staffid</label>
                                     <input type="text" name="staffid" class="form-control" >
                                </div>

                                <div class="col">
                                    <button type="submit" class="btn btn-primary">
                                            {{ __('Save') }}
                                        </button>
                                  
                                </div>
                               
                              



                            </div>
                        </form>

                        </div>
                    </div>







        </div>
    </div>

    
<table class="table table-hover">     
    <thead>
         <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Name</th>
            <th scope="col">Delivered</th>
            <th scope="col">Delivered ID</th>
            <th scope="col">Mode</th>
            <th scope="col">Date</th>
            <th scope="col">time</th>
            <th scope="col">Type</th>
            <th scope="col">Cargo</th>
            <th scope="col">Packages</th>
            <th scope="col">Weight</th>
            <th scope="col">Location</th>
            <th scope="col">Status</th>
          
         </tr>
     </thead>
         
                @foreach ($goods as $item) 
				
        
		
                              
				<tr>
                   <td>{{$item->id}}</td>      
                   <td>{{$item->customername}}</td>      
                   <td>{{$item->suppliername}}</td>      
                   <td>{{$item->deliverystaffname}}</td>      
                   <td>{{$item->deliverystaffid}}</td>      
                   <td>{{$item->modeoftransport}}</td>      
                   <td>{{$item->receivedate}}</td>      
                   <td>{{$item->receivetime}}</td>      
                   <td>{{$item->cargotype}}</td>      
                   <td>{{$item->packagetype}}</td>    
                   <td>{{$item->noofpkgs}}</td>    
                   <td>{{$item->weight}}</td>    
                   <td>{{$item->location}}</td>      
                   <td>{{$item->status}}</td>      

                
                 
                    </tr>
	@endforeach 
           </table>      
    </div>
@endsection



{{--  --}}


{{-- https://stackoverflow.com/questions/26146719/use-laravel-to-download-table-as-csv --}}