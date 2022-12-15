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
                                     <input type="text"  name="vendorname" class="form-control" placeholder="Shop / Company / Individual Name">
                                </div>
                                <div class="col">
                                     <input type="text" name="vendorregno" class="form-control" placeholder="Business Registration # If Individual ID #">
                                </div>
                                <div class="col">
                                    <input type="text" name="vendoraddress"class="form-control" placeholder="Address  ">
                                </div>
                                <div class="col">
                                    <input type="text" name="vendorroad"class="form-control" placeholder="Road Name ">
                                </div>
                              
                            </div>
                            
							<div class="form-group row">
                                <div class="col">
                                     <input type="text" name="vendodistrict" class="form-control" placeholder="Disrict">
                                </div>
                                <div class="col">
                                     <input type="text" name="vendorarea" class="form-control" placeholder="Area">
                                </div>
                                <div class="col">
                                    <input type="text" name="vendorcity"class="form-control" placeholder="City">
                                </div>
                                <div class="col">
                                    <input type="text" name="vendorctry"class="form-control" placeholder="Country">
                                </div>
                              
                            </div>
                            
							<div class="form-group row">
                                <div class="col">
                                     <input type="text" name="vendorzip" class="form-control" placeholder="Zip code">
                                </div>
                                <div class="col">
                                     <input type="text" name="vendorprimarybuis"class="form-control" placeholder="Primary Business">
                                </div>
                                <div class="col">
                                    <input type="text" name="vendorcontactpersonsir"class="form-control" placeholder="Contact Person / Surname">
                                </div>
                                <div class="col">
                                    <input type="text" name="vendorothername"class="form-control" placeholder="First Name">
                                </div>
                              
                            </div>
                            <div class="form-group row">
                                <div class="col">
                                     <input type="text" name="vendorsocialaccount"class="form-control" placeholder="Other Name">
                                </div>
                                <div class="col">
                                     <input type="text" name="vendormobile1"class="form-control" placeholder="Social Accounts">
                                </div>
                                <div class="col">
                                    <input type="text" name="vendormobile2"class="form-control" placeholder="Mobile 1">
                                </div>
                                <div class="col">
                                    <input type="text" name="vendoremail1"class="form-control" placeholder="Mobile 2">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col">
                                     <input type="text" name="vendoremail2"class="form-control" placeholder="Email 1">
                                </div>
                                <div class="col">
                                     <input type="text" name="vendorbank"class="form-control" placeholder="Email 2">
                                </div>
                                <div class="col">
                                    <input type="text" name="vendoraccountno1"class="form-control" placeholder="e-mail 2">
                                </div>
                                <div class="col">
                                    <input type="text" name="vendoraccountholdername1"class="form-control" placeholder="e-mail 2">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col">
                                     <input type="text" name="vendorbank2" class="form-control" placeholder="Bank 1">
                                </div>
                                <div class="col">
                                     <input type="text" name="vendoraccountno2" class="form-control" placeholder="Account Number">
                                </div>
                                <div class="col">
                                     <input type="text" name="vendoraccountholdername2" class="form-control" placeholder="Account Holder Name">
                                </div>
                                
                                <div class="col">
                                     <input type="text" name="vendorwebsite" class="form-control" placeholder="Bank 2">
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
		<th scope="col">ShopName </th>
		<th scope="col">Address</th>
		<th scope="col">Mobile</th>
        <th scope="col">Email</th>
		</tr>
		</thead>
   @foreach ($vendor as $item)                             
		<tr>
			<td>{{$item->vendorname}}</td>
			<td>{{$item->vendoraddress}}</td>
			<td>{{$item->vendoremail1}}</td> 
            <td>{{$item->vendoremail1}}</td> 
			<td>
            <form action="{{ route('delete_vendor',$item->id) }}" method="post">
			 @csrf
			 <button type="submit" value="delete" class="btn btn-danger" > DELETE </button> 
			</form>  
            </td>   
		</tr>
 @endforeach 
           </table>

    </div>
    
@endsection
