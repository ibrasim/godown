@extends('layouts.app')

<!DOCTYPE html>
<html lang="en">
<head>


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Live serach 13 july 2025</title>
    
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<!-- Latest compiled and minified CSS -->
<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->
 <link href="{{ asset('css/app.css') }}" rel="stylesheet">

<!-- Latest compiled and minified JavaScript -->


<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

</head>
<body> 

<!--  -->


<!--  -->
 
<div class="container">




    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Search') }}</div>



                
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
                           
                             

                             
                             </tr>
                         </thead>
                         <tbody class="alldata">
                                @foreach ($itemswiftway as $item1)           
                                    <tr>
                                    <td>{{$item1->id}}</td>      
                                    <td>{{$item1->desc}}</td>      
                                    

<!-- <td>      <button class="btn btn-primary add-to-temp" data-id="{{ $item1->id }}" data-name="{{ $item1->desc }}"></button> </td>         -->



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
        url:'{{URL::to('searchb')}}',
        data:{'search' : $value},

        success:function(data)
        {
            //  console.log(data);
            $('#Content').html(data);
        }
    });
})
    

</script>

<!-- script to check if it can write to temp -->
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const tempTable = document.querySelector('#tempTable tbody');

        document.querySelectorAll('.add-to-temp').forEach(button => {
            button.addEventListener('click', () => {
                const id = button.getAttribute('data-id');
                const descript = button.getAttribute('data-descript');

                // Check if already added
                if (document.querySelector(`#row-${id}`)) {
                    alert('Item already added!');
                    return;
                }

                const row = document.createElement('tr');
                row.id = `row-${id}`;
                row.descript = `row-${descript}`;
                                

                row.innerHTML = `
                    <td>${id}</td>
                    <td>${descript}</td>
                    <td><button class="btn btn-danger btn-sm" onclick="removeRow(${id})">Remove</button></td>
                              
                    
                `;
                tempTable.appendChild(row);
            });
        });
    });

    function removeRow(id) {
        document.querySelector(`#row-${id}`).remove();
    }
</script>

<!-- to store to temp table -->

<script>
    document.getElementById('saveToFile').addEventListener('click', () => {
        const rows = document.querySelectorAll('#tempTable tbody tr');
        let textData = 'ID\tName\n'; // Header line

        rows.forEach(row => {
            const cells = row.querySelectorAll('td');
            const id = cells[0].textContent;
            const descript = cells[1].textContent;
            textData += `${id}\t${descript}\n`;
        });

        const blob = new Blob([textData], { type: 'text/plain' });
        const url = URL.createObjectURL(blob);

        const a = document.createElement('a');
        a.href = url;
        a.download = 'tempTable.txt';
        a.click();

        URL.revokeObjectURL(url);
    });
</script>




<div>
    <h3>check against invoice , search , if not found add items</h3>
      <form action="{{ route('itemswiftways.store') }}" method="POST" class="mb-6">
            @csrf
            <div class="mb-4">
                <label class="block mb-1 font-semibold">Description</label>
                <input type="text" name="desc" class="w-full border p-2 rounded" value="{{ old('desc') }}" required>
            </div>
            <button type="submit" class="btn btn-info" disabled>  

                <!-- above button disabled  to remove "diabled later -->
                Add Item
            </button>
        </form>
</div>



</body>
</html>