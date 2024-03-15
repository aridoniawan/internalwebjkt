<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('bootstrap5/css/bootstrap.min.css')}}" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="row mt-4 justify-content-center">
        <div class="col-md-4">
            <div class="card cal-md-4">
                <div class="card card-body border-success">
                    <div class="card card-header text-bg-success">
                        <h1 class="text-center">
                            Login
                        </h1>
                    </div>
                    @if(session('error_message'))
                    <div class="alert alert-danger mt-2 alert-dismissible fade show" role="alert">
                      {{ session('error_message') }}
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
                    <form action="{{url('login')}}" method="POST" class="card card-body">
                        @csrf
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Email address</label>
                          <input type="email" class="form-control" id="exampleInputEmail1" name="email">
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label">Password</label>
                          <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn border-success">Submit</button>
                        </div>
                      </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>