@extends('layouts.app')
@section('content')





<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
						<form method="POST" action="requestorderentry">
                       
                            @csrf              
                            
                            <div class="form-group row">

                            <div class="col">
                            <div class="form-group mb-2">
                            <label for = "title">ItemName<span class="text-danger">*<span></label>
                            <input type="text"  name="itemname" class="form-control" placeholder="ItemName">
                            </div>                               
                            </div>                               
                            
                            <div class="col">
                            <div class="form-group mb-2">
                            <label for = "title">Customer Name<span class="text-danger">*<span></label>
                            <input type="text"  name="hscode" class="form-control" placeholder="Customer Name">
                            </div>               
                            </div>                               
                            
                            <div class="col">
                            <div class="form-group mb-2">
                            <label for = "title">Phone No-<span class="text-danger"><span></label>
                            <input type="text"  name="brand" class="form-control" placeholder="Contact">
                            </div>                               
                            </div>           
                           
                                
                            <div class="col">
                            <div class="form-group mb-2">
                            <label for = "title">Unit<span class="text-danger"><span></label>
                            <input type="text"  name="unit" class="form-control" placeholder="Unit">
                            </div>                               
                            </div>           

                            <div class="form-group row">
                            <div class="col">
                            <div class="form-group mb-2">
                            <label for = "title">Destination<span class="text-danger"><span></label>
                            <input type="text"  name="packing" class="form-control" placeholder="Destination">
                            </div>   

                            </div>           

                            <div class="col">
                            <div class="form-group mb-2">
                            <label for = "title">category<span class="text-danger"><span></label>
                            <input type="text"  name="category" class="form-control" placeholder="category">
                            </div>   
                            </div>   

                            

                            <div class="col">
                            <div class="form-group mb-2">
                            <label for = "title">amount<span class="text-danger">*<span></label>
                            <input type="text"  name="reqby" class="form-control" placeholder="amount">
                            </div>   
                            </div>   

                            <div class="col">
                            <div class="form-group mb-2">
                            <label for = "title">requested date time by<span class="text-danger"><span></label>                            
                            <!-- <input type="text"  name= "req_by" value= "{{  Auth::user()->name }} "    class="form-control" > -->
                            <input type="text"  name= "req_by" value= "{{  Carbon\Carbon::now() . Auth::user()->name; }} "    class="form-control" >
                          
                        </div>   
                            </div>   


                            

                            
                           
                            <div class="form-group mb-2">
                                
                                <button type="submit" class="btn btn-warning">
                                        {{ __('Save') }}
                                    </button>
								                          
                  
                                </div> 





                                </div> 

                                
                                <div class="col">
                                   <!-- <button type="submit" class="btn btn-primary"> -->
                                  {{ __('Export') }}
                                
                                <a href="/all-tweets1-csv" class="btn btn-primary">Export as CSV</a>
                            <!-- </button>  -->
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
        <th scope="col">id </th>
        <th scope="col">item </th>
        <th scope="col">customer</th>
        <th scope="col">contact</th>
        <th scope="col">unit</th>
        <th scope="col">destination</th>
        <th scope="col">category</th>
        
        <th scope="col">purchased</th>
        <th scope="col">requested</th>
        <th scope="col">requested</th>
        <th scope="col">approved</th>
        <th scope="col">action</th>
        <th scope="col">action</th>
        <th scope="col">action</th>
		
		
		</tr>
		</thead>
   @foreach ($requestorder as $v1)                             
		<tr>
        <td>{{ $v1->id}}</td>
                                     
                                        <td>{{ $v1->item_name}}</td>
                                        <td>{{ $v1->hscode}}</td>
                                        <td>{{ $v1->brand}}</td>
                                        <td>{{ $v1->unit}}</td>
                                        <td>{{ $v1->packing}}</td>
                                        <td>{{ $v1->category}}</td>
                                        
                                        <td>{{ $v1->purchased}}</td>
                                        <td>{{ $v1->reqested_qty}}</td>
                                        <td>{{ $v1->req_date_time_by}}</td>
                                        <td>{{ $v1->approve_date_time_by}}</td>
  
                      
                                        <td>
                                        <!-- <form  action="" method="POST"> -->
                                        <form action="{{ route('update_requestorder',$v1->id) }}" method="post">
                                        @csrf                                    

                      
                                        
                                        <!-- <td> <form action="{{url('/updateweight,$v->id')}}" method="POST">ddd</a> -->
                                        <!-- <td> <a href="{{ url('/updateweight',$v1->id) }}" class="btn btn-xs btn-info pull-right">Edhgit</a> -->
                                        <!-- <a href="" class="btn btn-primary btn-sm">Approve</a> -->
                                        <button type="submit" value="delete" class="btn btn-warning" > RELEASE </button>
                                        <!-- <a href="{{ url('/updateweight,$v->id') }}" class="btn btn-xs btn-info pull-right">Edit</a> -->
                                        </form></td>                                 

                                        
                                   
                                        
                                    </td>                                 

                                    <td>
                                    
                                    <!-- COMMENTED FOR NOW -->
                                        <!-- <form action="{{ route('delete_requestorder',$v1->id) }}" method="post">
                                        @csrf                                    
                                        <!-- <td> <form action="{{url('/updateweight,$v->id')}}" method="POST">ddd</a> -->
                                        <!-- <td> <a href="{{ url('/updateweight',$v1->id) }}" class="btn btn-xs btn-info pull-right">Edhgit</a> -->
                                        
                                        <!-- <button type="submit" value="delete" class="btn btn-danger" > DELETE </button> -->
                                        
                                        <!-- <a href="{{ url('/updateweight,$v->id') }}" class="btn btn-xs btn-info pull-right">Edit</a> -->
                                        <!-- </form></td>                                  --> 

                                        <!-- COMMENTED FOR NOW -->
                                   
                                        
                                    </td>           


                                    <td>
                                    
                                    <!-- COMMENT FOR NOW -->
                                    <!-- <form action="{{ route('delete_requestorder',$v1->id) }}" method="post"> -->
                                    <!-- @csrf                                     -->
                                    <!-- <td> <form action="{{url('/updateweight,$v->id')}}" method="POST">ddd</a> -->
                                    <!-- <td> <a href="{{ url('/updateweight',$v1->id) }}" class="btn btn-xs btn-info pull-right">Edhgit</a> -->
                                    
                                    <!-- <button type="submit" value="delete" class="btn btn-success" > PURCHASE </button> -->
                                    <!-- <a href="{{ url('/showapproveddata',$v1->id) }}" class="btn btn-primary btn-sm">PURCHASE</a> -->
                                    
                                    <!-- <a href="{{ url('/updateweight,$v->id') }}" class="btn btn-xs btn-info pull-right">Edit</a> -->
                                    <!-- </form></td>                                  -->

                                    <!-- COMMENT FOR NOW -->
                               
                                    
                                </td>      

                                        
                                      
		</tr>
 @endforeach 

 

           </table>
</div>
@endsection



    
<!-- https://www.fundaofwebit.com/laravel-8/how-to-edit-update-data-in-laravel -->