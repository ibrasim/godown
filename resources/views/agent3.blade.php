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
                            <th scope="col">Year</th>
                            <th scope="col">Unit</th>
                            <th scope="col">Month</th>
                            <th scope="col">Duration</th>
                            <th scope="col">paid_date</th>
                            <th scope="col">Aamount</th>
                            <th scope="col">Tenant</th>
                            <th scope="col">Mode</th>
                            <th scope="col">Other Details</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">2024</th>
                            <td>fairview A2024</td>
                            <td></td>
                            <td>monthly</td>
                            <td>10-Jan-24</td>
                            <td>Dr.Omar</td>
                            <td>7812.59</td>
                            <td>transfer</td>
                            <td>rent with utility bills (as agreed)</td>
                          </tr>
                          <tr>
                            <th scope="row">2024</th>
                            <td>2023</td>
                            <td>fairview A </td>
                            <td>December</td>
                            <td>monthly</td>
                            <td>1-Dec-2023</td>
                            <td>Dr.Omar</td>
                            <td>7620.00</td>
                            <td>rent with utility bills (as agreed)</td>
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
