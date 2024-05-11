@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Customer Search') }}</div>
                <div class="card-body">
                
                <form role="search" aria-label="Contacts" x-init x-target="contacts">
                                 <label for="term">Search</label>
                                 <input type="search" id="term" name="term" @input.debounce="$el.form.requestSubmit()">
                                 <button>Submit</button>
                               </form>

                               <h2>Results</h2>
                               <ul id="contacts">
                               @foreach($contacts as $contact)
                                 <li>{{ $contact->shippingmark }} – {{ $contact->registration }}- {{ $contact->firstname }}– {{ $contact->lastname}}– {{ $contact->companyname }}– {{ $contact->mobile}}– {{ $contact->email1}}</li>
                               @endforeach
                             </ul>
       
                     
   
                       </div>

                       </div>
                       </div>
                       

                       </div>

                       </div>
                       </div>
                       
   
                       @endsection




                             
          
         