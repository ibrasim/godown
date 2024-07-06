@extends('layouts.app')
@section('content')





<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        
						<form method="post" action= "" >
                        


                        
                            @csrf              
                            
                            <div class="form-group row">

                            <div class="col">
                            <div class="form-group mb-2">
                            <label for = "title">ID<span class="text-danger">*<span></label>
                            <input type="text"  name="grn_no" value="{{$p->id}}"class="form-control" placeholder="GRN Number">
                            </div>                               
                            </div>           
                            
                          
                            
                            <div class="col">
                            <div class="form-group mb-2">
                            <label for = "title">ITEM<span class="text-danger">*<span></label>
                            <input type="text"  name="grn_no" value="{{$p->item_name}}"class="form-control" placeholder="GRN Number">
                            </div>                               
                            </div>   
                            

                            <div class="col">
                            <div class="form-group mb-2">
                            <label for = "title">HSCODE<span class="text-danger">*<span></label>
                            <input type="text"  name="weight1" value="{{$p->hscode}}"class="form-control" placeholder="WEIGHT">
                            </div>                               
                            </div>                               
                            
                          
                            <div class="col">
                            <div class="form-group mb-2">
                            <label for = "title">CATEGORY<span class="text-danger">*<span></label>
                            <input type="text"  name="grn_no" value="{{$p->category}}"class="form-control" placeholder="GRN Number">
                            </div>                               
                            </div> 

                            
                            <div class="form-group mb-2">
                           
                           </div> 
                           </div> 
                          
                        </form>

                        <form  action = "{{ route('updaterequestorder',$p->id) }}"  method="post"> 
                        
                            
                            
                        @csrf

                        <label for = "title">UNIT PRICE<span class="text-danger">*<span></label> 
                        <input type="text"  name="unitprice" class="form-control" placeholder="UNIT PRICE">
                        <label for = "title">TOTAL PRICE<span class="text-danger">*<span></label>
                        <input type="text"  name="totalprice" class="form-control" placeholder="TOTAL PRICE">
                        <label for = "title">PURCHASED QUANTITY<span class="text-danger">*<span></label>
                        <input type="text"  name="purqty" class="form-control" placeholder="PURCHASED QUANTITY">
                        <label for = "title">SUPPLIER<span class="text-danger">*<span></label>
                        <input type="text"  name="supplier" class="form-control" placeholder="SUPPLIER">

                           <button type="submit" class="btn btn-warning">
                                   {{ __('UPDATE') }}
                               </button>
                                                     
                               <!-- </form> -->

                           
                                                                                        
                                        

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