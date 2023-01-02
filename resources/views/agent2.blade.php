@extends('layouts.app1')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ 'PAGE FOR FAZY AND RAZY' }}</div>


                <div class="card-body">
                  
 
                          <div class="form-group row">

                              <form action="" method="post">            
                              
                              </div>
                                                    @csrf                
                                                    <button type="submit" value="update" class="btn btn-warning" > SOLD </button>
                                   
                              </form>  
      
                
            </div>
                       
        </div>
    </div>
</div>


<hr>
<br>
<br>
<br>
	<hr>
      
     
 
   

    <hr>
<table class="table table-hover">     
    <thead>
         <tr>
            <th scope="col">Id</th> 
            <th scope="col">Name</th>   
            <th scope="col">Delivered Date</th>  
            <th scope="col">Cost Price</th>             
            <th scope="col">Seling Price</th> 
            <th scope="col">Action</th> 

            <th scope="col">Sold Date</th> 
            <th scope="col">Image</th> 
            <th scope="col">New SP</th> 
                          
         </tr>
     </thead>
 @foreach ($item as $item1)                   
         <tr>  
                 <td>{{$item1->id}}</td>   
                 <td>{{$item1->itemname}}</td>   
                 <td>{{$item1->hscode}}</td>   
                 <td>{{$item1->hsdescription}}</td>   
                 <td><input type="text"  name="sp"  value="{{ $item1['f1'] }}" class="form-control" >
                 
                 <td> <form action="{{ route('editsellingprice',$item1->id) }}" method="post">            
                  <input type="hidden" name="id" value="{{$item1 ['id'] }}">
            
            </div>
                                  @csrf                
                                  <button type="submit" value="update" class="btn btn-warning" > SOLD </button>
                 <td>{{$item1->f1}}</td>   
            </form>  
            <td><img src={{asset('image') . '/' .$item1->image}} height="300" width="500"></td>  
            <td>{{$item1->f1}}</td>   
      </tr>
@endforeach 
    </table>     






</div>
@endsection


