@extends('layouts.app1')

@section('content')

<div class="container">
{{-- <div class="container" --}}
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('STOCK ENTRY') }}</div>
<center> <h3>FOR TEST STOCK IN DATA ONLY</h3> </center> 
                    <div class="card-body" style="background-color: #c06e6e">
                        <div class="row">
                          <div class="col">
                        <label for="inputcode">Item Code</label>
                        <input type="text" class="form-control" id="itemcode" name="itemcode" class="form-control" required="">                    
                        <form action="{{ route('warehouse_item_check') }}" method="post">
                          @csrf
                        <button type="submit" class="btn btn-warning">Check</button>
                        </form>
                      </div>
                    

                      <div class="col">
                        <label for="inputcode">Item Name</label>
                        <input type="text" class="form-control" id="itemname" name="itemname">
                      </div>
                      <div class="col">
                        <label for="inputcode">Category</label>
                        <input type="text" class="form-control" id="itemname" name="itemcategory">
                      </div>

                      <div class="col">
                        <label for="inputcode">Current Stock Balance</label>
                         {{-- <input type="text" class="form-control" id="itemname" name="itemcategory">  --}}                         
                         <input type="text" class="form-control" id="itemname" name="itemcategory"  > 
                      </div>
                        
                      
                        

                      
                      </div>

                      <?php echo "<br>"; ?>



                          {{-- <form action="" method="post"> --}}
                            
                            {{-- @csrf --}}
                          
                            

                              <div class="row">
                                <div class="col">
                            
                                
                                  <label for="inputcode">Quantity</label>
                                  <input type="text" class="form-control" id="itemcode" name="itemcode" class="form-control" required="">
                                  {{-- <input type="text"  name="id"  value="{{ $data['qty'] }}" class="form-control" >       --}}

                                </div>

                                <div class="col">
                                
                              {{-- <label for="inputAddress">Category</label> --}}
                              {{-- <input type="text" class="form-control" id="inputAddress" > --}}

                              
                              
                                <label>Warehouse</label>
                                <select id="category" name="category[]" multiple class="form-control" class="form-control" required="">
                                <option value="Battery">Kakaage Aage</option>
                                <option value="Biscuits">Bageechaage</option>
                                <option value="Chips">Warehoue 1</option>
                                <option value="Sweets">Warehoue 2</option>
                                <option value="Tape">Warehoue 3</option>
                                </select>
                              







                          </div>
                          

                            
                          <div class="col">
                                    <label for="inputdetail">Remarks</label>
                                    <input type="text" class="form-control" id="inputdetail" name="inputdetail" class="form-control" required="">
                                  </div>
                            
                              
                              <div class="col">
                              <button type="submit" class="btn btn-primary">Save</button>

                            {{-- </form> --}}
                            
                          </div>

                              

                             

                              
                          
                     

                     
      
       




            
      
    </div>
</div>
<?php echo "<br>"; ?>


<table class="table table-hover">     
    <thead>
         <tr style="background-color: #f0b2da">

            <th scope="col">item code</th>
            <th scope="col">item name</th>
            <th scope="col">Quantity on Hand</th>
            
           
     </thead>
 @foreach ($data1 as $d) 
                       
         <tr>
           
                 <td>{{$d->item_code}}</td>      
                 <td>{{$d->item_name}}</td>      
                 <td>{{$d->totalstock}}</td>      
            

     
                    

             </tr>
@endforeach 
    </table>       
</div>
@endsection

