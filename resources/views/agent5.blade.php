@extends('layouts.app1')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('UPDATE') }}</div>

            
                    
                    <div class="card-body">
                        <input type="hidden" name="id" value="{{$data ['id'] }}">

                   

                   

                          <div class="form-group row">
                            <form action="{{ route('editdata',$data->id) }}" method="post">
                                @csrf
    
                      <div class="row">
                            <div class="col">
                                    <label for="exampleInputEmail1">ID</label>
                                    <input type="text"  name="id"  value="{{ $data['id'] }}" class="form-control" >      
                            </div>
                       
                            <div class="col">
                                <label for="exampleInputEmail1">customer</label>
                                <input type="text"  name="customer"  value="{{ $data['customer'] }}" class="form-control" >
                            </div>

                        </div>

                        <div class="row">
                            <div class="col">
                                <label for="exampleInputEmail1">Assigned Date time</label>
                                <input type="text"  name="assignedtime"  value="{{ $data['assignedtime'] }}" class="form-control" >
                            </div>
                            <div class="col">
                                <label for="exampleInputEmail1">Vessel</label>
                                <input type="text"  name="boat"  value="{{ $data['boat'] }}" class="form-control" >
                            </div>
                        
                        </div>

                        <div class="row">
                            
                        <div class="col">
                                <label for="exampleInputEmail1">Status</label>
                                <input type="text"  name="status"  value="{{ $data['status'] }}" class="form-control" >
                            </div>

                            <div class="col">
                                
                    
                                <button type="submit" value="update" class="btn btn-success" >Update </button>                   
                            
                            </div>

                        
                        </div>

                        
                            
                               

                            
                            
                              
                              
                              
                            </div>
                       
                                
                        </form>    
                         
                                

            
                          
                        

                     
                     
      
                
            </div>


            
        </div>
    </div>
</div>

	
</div>
@endsection

