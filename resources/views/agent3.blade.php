@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('RTAG03') }}</div>

                <div class="card-body">
                    
               
               
                 <img src="{{ asset('/towel.jpg') }}" />
                 <h2>   {{ __('MVR 5.00') }}</h2>
                 <br>
                 <img src="{{ asset('/displate.jpg') }}" />
                 <h2>   {{ __('MVR 5.00') }}</h2>
                 <br>
                 <img src="{{ asset('/tbrush.jpg') }}" />
                 <h2>   {{ __('MVR 5.00') }}</h2>
                 <br>
                 <img src="{{ asset('/bedsheet.jpg') }}" />
                 <h2>   {{ __('MVR 5.00') }}</h2>
                 <br>
                 <img src="{{ asset('/brusht.jpg') }}" />
                 <h2>   {{ __('MVR 5.00') }}</h2>
      
      
      
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
