@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <!-- <div class="card-header">{{ __('Register New Staff') }}</div> -->

                    <div class="card-body">
                        <form method="GET" action="">
                            @csrf
                          
                            <div class="form-group row">
                                <div class="col">
                                     <input type="text"  name="ShippingMark" class="form-control" placeholder="Shop / Company / Individual Name">
                                </div>
                                <div class="col">
                                     <input type="text" name="NickNameSirName" class="form-control" placeholder="Business Registration # If Individual ID #">
                                </div>
                                <div class="col">
                                    <input type="text" name="FirstName"class="form-control" placeholder="Address  ">
                                </div>
                                <div class="col">
                                    <input type="text" name="FirstName"class="form-control" placeholder="Road Name ">
                                </div>
                              
                            </div>
                            <div class="form-group row">
                                <div class="col">
                                     <input type="text" name="LastName" class="form-control" placeholder="Disrict">
                                </div>
                                <div class="col">
                                     <input type="text" name="CompanyName" class="form-control" placeholder="Area">
                                </div>
                                <div class="col">
                                    <input type="text" name="BusinessRegistration"class="form-control" placeholder="City">
                                </div>
                                <div class="col">
                                    <input type="text" name="BusinessRegistration"class="form-control" placeholder="Country">
                                </div>
                              
                            </div>
                            <div class="form-group row">
                                <div class="col">
                                     <input type="text" name="Address" class="form-control" placeholder="Zip code">
                                </div>
                                <div class="col">
                                     <input type="text" name="RoadName"class="form-control" placeholder="Primary Business">
                                </div>
                                <div class="col">
                                    <input type="text" name="City"class="form-control" placeholder="Contact Person / Surname">
                                </div>
                                <div class="col">
                                    <input type="text" name="City"class="form-control" placeholder="First Name">
                                </div>
                              
                            </div>
                            <div class="form-group row">
                                <div class="col">
                                     <input type="text" name="Country"class="form-control" placeholder="Other Name">
                                </div>
                                <div class="col">
                                     <input type="text" name="ZipCode"class="form-control" placeholder="Social Accounts">
                                </div>
                                <div class="col">
                                    <input type="text" name="Telephone"class="form-control" placeholder="Mobile 1">
                                </div>
                                <div class="col">
                                    <input type="text" name="Telephone"class="form-control" placeholder="Mobile 2">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col">
                                     <input type="text" name="Mobile"class="form-control" placeholder="Email 1">
                                </div>
                                <div class="col">
                                     <input type="text" name="e-mail1"class="form-control" placeholder="Email 2">
                                </div>
                                <div class="col">
                                    <input type="text" name="e-mail2"class="form-control" placeholder="e-mail 2">
                                </div>
                                <div class="col">
                                    <input type="text" name="e-mail2"class="form-control" placeholder="e-mail 2">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col">
                                     <input type="text" name="socialaccounts" class="form-control" placeholder="Bank 1">
                                </div>
                                <div class="col">
                                     <input type="text" name="socialaccounts" class="form-control" placeholder="Account Number">
                                </div>
                                <div class="col">
                                     <input type="text" name="socialaccounts" class="form-control" placeholder="Account Holder Name">
                                </div>
                                
                                <div class="col">
                                     <input type="text" name="socialaccounts" class="form-control" placeholder="Bank 2">
                                </div>
                                </div> 
                                

                                <div class="form-group row">
                                <div class="col">
                                     <input type="text" name="socialaccounts" class="form-control" placeholder="Account Number">
                                </div>
                                <div class="col">
                                     <input type="text" name="socialaccounts" class="form-control" placeholder="Account Holder Name">
                                </div>
                                <div class="col">
                                     <input type="text" name="socialaccounts" class="form-control" placeholder="Web site">
                                </div>
                                <div class="col">
                                <button type="submit" class="btn btn-warning">
                                        {{ __('Add') }}
                                    </button>
                              
                            </div>
                             
                                
                                </div> 
                                




                               

                        </form>



<!--  -->






<!--  -->

                    </div>
                </div>
            </div>
        </div>
        

          

            
        

    </div>
    
@endsection
