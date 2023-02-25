@extends('layouts.app1')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Chart') }}</div>

                <div class="card-body">
                


{{--<canvas id="myAreaChart" width="100%" height="30"></canvas>--}}
<canvas id="canvas" width="800" height="400"></canvas>



<script>
var year = <?php echo $year; ?>;
    var user = <?php echo $user; ?>;
    var barChartData = {
        labels: year,
        datasets: [{
            label: 'records',
            backgroundColor: "orange",
            data: user
        }]
    };


  window.onload = function() {
        var ctx = document.getElementById("canvas").getContext("2d");
        window.myBar = new Chart(ctx, {
            type: 'bar',
            data: barChartData,
            options: {
                elements: {
                    rectangle: {
                        borderWidth: 3,
                        borderColor: '#de2f2f',
                        borderSkipped: 'bottom'
                    }
                },
                responsive: true,
                title: {
                    display: true,
                    text: 'No of records February 1-23 2023'
                }
            }
        });
    };  

  </script>


                 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
