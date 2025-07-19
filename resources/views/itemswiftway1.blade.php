@extends('layouts.app')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Live serach 19 july 2025</title>   

<!-- Latest compiled and minified CSS -->
<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->
 <link href="{{ asset('css/app.css') }}" rel="stylesheet">
<!-- Latest compiled and minified JavaScript -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>



</head>
<body> 

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('') }}</div>
                <div class="card-body">                




                        <input type="search" name="search" id="search"
                        placeholder="search something here" class = "form-control">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif  
                                            <table id="tempTable" class="table table-bordered">
                                                <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Description</th>
                                                </tr>
                                                </thead>
                                              <tbody id="Content">
                                                    @foreach ($itemswiftway1 as $item1)
                                                        <tr>
                                                        <td>{{$item1->id}}</td>      
                                                        <td>{{$item1->desc}}</td>      
                                                        </tr>
                                                    @endforeach 
                                                    </tbody>



                                            </table>


                                     


                <script type="text/javascript">
$(document).ready(function(){
    $('#search').on('keyup', function() {
        var $value = $(this).val();


        $.ajax({
            type: 'GET',
            url: "{{ url('searchb') }}",
            data: { 'search': $value },
            success: function(data) {
                $('#Content').html(data);
            }
        });
    });
});

</script>
  


</body>
</html>