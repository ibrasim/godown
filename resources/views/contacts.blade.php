@extends('layouts.app')
@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <!-- <div class="card-header">{{ __('Register New Staff') }}</div> -->

                    <div class="card-body">
                       
                    <form role="search" aria-label="Contacts" x-init x-target="contacts">
                              <label for="term">Search</label>
                              <input type="search" id="term" name="term" @input.debounce="$el.form.requestSubmit()">
                              <button>Submit</button>
                            </form>
                            <h2>Results</h2>
                            <ul id="contacts">
                            @foreach($contacts as $contact)
                              <li>{{ $contact->shippingmark }} – {{ $contact->shippingmark }}</li>
                            @endforeach
                          </ul>

                    </div>





                








                </div>
            </div>
            <?php echo "<br>"; ?>
            <?php echo "<br>"; ?>

                              
        </div>
        
      
          
         