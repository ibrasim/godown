@extends('layouts.app')
@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <!-- <div class="card-header">{{ __('Register New Staff') }}</div> -->

                    <div class="card-body">
                        <form method="POST" action="savecustomer">
                            @csrf
                          
                            <div class="form-group row">

                            
                              
    </div>


                        </form>

                    </div>





                








                </div>
            </div>
                                   
        </div>
      
          
         
                
				
           <table class="table table-hover">     
           <thead>
				<tr>
                <th scope="col">Id</th>
			    <th scope="col">Id</th>
                <th scope="col">Id</th>
                <th scope="col">Id</th>
                <th scope="col">Id</th>
				
				</tr>
			</thead>
		@foreach ($Maintenancelog1 as $maintlog) 
                              
				<tr>
                <td>{{$maintlog->id}}</td>      
                <td>{{$maintlog->block}}</td>      
                <td>{{$maintlog->requested_by}}</td>      
                <td>{{$maintlog->request_date}}</td>      
                <td>{{$maintlog->request_detail}}</td>      
                   
                 
                   <td>
					
                    </tr>
	@endforeach 
           </table>     
    </div>


    
   
@endsection
