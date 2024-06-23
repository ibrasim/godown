@extends('layouts.app')
@section('content')





<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
						<form method="post" action= "{{ route('updateweight',$GoodsreceivenoteItem->id) }}" >
                        

                        

                        
                            @csrf              
                            
                            <div class="form-group row">

                            <div class="col">
                            <div class="form-group mb-2">
                            <label for = "title">ID<span class="text-danger">*<span></label>
                            <input type="text"  name="grn_no" value="{{$GoodsreceivenoteItem->id}}"class="form-control" placeholder="GRN Number">
                            </div>                               
                            </div>           
                            
                            <div class="col">
                            <div class="form-group mb-2">
                            <label for = "title">GRN Number<span class="text-danger">*<span></label>
                            <input type="text"  name="grn_no" value="{{$GoodsreceivenoteItem->grn_no}}"class="form-control" placeholder="GRN Number">
                            </div>                               
                            </div>   
                            
                            <div class="col">
                            <div class="form-group mb-2">
                            <label for = "title">PKGS<span class="text-danger">*<span></label>
                            <input type="text"  name="grn_no" value="{{$GoodsreceivenoteItem->no_pkgs}}"class="form-control" placeholder="GRN Number">
                            </div>                               
                            </div>   
                            

                            <div class="col">
                            <div class="form-group mb-2">
                            <label for = "title">WEIGHT<span class="text-danger">*<span></label>
                            <input type="text"  name="weight1" value="{{$GoodsreceivenoteItem->weight}}"class="form-control" placeholder="WEIGHT">
                            </div>                               
                            </div>                               
                            
                          
                            <div class="col">
                            <div class="form-group mb-2">
                            <label for = "title">MODE<span class="text-danger">*<span></label>
                            <input type="text"  name="grn_no" value="{{$GoodsreceivenoteItem->pkgs}}"class="form-control" placeholder="GRN Number">
                            </div>                               
                            </div> 

                            
                            <div class="form-group mb-2">
                           
                           </div> 
                           </div> 
                          
                        </form>

                        <form  action = "{{ route('updateweightchange',$GoodsreceivenoteItem->id) }}"  method="post">
                        
                        @csrf

                        
                        <input type="text"  name="weight1" value="{{$GoodsreceivenoteItem->weight}}"class="form-control" placeholder="WEIGHT">

                           <button type="submit" class="btn btn-warning">
                                   {{ __('UPDATE') }}
                               </button>
                                                     
                               </form>

                           
                                                                                        
                                        

                    </div>
                </div>
            </div>
        </div>
        
<div>

    
           </div>


    

 <!-- https://www.youtube.com/watch?v=NxFutucwSwg -->
    


 <div>
 
</div>
@endsection



    
<!-- https://www.fundaofwebit.com/laravel-8/how-to-edit-update-data-in-laravel -->