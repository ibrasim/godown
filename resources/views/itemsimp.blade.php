



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Live serach using jquery 22 june 2025</title>
    <!-- jquery cdn for live serach -->
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






                                    <td>      <button class="btn btn-primary add-to-temp" data-id="{{ $item1->id }}" data-name="{{ $item1->desc }}">Add1</button> </td>      
                                    </tr>           
                                    </tr>
                                    @endforeach 
                                    <tbody id="Content"></tbody>
                      </div>


                 
                </div>
            </div>
        </div>
    </div>
</div>

<script type = "text/javascript">

$('#search').on('keyup',function()
{
 alert('hellow');

    $value=$(this).val();
    $.ajax({
        type:'get',
        url:'{{URL::to('search')}}',
        data:{'search',:$value},

        success:function(data)
        {
            console.log(data);
            $('#Content').html(data);
        }
    })
})
    

</script>

</body>
</html>