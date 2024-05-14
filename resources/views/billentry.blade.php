@extends('layouts.app')
@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
						<form method="POST" action="savevendor">
                            @csrf                 
                            <div class="form-group row">
                                
                                <div class="col">
                                     <input type="text"  name="vendorname" class="form-control" placeholder="Qty">
                                </div>
                                <div class="col">
                                     <input type="text" name="vendorregno" class="form-control" placeholder="Packing">
                                </div>
                                <div class="col">
                                    <input type="text" name="vendoraddress"class="form-control" placeholder="Unit">
                                </div>
                                <div class="col">
                                    <input type="text"  maxlength="25" name="vendorroad"class="form-control" placeholder="Bill Description ">
                                </div>
                                <div class="col">
                                    <input type="text" name="vendorroad"class="form-control" placeholder="Rate">
                                </div>
                              
                                <div class="col">
                                    <input type="text" name="vendorroad"class="form-control" placeholder="Total">
                                </div>
                              

                            </div>
                            
							<div class="form-group row">
                                <div class="col">
                                     <input type="text" name="vendodistrict" class="form-control" placeholder="Supplier ID">
                                </div>
                                <div class="col">
                                     <input type="text" name="vendorarea" class="form-control" placeholder="Customer Id">
                                </div>
                                <div class="col">
                                    <input type="text" name="vendorcity"class="form-control" placeholder="GRN no">
                                </div>
                                <div class="col">
                                    <input type="text" name="vendorctry"class="form-control" placeholder="Box No">
                                </div>
                                <div class="col">
                                    <input type="text" name="vendorctry"class="form-control" placeholder="Remarks">
                                </div>
                                <div class="col">
                                    <input type="text" name="vendorctry"class="form-control" placeholder="Remarks">
                                </div>
                              
                              
                            </div>
                      
                      
                      
                             </div> 
                                <div class="col">
                                <button type="submit" class="btn btn-warning">
                                        {{ __('Add') }}
                                    </button>
								</div>                               
                  
                        </form>
                    </div>
                </div>
            </div>
        </div>
        


        <table class="table table-hover">     
        <thead>
		<tr>
        <th scope="col">CUSTOMER </th>
        <th scope="col">SUPPLIER </th>
        <th scope="col">Box No </th>
        <th scope="col">GRN No</th>
        <th scope="col">ITEM No </th>
        <th scope="col">ITEM Qty </th>
		<th scope="col">ITEM Name </th>
        <th scope="col">ITEM Packing </th>
        <th scope="col">ITEM Rate </th>
        <th scope="col">ITEM Total </th>
		
		</tr>
		</thead>
   @foreach ($billentry as $item)                             
		<tr>
        <td>{{$item->custid}}</td>
        <td>{{$item->suppid}}</td>
        <td>{{$item->itmeno}}</td>
        <td>{{$item->itmeno}}</td>
        <td>{{$item->itmeno}}</td>
        <td>{{$item->qty}}</td>
			<td>{{$item->item_name}}</td>
            <td>{{$item->packing}}</td>
            <td>{{$item->rate}}</td>
            <td>{{$item->total}}</td>
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
