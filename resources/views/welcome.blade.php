<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Email Send Form</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
       
    </head>
    <body class='bg-danger'>
   
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-6 offset-3">
                    @if (Session::get('messages'))
                        <div class="alert alert-primary" role="alert">
                           {{ Session::get('messages') }}
                        </div>
                    @endif
                    <div class="card">
                        <div class="card-header bg-dark text-light">
                            <h4 class="m-auto">Send Email</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('send') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label>Name</label>
                                    <input class="form-control" type="text" name="name" placeholder="Enter Name" required/>
                                </div>

                                <div class="form-group">
                                    <label>Email</label>
                                    <input class="form-control" type="email" name="email" placeholder="Enter Email"requred/>
                                </div>


                                <div class="form-group">
                                    <label>Subject</label>
                                    <input class="form-control" type="text" name="sub" placeholder="Enter Subject">
                                </div>

                                <div class="form-group">
                                    <label for="">Body</label>
                                    <textarea class="form-control" name="body" placeholder="Enter Body"></textarea>
                                </div>

                                <button type="submit" class="btn btn-lg btn-success btn-block">Send</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
