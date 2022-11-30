@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <img src="{{ asset('/bracelet.jpg') }}" />
                 <h2>   {{ __('MVR 5.0') }}</h2>
                 <br>
                 <img src="{{ asset('/jewel1.jpg') }}" />
                 <h2>   {{ __('MVR 5.00') }}</h2>
                 <br>
                 <img src="{{ asset('/jewel2.jpg') }}" />
                 <h2>   {{ __('MVR 5.00') }}</h2>
                 <br>
                 <img src="{{ asset('/jewel3.jpg') }}" />
                 <h2>   {{ __('MVR 5.00') }}</h2>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
