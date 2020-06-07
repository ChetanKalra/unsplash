<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <style>
            .bg-grey{
                background: #ddd;
            }
        </style>
    </head>
    <body>
        <div class="container mt-5">
            <h2>Example 1</h2>
            
            {{ csrf_field() }}

            <div id="accordion">

                @foreach([1, 2, 3] as $no)
                    <div class="card">
                        <div class="card-header" id="heading{{ $loop->iteration }}">
                            <h5 class="mb-0">
                                <button class="btn btn-link" data-toggle="collapse" data-target="#collapse{{ $loop->iteration }}" aria-expanded="true" aria-controls="collapseOne">
                                Collapsible Group Item #{{ $loop->iteration }}
                                </button>
                            </h5>
                        </div>

                        <div id="collapse{{ $loop->iteration }}" class="collapse @if($loop->first) show @endif" aria-labelledby="heading{{ $loop->iteration }}" data-parent="#accordion">
                            <div class="card-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>


            <!-- <h2 class="mt-5">Example 2</h2>

            <table class="table table-bordered mt-4">
                <tbody>
                    @foreach([1, 2, 3, 4] as $no)
                        <tr @if($loop->first) class="bg-grey" @endif>
                            <td>{{ $no }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table> -->
        </div>



        @jquery
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>