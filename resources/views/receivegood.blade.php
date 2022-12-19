@extends('layouts.app')
@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <!-- <div class="card-header">{{ __('Receive Goods for Export') }}</div> -->

                    <div class="card-body">
                        <form method="POST" action="savedelivery">
                            @csrf
                          
                            <div class="form-group row">
                                <div class="col">
                                    <label for="exampleInputEmail1">Consignment No</label>
                                    <input type="text"  name="shopname" class="form-control" >
                               </div>
                               <div class="col">
                                <label for="exampleInputEmail1">Customer ID / Name</label>
                                 <input type="text"  name="customer" class="form-control">
                                </div>
                                <div class="col">
                                    <label for="exampleInputEmail1">Supplier ID / Name</label>
                                     <input type="text" name="packages" class="form-control" >
                                </div>
                                <div class="col">
                                    <label for="exampleInputEmail1" placeholder="Shipping Mark">Current Address</label>
                                     <input type="text" name="packages" class="form-control" >
                                </div>
                                <div class="col">
                                    <label for="exampleInputEmail1">Primary Contact</label>
                                     <input type="text" name="packages" class="form-control" >
                                </div>

                                <div class="col">
                                    <label for="exampleInputEmail1">Current Phone</label>
                                     <input type="text" name="packages" class="form-control" >
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col">
                                    <label for="exampleInputEmail1">Delivery Staff Name</label>
                                    <input type="text"  name="shopname" class="form-control" >
                               </div>
                               <div class="col">
                                <label for="exampleInputEmail1">Delivery Staff ID</label>
                                 <input type="text"  name="customer" class="form-control">
                                </div>
                                <div class="col">
                                    <label for="exampleInputEmail1">Mode of Transport</label>
                                     <input type="text" name="packages" class="form-control" >
                                </div>
                                <div class="col">
                                    <label for="exampleInputEmail1">Arrived Date / Time</label>
                                     <input type="text" name="packages" class="form-control" >
                                </div>
                                <div class="col">
                                    <label for="exampleInputEmail1">Type of Package</label>
                                    <input type="text"  name="shopname" class="form-control" >
                               </div>
                               <div class="col">
                                <label for="exampleInputEmail1">Type of Cargo</label>
                                 <input type="text"  name="customer" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                               
                               
                                <div class="col">
                                    <label for="exampleInputEmail1">No of Packages</label>
                                     <input type="text" name="packages" class="form-control" >
                                </div>
                                <div class="col">
                                    <label for="exampleInputEmail1">Total Weight</label>
                                     <input type="text" name="packages" class="form-control" >
                                </div>
                                <div class="col">
                                    <label for="exampleInputEmail1">Total Weigt</label>
                                     <input type="text" name="packages" class="form-control" >
                                </div>
                                <div class="col">
                                    <label for="exampleInputEmail1">Total Weigt</label>
                                     <input type="text" name="packages" class="form-control" >
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>





        </div>
    </div>
         
                {{-- @foreach ($customer as $item) 
				
           <table class="table table-hover">     
           <thead>
				<tr>
				  <th scope="col">Shipping mark </th>
				  <th scope="col">Company Name</th>
				  <th scope="col">Country</th>
				  <th scope="col">Registration</th>
				  <th scope="col">Mobile</th>
				  <th scope="col">Email</th>
				  <th scope="col">Social Account</th>
				  <th scope="col">photo</th>
				</tr>
			</thead>
		
                              
				<tr>
                   <td>{{$item->shippingmark}}</td>      
                   <td>{{$item->companyname}}</td>
                   <td>{{$item->country}}</td> 
                   <td>{{$item->registration}}</td>
                   <td>{{$item->mobile}}</td>
                   <td>{{$item->email1}}</td>
                   <td>{{$item->socialaccounts}}</td>   
                   <td> <a target="_blank" href= "{{ asset('/'.$item->field2) }}"  width="45" height="75">photo</a>
                   </td> 
                   <td>
						<form action="{{ route('delete_customer',$item->id) }}" method="post">
                         
                         
                         @csrf
							<button type="submit" value="delete" class="btn btn-danger" > DELETE </button>
						</form>             
                         
                    </tr>
	@endforeach 
           </table>      --}}
    </div>
@endsection
