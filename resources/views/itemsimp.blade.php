

<!DOCTYPE html>
<html lang="en">
<head>


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Live serach using jquery 25 june 2025</title>
    
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<!-- Latest compiled and minified CSS -->
<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->
 <link href="{{ asset('css/app.css') }}" rel="stylesheet">

<!-- Latest compiled and minified JavaScript -->


<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

</head>
<body> 
 
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
                             <th scope="col">hscode</th>
                             <th scope="col">hs description</th>
                             <th scope="col">description</th>
                             <th scope="col">quantity</th>
                             <th scope="col">unit</th>
                             
                             <th scope="col">year</th>
                             <th scope="col">month</th>
                             <th scope="col">currency</th>
                             

                             
                             </tr>
                         </thead>
                         <tbody class="alldata">
                                @foreach ($itemsimp as $item1)           
                                    <tr>
                                    <td>{{$item1->id}}</td>      
                                    <td>{{$item1->hscode}}</td>      
                                      <td>{{$item1->hsdescrip}}</td>      
                                        <td>{{$item1->descript}}</td>      
                                          <td>{{$item1->qty}}</td>      
                                            <td>{{$item1->unit}}</td>      
                             
                                                <td>{{$item1->impyear}}</td>      
                                                  <td>{{$item1->impmonth}}</td>      
                                                    <td>{{$item1->cur}}</td>      






                                    <td>      <button class="btn btn-primary add-to-temp" data-id="{{ $item1->id }}" data-name="{{ $item1->desc }}">Add</button> </td>      
                                    </tr>           
                                    </tr>
                                    @endforeach 
                            </tbody>
                                    <tbody id="Content" class="searchdata"></tbody>
                      </div>


                 
                </div>
            </div>
        </div>
    </div>
</div>





<script type = "text/javascript">

$('#search').on('keyup',function()
{
 

    $value=$(this).val();
    //  alert($value);

    if($value)
    {
      $('.alldata').hide();
      $('.searchdata').show();
    }
    else
    {
      $('.alldata').show();
      $('.searchdata').hide();
    }
   
    $.ajax({
        type:'GET',
        url:'{{URL::to('search')}}',
        data:{'search' : $value},

        success:function(data)
        {
            //  console.log(data);
            $('#Content').html(data);
        }
    });
})
    

</script>

</body>
</html>