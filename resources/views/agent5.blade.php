@extends('layouts.app1')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('UPDATE DATA (to restart delivery without delecting record, delete all in STATUS and ASSIGNDATETIME)') }}</div>

            
                    
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
                           
                            <div class="col">
                                <label for="exampleInputEmail1">Vessel</label>
                                <input type="text"  name="boat"  value="{{ $data['boat'] }}" class="form-control" >
                            </div>

                        </div>

                        <div class="col">
                          
                          
                        
                        </div>

                        <div class="row">
                            
                      
                            <div class="col">
                                <label for="exampleInputEmail1">Quantity</label>
                                <input type="text"  name="pkgs"  value="{{ $data['pkgs'] }}" class="form-control" >
                            </div>

                            <div class="col">
                                <label for="exampleInputEmail1">Shopname</label>
                                <input type="text"  name="newshopname"  value="{{ $data['completetime'] }}" class="form-control" >
                            </div>
                            <div class="col">
                                <label for="exampleInputEmail1">Vehicle</label>
                                <input type="text"  name="vehicleno"  value="{{ $data['vehicleno'] }}" class="form-control" >
                            </div>
                          

                        
                        </div>

                        
                        <div class="row">
                          
                               
                            <div class="row">

                            <div class="col">
                                <label for="exampleInputEmail1">Assigned Date time</label>
                                <input type="text"  name="assignedtime"  value="{{ $data['assignedtime'] }}" class="form-control" >
                            </div>

                            <div class="row">
                                <label for="exampleInputEmail1">Status</label>
                                <input type="text"  name="status"  value="{{ $data['status'] }}" class="form-control" >
                            </div>

                            <div class="col">
                                
                    
                                <button type="submit" value="update" class="btn btn-success" >Update </button>                   
                            
                            </div>

                        </div>
                        </div>
                            
    
<H3>
    {{ __('to restart delivery without delecting record, delete all in STATUS and ASSIGNDATETIME') }}                   
</H3>

<H3>
    {{ __('to make changes changes, UPDATE in respective field and click UPDATE button') }}                   
</H3>

<H3>
    {{ __('to go to main menu click DATABASE OR Delivery in menu under login (right)') }}                   
</H3>

<H3>
    {{ __('to go to main menu click DATABASE OR Delivery in menu under login (right)') }}                   
</H3>


                              
                              
                              
                            </div>
                       
                                
                        </form>    
                         
                                

            
                          
                        

                     
                     
      
                
            </div>


            
        </div>
    </div>
</div>

	
</div>
@endsection

