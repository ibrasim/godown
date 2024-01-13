@extends('layouts.app2')

@section('content')
<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('s!') }}</div>
                {{-- <div style = "padding:35px;">  --}}
                



                      <div class="container">
                      
                      <table class="table thead-dark">
                        <thead>
                          <tr>
                            <th scope="col">No-</th>
                            <th scope="col">Task Detail</th>
                            <th scope="col">Started</th>
                            <th scope="col">Completed</th>
                            <th scope="col">Status</th>
                            <th scope="col">Remarks</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>Customer table and entry screen created</td>
                            <td>6 December 2022</td>
                            <td>8 December 2022</td>
                            <td> add / delete functionality developed</td>
                            <td> to be tested. need validation and other nice to have features, image entry at user end to be devloped</td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>User role developed although limited functionality somewhat</td>
                            <td>11 December 2022</td>
                            <td>11 December 2022</td>
                            <td> common layout with multi user</td>
                            <td> to do user access , landing page</td>
                            
                          </tr>
                          <th scope="row">3</th>
                            <td>Vendor table and entry screen created</td>
                            <td>13 December 2022</td>
                            <td>14 December 2022</td>
                            <td> add / delete functionality developed</td>
                            <td> to be tested. need validation and other nice to have features, vendor card image save to be coded</td>
                          </tr>
                          <tr>
                           
                          </tr>
                          </tr>
                          <tr>
                            <th scope="row">4</th>
                            <td>Add information to Tracking page </td>
                            <td>17 December 2022</td>
                            <td>17 December 2022</td>
                            <td> Bootstrap modal used</td>
                            <td> ORM relation to customer / vendor used live tracking to be tested at BOTH ends</td>
                          </tr>
                          </tr>
                        </tbody>
                      </table>
                </div>


 
<h4>test </h4>
<p class="p-4 bg-success text-white">
T
</p>
 



</div>
                <div class="card-body">
                    
               
      
      
      
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
