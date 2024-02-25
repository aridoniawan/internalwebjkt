<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>internalwebjkt</title>
    <link href="{{asset('bootstrap5/css/bootstrap.min.css')}}" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/sidebar.css')}}">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" aria-label="Tenth navbar example">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample08" aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample08">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#" style="font-size: bold">PT. Trans-Pacific Petrochemical Indotama</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Jakarta, {{date('D d M Y H:i:s')}}</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    <div class="container-fluid">
        <div class="row">
          <!-- Sidebar -->
          <div class="col-2 me-5">
            <div class="d-flex flex-column flex-shrink-0 bg-light shadow" style="width: 270px">
                <div class="d-flex flex-column flex-shrink-0 mt-4 bg-light" style="width:250px; height:1000vh">
                    <a href="{{url('posts')}}" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
                      <img src="{{asset('image/TPPI.png')}}" alt="TPPI" style="height:41px; width:41px;" class="ms-4 me-4">
                      {{-- <span class="fs-4">internalwebjkt</span> --}}
                      <h4>internalwebjkt</h4>
                    </a>
                    <hr>
                    <ul class="nav nav-pills flex-column mb-auto ms-4">
                      <li>
                        <a href="#" class="nav-link link-dark">
                          Home
                        </a>
                      </li>
                      <li>
                        <a href="{{url("posts")}}" class="nav-link link-dark">                         
                          Request Vicon
                        </a>
                      </li>
                      <li>
                        <a href="{{url("rmeeting")}}" class="nav-link link-dark">
                          Booking Meeting
                        </a>
                      </li>
                      <li>
                        <a href="{{url("rooms")}}" class="nav-link link-dark">
                          Lihat Meeting
                        </a>
                      </li>
                    </ul>
                    <a class="lve" style="color: red;">Test</a>
                    <hr>
                  </div>
            </div>
          </div>
          <!-- Content -->
          <div class="col-9">
            <!-- Tabel -->
            <h2 class="text-center">Outcoming Meeting</h2>
            <a href="{{url("posts/create")}}" class="btn btn-secondary shadow-sm">+ Add Request</a>
            <a href="{{url("posts/viewedit")}}" class="btn btn-success">Edit</a>
            @if(session('success'))
            <div class="alert alert-success mt-2 alert-dismissible fade show" role="alert">
              {{ session('success') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            @if(session('successd'))
            <div class="alert alert-danger mt-2 alert-dismissible fade show" role="alert">
              {{ session('successd') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            <div class="justify-content-md-center">
            </div>
            <div class="table-container p-3">
              <table class="table table-bordered shadow">
                <thead class="table-primary">
                  <tr>
                    <th scope="col" style="text-decoration: none;">@sortablelink('tanggal', 'Tanggal')</th>
                    <th scope="col">Jam</th>
                    <th scope="col">Aplikasi</th>
                    <th scope="col">Agenda</th>
                    <th scope="col">Request By</th>
                    <th scope="col">Link Meeting</th>
                    <th scope="col">Ruang Meeting</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($posts as $post)                        
                  <tr>
                    <td>{{date('d/M/Y', strtotime($post->tanggal))}}</td>
                    <td>{{$post->jam}}</td>
                    <td>{{$post->aplikasi}}</td>
                    <td>{{$post->agenda}}</td>
                    <td>{{$post->reqby}}</td>
                    <td class="text-break" style="font-size: 12px"><a href="{{$post->link}}">{{$post->link}}</a></td>
                    <td>{{$post->rmeeting}}</td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
              <div class="pull-right">
                {{-- {{ $posts->links() }} --}}
                {!! $posts->appends(Request::except('page'))->render() !!}
              </div>
            </div>
          </div>
        </div>
      </div>
      
    <script src="{{asset('bootstrap5/js/bootstrap.bundle.min.js')}}" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>