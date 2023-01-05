@extends('layouts.app1')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ 'PAGE FOR 001' }}</div>


                <div class="card-body">
                  
 
                          <div class="form-group row">

                
      
                
            </div>
                       
        </div>
    </div>
</div>

<table class="table table-hover">     
    <thead>
         <tr style=font-size:15px>
            <th scope="col"></th>             
            <th scope="col">Action</th> 
            <th scope="col">Id</th> 
            <th scope="col">Name</th>   
            <th scope="col">Delivered Date</th>  
            <th scope="col">Cost Price</th>             
            <th scope="col"></th>             
            <th scope="col"></th>             
            <th scope="col">Action</th> 

            
            <th scope="col">Image</th> 
            <th scope="col">New SP</th> 
            <th scope="col">Sold Date</th> 
                          
         </tr>
     </thead>
 @foreach ($item as $item1)                   
         <tr style=font-size:15px>  
            


                 <td> <form action="{{ route('deleteimage',$item1->id) }}" method="post">            
                    
                    
   
                    <td><input type="hidden" name="id" value="{{$item1 ['id'] }}">
                   
              
                                     @csrf                
                                     <button type="submit" value="update" class="btn btn-warning" > DELETE </button>
                    
               </form>   </td>

               <td>{{$item1->id}}</td>   

                 <td>{{$item1->itemname}}</td>   
                 <td>{{$item1->hscode}}</td>   
                 <td>{{$item1->hsdescription}}</td>   
                 <td> <form action="{{ route('editsellingprice',$item1->id) }}" method="post">            
                 <td><input type="text"  name="sp"  value="" class="form-control" ></td>  
                 

                 <td><input type="hidden" name="id" value="{{$item1 ['id'] }}">
                
           
                                  @csrf                
                                  <button type="submit" value="update" class="btn btn-warning" > SOLD </button>
                 
            </form>   </td>
            <td><img src={{asset('image') . '/' .$item1->image}} height="65" width="75"></td>  
            <td>{{$item1->f1}}</td>   
            <td>{{$item1->f2}}</td>   
      </tr>
@endforeach 
    </table>     






</div>
@endsection


