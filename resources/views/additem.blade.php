@extends('layouts.app1')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ 'dd1' }}</div>


                <div class="card-body">
                        <input type="hidden" name="id" value="">

 
                          <div class="form-group row">
                            <form action="saveitem" method="POST" enctype="multipart/form-data">
                                @csrf
   
                                <div class="row">  
                                <div class="col">
                                        <label for="exampleInputEmail1">Item Code</label>
                                        <input type="text"  name="itemcode" class="form-control" required="" >
                                  </div>
        
                                   <div class="col">
                                        <label for="exampleInputEmail1">Name</label>
                                        <input type="text"  name="itemname" class="form-control" required="" >
                                  </div>

                                  <div class="col">
                                        <label for="exampleInputEmail1">hscode</label>
                                        <input type="text"  name="hscode" class="form-control" >
                                  </div>

                                  
                                  <div class="col">
                                        <label for="exampleInputEmail1">HS Description</label>
                                        <input type="text"  name="hsdescription" class="form-control" >
                                  </div>

                                  
                                  <div class="col">
                                        <label for="exampleInputEmail1">Local description1</label>
                                        <input type="text"  name="ldescription1" class="form-control" >
                                  </div>
<div>
<div class="row">  

                                  <div class="col">
                                        <label for="exampleInputEmail1">Local description2</label>
                                        <input type="text"  name="ldescription2" class="form-control" >
                                  </div>


                                  <div class="col">
                                        <label for="exampleInputEmail1">Brand</label>
                                        <input type="text"  name="brand" class="form-control" >
                                  </div>

                                  
                                  <div class="col">
                                        <label for="exampleInputEmail1">Packing</label>
                                        <input type="text"  name="packing" class="form-control" >
                                  </div>

                                  
                                  <div class="col">
                                        <label for="exampleInputEmail1">Unit</label>
                                        <input type="text"  name="unit" class="form-control" >
                                  </div>

                                  
                                  <div class="col">
                                        <label for="exampleInputEmail1">Unit no</label>
                                        <input type="text"  name="unitnos" class="form-control" >
                                  </div>
<div>
<div class="row">  
            

                                  <div class="col">
                                        <label for="exampleInputEmail1">Origin</label>
                                        <input type="text"  name="origin" class="form-control" >
                                  </div>

                                  <div class="col">
                                        <label for="exampleInputEmail1">Expiry Date</label>
                                        <input type="text"  name="expdate" class="form-control" >
                                  </div>
                                  
                                  

                                  <div class="col">
                                        <label for="exampleInputEmail1">Image</label>
                                       
                                        <input name="image" type="file" id="image" size="50" /></td>
                                  </div>



                                  <div class="col">
                                <button type="submit" class="btn btn-success">
                                Add Item
                                    </button>
							</div>

<div>
                               </div>

                        

                     
                     
      
                
            </div>
            </div>           
        </div>
    </div>
</div>


<hr>
<br>
<br>
<br>
	<hr>
<table class="table table-hover">     
    <thead>
         <tr>
            <th scope="col">Id</th> 
            <th scope="col">Name</th>   
            <th scope="col">Delivered Date</th>  
            <th scope="col">Sost Price</th> 
            <th scope="col">Action</th> 
            <th scope="col">Sold Date</th> 
            <th scope="col">Sold Price</th> 
           
            <th scope="col">Image</th> 
                          
         </tr>
     </thead>
 @foreach ($item as $item1)                   
         <tr>  
                 <td>{{$item1->id}}</td>   
                 <td>{{$item1->itemname}}</td>   
                 <td>{{$item1->hscode}}</td>   
                 <td>{{$item1->hsdescription}}</td>   
                 <td> <form action="" method="post"> 
                                  
                                  @csrf
                
                                  <button type="submit" value="update" class="btn btn-warning" > SOLD </button>
                                </form>  



                 </td>   
                 <td>{{$item1->ldescript1}}</td>   

                 <td>{{$item1->ldescript2}}</td>   

                
            <td><img src={{asset('image') . '/' .$item1->image}} height="50" width="80"></td>  
            
      </tr>
@endforeach 
    </table>     






</div>
@endsection

