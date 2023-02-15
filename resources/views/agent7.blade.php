@extends('layouts.app1')

@section('content')

<div class="container">
{{-- <div class="container" --}}
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('NEW ITEM NETRY') }}</div>

               
                    
                    <div class="card-body" style="background-color: #d3aec4">
                        <form method="get" action="/home">
                            @csrf
                          
                            

                              <div class="row">
                                <div class="col">
                            
                                
                                  <label for="inputcode">Item Code</label>
                                  <input type="text" class="form-control" id="inputcode">
                                                    

                                </div>

                                <div class="col">
                                
                              {{-- <label for="inputAddress">Category</label> --}}
                              {{-- <input type="text" class="form-control" id="inputAddress" > --}}

                              
                              
                                <label>Category</label>
                                <select id="category" name="name[]" multiple class="form-control" >
                                <option value="Codeigniter">Battery</option>
                                <option value="CakePHP">Biscuits</option>
                                <option value="Laravel">Chips</option>
                                <option value="YII">Coffee</option>
                                <option value="Zend">Cooking Oil</option>
                                <option value="Symfony">Cosmetics</option>
                                <option value="Phalcon">Daiy Producst</option>
                                <option value="Slim">Detergent</option>
                                <option value="Slim">Pharmaceuticals</option>
                                <option value="Slim">Snacks</option>
                                <option value="Slim">Spices</option>
                                <option value="Slim">Supari</option>
                                <option value="Slim">Sweets</option>
                                <option value="Slim">Tape</option>
                                </select>
                              







                          </div>
                          

                            
                          <div class="col">
                                    <label for="inputdetail">Item Detail</label>
                                    <input type="text" class="form-control" id="inputdetail">
                                  </div>
                            
                                  <div class="col">
                                
                              
                              
                              
                                <label for="inputAddress2">Re-order level</label>
                                <input type="text" class="form-control" id="inputAddress2" >
                              </div>
                             
                              <div class="col">
                              <button type="submit" class="btn btn-primary">Add</button>

                            </form>
                            
                          </div>

                              

                             

                              
                          
                     

                     
      
       




            
      
    </div>
</div>
<?php echo "<br>"; ?>

{{-- 	
<table class="table table-hover">     
    <thead>
         <tr style="background-color: #68eec3">
            <th scope="col">Delete</th>
            <th scope="col">ID</th>
            <th scope="col">Shop</th>
           <th scope="col">Customer</th>
           <th scope="col">Update</th>
           <th scope="col">Packages</th>
           <th scope="col">Vessel</th>
           
           <th scope="col">Vehicle Number</th>
           <th scope="col">Finish</th>
           
           <th scope="col">Assigned /Start / Finish  Time</th>
          
            
            <th scope="col">Start</th>  
          
         </tr>
     </thead>
 @foreach ($delivery as $item1) 
                       
         <tr>
            <td>
                <form action="{{ route('delete_delivery',$item1->id) }}" method="post"> 
                                 
                 @csrf

                 <button type="submit" value="delete" class="btn btn-secondary" > DELETE </button>
               </form>    
                 
                    
                 </td>
                 <td>{{$item1->id}}</td>      
            <td>{{$item1->completetime}}</td>      
            <td>{{$item1->customer}}</td>      
            <td><a href={{ "show_delivery/".$item1['id'] }}>Edit</td>



            <td>{{$item1->pkgs}}</td>
            <td>{{$item1->boat}}</td> 
          
            <td>{{$item1->vehicleno}}</td>
            <td>
                <form action="{{ route('complete_delivery',$item1->id) }}" method="post"> 
                                 
                 @csrf

                 <button type="submit" value="delete" class="btn btn-warning" > Finish </button>
               </form>    
                 
                    

            </td>
            
            <td>{{$item1->assignedtime}}</td>
           
           
            
          
                    <td>
                 <form action="{{ route('update_delivery',$item1->id) }}" method="post"> 
                                  
                  @csrf

                  <button type="submit" value="delete" class="btn btn-success" > Start </button>
                </form>    
                  
                     
                  </td>
                 
                  
             </tr>
@endforeach 
    </table>      --}}
</div>
@endsection

