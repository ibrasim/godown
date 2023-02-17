@extends('layouts.app1')

@section('content')

<div class="container">
{{-- <div class="container" --}}
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('NEW ITEM ENTRY') }}</div>
<center> <h3>FOR TEST DATA ONLY</h3> </center> 
               
                    
                    <div class="card-body" style="background-color: #d3aec4">
                        
                          <form action="{{ route('save_warehouse_item') }}" method="post">
                            
                            @csrf
                          
                            

                              <div class="row">
                                <div class="col">
                            
                                
                                  <label for="inputcode">Item Code</label>
                                  <input type="text" class="form-control" id="itemcode" name="itemcode" class="form-control" required="">
                                                    

                                </div>

                                <div class="col">
                                
                              {{-- <label for="inputAddress">Category</label> --}}
                              {{-- <input type="text" class="form-control" id="inputAddress" > --}}

                              
                              
                                <label>Category</label>
                                <select id="category" name="category[]" multiple class="form-control" class="form-control" required="">
                                <option value="Battery">Battery</option>
                                <option value="Biscuits">Biscuits</option>
                                <option value="Chips">Chips</option>
                                <option value="Coffee">Coffee</option>
                                <option value="Cooking Oil">Cooking Oil</option>
                                <option value="Cosmetics">Cosmetics</option>
                                <option value="Daiy Producst">Daiy Producst</option>
                                <option value="Detergent">Detergent</option>
                                <option value="Pharmaceuticals">Pharmaceuticals</option>
                                <option value="Snacks">Snacks</option>
                                <option value="Spices">Spices</option>
                                <option value="Supari">Supari</option>
                                <option value="Sweets">Sweets</option>
                                <option value="Tape">Tape</option>
                                </select>
                              







                          </div>
                          

                            
                          <div class="col">
                                    <label for="inputdetail">Item Detail</label>
                                    <input type="text" class="form-control" id="inputdetail" name="inputdetail" class="form-control" required="">
                                  </div>
                            
                                  <div class="col">
                                
                              
                              
                              
                                <label for="inputAddress2">Re-order level</label>
                                <input type="text" class="form-control" id="reorderlevel" name="reorderlevel"  class="form-control" required="">
                              </div>
                             
                              <div class="col">
                              <button type="submit" class="btn btn-primary">Add</button>

                            </form>
                            
                          </div>

                              

                             

                              
                          
                     

                     
      
       




            
      
    </div>
</div>
<?php echo "<br>"; ?>


<table class="table table-hover">     
    <thead>
         <tr style="background-color: #f0b2da">

            <th scope="col">ID</th>
            <th scope="col">Item Code</th>
           <th scope="col">Item Name</th>
           <th scope="col">Category</th>
           <th scope="col">Reorder Level</th>
           <th scope="col">User</th>
           
     </thead>
 @foreach ($warehouseitem as $item1) 
                       
         <tr>
           
                 <td>{{$item1->id}}</td>      
            <td>{{$item1->item_code}}</td>      
            <td>{{$item1->item_name}}</td>      
            <td>{{$item1->item_category}}</td>      
            <td>{{$item1->min_quantity}}</td>      
            <td>{{$item1->user}}</td>      
            

     
                    

             </tr>
@endforeach 
    </table>      
</div>
@endsection

