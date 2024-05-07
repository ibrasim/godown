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
        
      
          
         
                
				
           <table class="table table-hover">     
           <thead>
				<tr>
				  <th scope="col">Shipping mark </th>
				  <th scope="col">Company Name</th>
				  <th scope="col">Country</th>
				  <th scope="col">Registration</th>
				  <th scope="col">Mobile</th>
				  <th scope="col">Email</th>
				  <th scope="col">Social Account</th>
				  <th scope="col">photo</th>
                  <th scope="col">Action</th>
				</tr>
			</thead>
		@foreach ($customer as $item) 
                              
				<tr>
                   <td>{{$item->shippingmark}}</td>      
                   <td>{{$item->companyname}}</td>
                   <td>{{$item->country}}</td> 
                   <td>{{$item->registration}}</td>
                   <td>{{$item->mobile}}</td>
                   <td>{{$item->email1}}</td>
                   <td>{{$item->socialaccounts}}</td>   
                   <td> <a target="_blank" href= "{{ asset('/'.$item->field2) }}"  width="45" height="75">photo</a>
                   </td> 
                   <td>
						<form action="{{ route('delete_customer',$item->id) }}" method="post">
                         
                         
                         @csrf
							<button type="submit" value="delete" class="btn btn-danger" > DELETE </button>
						</form>             
                         
                    </tr>
	@endforeach 
           </table>     
    </div>
@endsection
