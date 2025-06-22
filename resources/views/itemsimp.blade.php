@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">

<input type="search" name="search" id="search"
placeholder="search something here" class = "form-control">

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                             <div class="card-body">
                            <table class="table table-hover">     
                            <thead>
                             <tr>
                             <th scope="col">id</th>
                             <th scope="col">id</th>
                             <th scope="col">id</th>
                             <th scope="col">id</th>
                             <th scope="col">id</th>
                             <th scope="col">id</th>
                             <th scope="col">id</th>
                             <th scope="col">id</th>
                             <th scope="col">id</th>
                             <th scope="col">id</th>
                             

                             <th scope="col">description</th>
                             </tr>
                         </thead>
                                @foreach ($itemsimp as $item1)           
                                    <tr>
                                    <td>{{$item1->id}}</td>      
                                    <td>{{$item1->hscode}}</td>      
                                      <td>{{$item1->hsdescrip}}</td>      
                                        <td>{{$item1->descript}}</td>      
                                          <td>{{$item1->qty}}</td>      
                                            <td>{{$item1->unit}}</td>      
                                              <td>{{$item1->unit_price_mvr}}</td>      
                                                <td>{{$item1->impyear}}</td>      
                                                  <td>{{$item1->impmonth}}</td>      
                                                    <td>{{$item1->cur}}</td>      






                                    <td>      <button class="btn btn-primary add-to-temp" data-id="{{ $item1->id }}" data-name="{{ $item1->desc }}">Add</button> </td>      
                                    </tr>           
                                    </tr>
                                    @endforeach 
                      </div>


                 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
