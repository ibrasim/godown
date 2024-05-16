@extends('layouts.app')
@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
						<form method="POST" action="savedata">
                            @csrf                 
                            <div class="form-group row">

                                <div class="col">
                                <input type="text"  name="billno" class="form-control" placeholder="bill no">
                                </div> 
                                <div class="col">
                                <input type="text"  name="billdate" class="form-control" placeholder="bill Date">
                                </div> 
                                <div class="col">
                                <input type="text"   name="supp_id" class="form-control" placeholder="supp_id">                           
                                </div> 
                                <div class="col">
                                <input type="text"  name="cust_id" class="form-control" placeholder="cust_id">
                                </div> 
                                <div class="col">
                                <input type="text"  name="itemno" class="form-control" placeholder="itemno">
                                </div> 
                                <div class="col">
                                <input type="text"  name="unit"class="form-control" placeholder="Unit">
                                </div> 
                                <div class="col">
                                <input type="text"  name="qty" class="form-control" placeholder="Qty">
                                </div> 
                            </div> 
                           
                            <div class="form-group row">
                                <div class="col">
                                <input type="text"  name="packing" class="form-control" placeholder="Packing">                             
                                </div> 
                                <div class="col">
                                <input type="text"  name="bill_item_name" class="form-control" placeholder="Bill item name">
                                </div> 
                                <div class="col">
                                <input type="text" name="item_name" class="form-control" placeholder="item name">
                                </div> 
                                <div class="col">
                                <input type="text"  name="bill_rate" class="form-control" placeholder="Bill Rate">
                                </div> 
                                <div class="col">
                                <input type="text"  name="act_rate" class="form-control" placeholder="Act Rate">
                                </div> 
                                <div class="col">
                                <input type="text"  name="bill_total" class="form-control" placeholder="Bill Total">                          
                                </div> 
                                <div class="col">
                                <input type="text"  name="brand" class="form-control" placeholder="Brand">
                                </div> 
                            </div> 
                            
                            
                            <div class="form-group row">
                                <div class="col">
                            <input type="text"  name="model" class="form-control" placeholder="Model">
                            </div> 
                            <div class="col">
                            <input type="text"  name="size" class="form-control" placeholder="Size">
                            </div> 
                            <div class="col">
                            <input type="text"  name="grn" class="form-control" placeholder="Grno">
                            </div> 
                            <div class="col">
                            <input type="text"  name="boxno" class="form-control" placeholder="Box no">
                            </div> 
                            <div class="col">
                            <input type="text"  name="hscode" class="form-control" placeholder="hscode">
                            </div> 
                            <div class="col">
                            <input type="text"  name="hsdesc" class="form-control" placeholder="hsdesc">
                            </div> 
                            <div class="col">
                            <input type="text"  name="remarks" class="form-control" placeholder="Remarks">
                            </div> 
                           
                            <div class="form-group row">
                                <div class="col">
                                <button type="submit" class="btn btn-warning">
                                        {{ __('Add') }}
                                    </button>
								</div>                               
                  
                                </div> 
                                </div> 

                        </form>
                    </div>
                </div>
            </div>
        </div>
        


        <table class="table table-hover">     
        <thead>
		<tr>
        <th scope="col">ID </th>
        <th scope="col">SUPPLIER </th>
        <th scope="col">CUSTOMER </th>
        <th scope="col">BILL DATE </th>
        <th scope="col">CUSTOMER </th>
        <th scope="col">UNIT </th>
        <th scope="col">PACKING </th>
        
		
		
		</tr>
		</thead>
   @foreach ($billentry as $item)                             
		<tr>
        <td>{{$item->id}}</td>
        <td>{{$item->suppid}}</td>
        <td>{{$item->custid}}</td>
        <td>{{$item->bill_date}}</td>
        <td>{{$item->unit}}</td>
        <td>{{$item->packing}}</td>     
        <td>{{$item->bill_desc}}</td>
        	<td>
            <!-- <form action="{{ route('delete_vendor',$item->id) }}" method="post">
			 @csrf
			 <button type="submit" value="delete" class="btn btn-danger" > DELETE </button> 
			</form>   -->
            </td>   
		</tr>
 @endforeach 
           </table>

    </div>
    
@endsection
