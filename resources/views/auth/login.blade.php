<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    <!-- Style -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <title>Login</title>
  </head>
  <body>
    <div class="content">
        <div class="container">
            <div class="col-md-8 offset-md-2 mt-5" >
                <div class="card mb-3 shadow">
                    <div class="row g-2">
                        <div class="col-md-4">
                            <img src="{{ asset('images/rpl.png') }}" alt="logo rpl" class="pt-5 ml-4" style="width:180px;">
                        </div>

                        <div class="col-md-6 contents">
                            <div class="row justify-content-center">
                                <div class="col-md-18">
                                    <div class="card-body">
                                        <h3 class="card-title text-center">Silahkan Login</h3>
                                        <p class="text-center">Toko.Buku.QU</p>
                                    </div>

                                    <form action="{{ route('login') }}" method="post">
                                        @csrf
                                        <div class="form-group first ">
                                            <label for="username">Username</label>
                                            <input type="text" class="form-control" id="username" name="username">
                                        </div>
                                        <br>
                                        <div class="form-group last mb-4">
                                            <label for="password">Password</label>
                                            <input type="password" class="form-control" id="password" name="password">
                                        </div>
                                    
                                        <input type="submit" value="Log In" class="btn btn-block btn-primary">
                                    </form>
                                    <br>
                                
                                    @if ($message = Session::get('error'))
                                        <div class="alert alert-danger alert-block">
                                            <button type="button" class="close" data-dismiss="alert">x</button>
                                            <strong>{{ $message }}</strong>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
  </body>
</html>