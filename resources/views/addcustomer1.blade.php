@extends('layouts.admin')

@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <!-- <div class="card-header">{{ __('Register New Staff') }}</div> -->

                    <div class="card-body">
                        <form method="POST" action="savecustomer">
                            @csrf
                          
                            <div class="form-group row">
                                <div class="col">
                                     <input type="text"  name="ShippingMark" class="form-control" placeholder="Shipping Mark">
                                </div>
                                <div class="col">
                                     <input type="text" name="NickNameSirName" class="form-control" placeholder="Nick Name/Sir Name">
                                </div>
                                <div class="col">
                                    <input type="text" name="FirstName"class="form-control" placeholder="First Name ">
                                </div>
                              
                            </div>
                            <div class="form-group row">
                                <div class="col">
                                     <input type="text" name="LastName" class="form-control" placeholder="Last Name ">
                                </div>
                                <div class="col">
                                     <input type="text" name="CompanyName" class="form-control" placeholder="Company Name">
                                </div>
                                <div class="col">
                                    <input type="text" name="BusinessRegistration"class="form-control" placeholder="Business Registration #">
                                </div>
                              
                            </div>
                            <div class="form-group row">
                                <div class="col">
                                     <input type="text" name="Address" class="form-control" placeholder="Address">
                                </div>
                                <div class="col">
                                     <input type="text" name="RoadName"class="form-control" placeholder="Road Name">
                                </div>
                                <div class="col">
                                    <input type="text" name="City"class="form-control" placeholder="City">
                                </div>
                              
                            </div>
                            <div class="form-group row">
                                <div class="col">
                                     <input type="text" name="Country"class="form-control" placeholder="Country">
                                </div>
                                <div class="col">
                                     <input type="text" name="ZipCode"class="form-control" placeholder="Zip Code">
                                </div>
                                <div class="col">
                                    <input type="text" name="Telephone"class="form-control" placeholder="Telephone">
                                </div>
                              
                            </div>
                            <div class="form-group row">
                                <div class="col">
                                     <input type="text" name="Mobile"class="form-control" placeholder="Mobile">
                                </div>
                                <div class="col">
                                     <input type="text" name="e-mail1"class="form-control" placeholder="e-mail 1">
                                </div>
                                <div class="col">
                                    <input type="text" name="e-mail2"class="form-control" placeholder="e-mail 2">
                                </div>
                              
                            </div>
                            <div class="form-group row">
                                <div class="col">
                                     <input type="text" name="socialaccounts" class="form-control" placeholder="social accounts">
                                </div>
                                
                                <button type="submit" class="btn btn-primary">
                                        {{ __('Add') }}
                                    </button>
                              
                            </div>

                        </form>



<!--  -->






<!--  -->

                    </div>
                </div>
            </div>
        </div>
        

          
         
                
           <!-- <table > -->
           <table class="table table-hover">     
           <thead>
    <tr>
      <th scope="col">Shipping mark </th>
      <th scope="col">Nick</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Company Name</th>
      <th scope="col">Country</th>
      <th scope="col">Registration</th>
      <th scope="col">Mobile</th>
      <th scope="col">Email</th>
      <th scope="col">Social Account</th>
      <th scope="col">photo</th>
    </tr>
  </thead>
   @foreach ($customer as $item) 
                              
  <tr>
                   <td>{{$item->shippingmark}}</td>
                   <td>{{$item->nickname}}</td>
                   <td>{{$item->fistname}}</td>
                   <td>{{$item->lastname}}</td>
                   <td>{{$item->companyname}}</td>
                   <td>{{$item->country}}</td> 
                   <td>{{$item->registration}}</td>
                   <td>{{$item->mobile}}</td>
                   <td>{{$item->email1}}</td>
                   <td>{{$item->socialaccounts}}</td>   
                   <td>  <a target="_blank" href= "{{ $item->field2 }}">photo</a>   </td>         
                </tr>
 @endforeach 
           </table>
            
        

    </div>
    
@endsection
