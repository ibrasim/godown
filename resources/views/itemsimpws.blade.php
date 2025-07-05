<!DOCTYPE html>
<html lang="en">


<!-- https://bootstrapfriendly.com/blog/auto-load-more-data-on-page-scroll-using-ajax-in-laravel-9 -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>How to Create Ajax based Bootstrap Pagination in Laravel 9</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        #items_container .content_box div {
            box-shadow: 0 0 3px rgba(0, 0, 0, .3);
            padding: 15px;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>

    <div class="container py-4 my-3">
        <div class="row mb-5">
            <div class="col-md-12">
                <h2>Ajax Load more post example on page scroll</h2>
                <div class="row pt-3" id="items_container">

                    @foreach ($itemsimp as $item)
                        <div class="col-md-4 content_box">
                            <div>
                                <h2>{{ $item->id }}</h2>
                                <p>{{ $item->descript }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="col-md-12">
                    <div class="text-center">
                        <div class="ajax_load" style="display: none">
                            <div class="spinner-border text-success spinner-border-md" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                            <div class="spinner-grow text-success spinner-grow-md" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



<div>
    <h1>test</h1>
</div>



    <script src="https://code.jquery.com/jquery-3.6.4.min.js"
        integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            var start = 10;
            $(window).scroll(function() {
                if ($(window).scrollTop() + $(window).height() >= $(document).height()) {
                    loadData(start);
                    start = start + 10;
                }
            });
        });

        function loadData(start) {
            //var start = 10;
            $.ajax({
                url: "{{ route('itemsw') }}",
                method: "GET",
                data: {
                    start: start
                },
                dataType: "json",
                beforeSend: function() {
                    $('.ajax_load').show();
                },
                success: function(data) {

                    if (data.data.length > 0) {
                        var html = '';
                        for (var i = 0; i < data.data.length; i++) {
                            html += `<div class="col-md-4 content_box">
                                            <div>
                                                <h2>` + data.data[i].id + `</h2>
                                                <p>` + data.data[i].descript + `</p>
                                                
                                            </div>
                                        </div>`;
                        }
                        //console.log(html);
                        //append data  without fade in effect
                        //$('#items_container').append(html);

                        //append data with fade in effect
                        $('#items_container').append($(html).hide().fadeIn(1000));
                        $('.ajax_load').show();
                        //start = data.next;
                        console.log(start);
                    } else {
                        $('.ajax_load').show().html('No More Data Available');
                        // $('.ajax_load').attr('disabled', true);
                    }
                }
            });
        }
    </script>
</body>

</html>