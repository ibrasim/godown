@extends('layouts.app')
@section('content')





<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
						<form method="POST" action="grnsavedata">
                        <?php $z = 3; ?> 
                            @csrf              
                            
                            <div class="form-group row">

                            <div class="col">
                            <div class="form-group mb-2">
                            <label for = "title">GRN Number<span class="text-danger">*<span></label>
                            <input type="text"  name="grn_no" class="form-control" placeholder="GRN Number">
                            </div>                               
                            </div>                               
                            
                            <div class="col">
                            <div class="form-group mb-2">
                            <label for = "title">Customer Code<span class="text-danger">*<span></label>
                            <input type="text"  name="cust_id" class="form-control" placeholder="Customer Code">
                            </div>               
                            </div>                               
                            
                            <div class="col">
                            <div class="form-group mb-2">
                            <label for = "title">Supplier Code<span class="text-danger">*<span></label>
                            <input type="text"  name="sup_id" class="form-control" placeholder="Supplier Code">
                            </div>                               
                            </div>           
                           
                                
                            <div class="col">
                            <div class="form-group mb-2">
                            <label for = "title">No of Packages<span class="text-danger">*<span></label>
                            <input type="text"  name="no_pkgs" class="form-control" placeholder="No of Packages">
                            </div>                               
                            </div>           

                            <div class="col">
                            <div class="form-group mb-2">
                            <label for = "title">Weight<span class="text-danger"><span>*</label>
                            <input type="text"  name="weight" class="form-control" placeholder="Total Weight">
                            </div>   

                            </div>           

                            <div class="col">
                            <div class="form-group mb-2">
                            <label for = "title">Mode of Transport<span class="text-danger"><span></label>
                            <input type="text"  name="mode_trans" class="form-control" placeholder="Mode of Transport">
                            </div>   
                            </div>   

                            <div class="form-group row">

                            <div class="col">
                            <div class="form-group mb-2">
                            <label for = "title">Delivery Person Name<span class="text-danger">*<span></label>
                            <input type="text"  name="deliv_name" class="form-control" placeholder="Delivery Person Name">
                            </div>   
                            </div>   

                            <div class="col">
                            <div class="form-group mb-2">
                            <label for = "title">Delivery Person ID<span class="text-danger"><span></label>
                            <input type="text"  name="  deliv_id" class="form-control" placeholder="Delivery Person ID">
                            </div>   
                            </div>   

                            <div class="col">
                            <div class="form-group mb-2">
                            <label for = "title">Additional Information<span class="text-danger"><span></label>
                            <input type="text"  name="addit_info" class="form-control" placeholder="Additional Information">
                            </div>   
                            </div>   

                            

                            
                           
                            <div class="form-group mb-2">
                                
                                <button type="submit" class="btn btn-warning">
                                        {{ __('Add') }}
                                    </button>
								                          
                  
                                </div> 
                                </div> 

                        </form>

                                      
                                                                                        
                                        

                    </div>
                </div>
            </div>
        </div>
        
<div>

    
           </div>


    

 <!-- https://www.youtube.com/watch?v=NxFutucwSwg -->
    


 <div>
 <table class="table table-hover">     
        <thead>
		<tr>
        <th scope="col">GRN  NO </th>
        <th scope="col">CUSTOMER </th>
        <th scope="col">SPPLIER</th>
        <th scope="col">DELIVERED BY</th>
        <th scope="col">PKGS</th>
        <th scope="col">WEIGHT</th>
        <th scope="col">ACTION</th>
        <th scope="col">ACTION</th>
        <th scope="col">FIELD</th>
        <th scope="col">ITEM NO </th>
        <th scope="col">MODE OF TRANSPORT </th>
        <th scope="col">DATE </th>
		
		
		</tr>
		</thead>
   @foreach ($v as $v1)                             
		<tr>
        <td>{{ $v1->grn_no}}</td>
        <td>{{ $v1->cust_id}}</td>
        <td>{{ $v1->sup_id}}</td>
        <td>{{ $v1->deliv_name}} </td>
        <td>{{ $v1->no_pkgs}} </td>
        <td>{{ $v1->weight}} </td>
                                     
                                        <td>
                                        <input type="text"  name="weight1" class="form-control" placeholder="Weight">
                                        </td>
                                        
  
                      
                                        <td>
                                        <form  action="{{ url('/updateweight',$v1->id) }}" method="POST">
                                        @csrf
                                       
                                       
                                        <!-- <td> <form action="{{url('/updateweight,$v->id')}}" method="POST">ddd</a> -->
                                        <!-- <td> <a href="{{ url('/updateweight',$v1->id) }}" class="btn btn-xs btn-info pull-right">Edhgit</a> -->
                                        <td>
                                        <a href="{{ url('/updateweight',$v1->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                        </td>

                                       
                                        
                                        <!-- <a href="{{ url('/updateweight,$v->id') }}" class="btn btn-xs btn-info pull-right">Edit</a> -->
                                        
                                        </form>
                                        </td>

                                        
        <td>{{ $v1->item_no}}</td>
        <td>{{ $v1->mode_trans}}</td>
        <td>{{ $v1->created_at}}</td>
       
            </td>   
		</tr>
 @endforeach 

 

           </table>
</div>
@endsection



    
<!-- https://www.fundaofwebit.com/laravel-8/how-to-edit-update-data-in-laravel -->