<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>internalwebjkt:EDIT</title>
    <link href="{{asset('bootstrap5/css/bootstrap.min.css')}}" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/sidebar.css')}}">
    <style>
      .calendar {
          width: 100%;
          max-width: 800px;
          margin: auto;
          margin-top: 20px;
      }

      .day {
          border: 1px solid #ddd;
          padding: 10px;
          height: 150px;
      }

      .event {
          background-color: #007bff;
          color: #fff;
          padding: 5px;
          margin-bottom: 5px;
          border-radius: 3px;
      }
  </style>
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
                        <a href="#" class="nav-link link-dark">
                          Lihat Meeting
                        </a>
                      </li>
                    </ul>
                    <hr>
                  </div>
            </div>
          </div>
          <!-- Content -->
          <div class="col-9">
            <!-- Tabel -->

            <h2 class="text-center">Detail Meeting</h2>
            <div class="card border-primary mb-3" style="max-width: 18rem;">
              <div class="card-header">Detail Link</div>
              <div class="card-body text-primary">
                <h5 class="card-title">{{$post->detail}}</h5>
              </div>
            </div>
            <a href="{{url("posts/viewedit")}}">< BACK</a>
            <div class="container">
              <h2 class="mt-4 mb-4">Ruang Meeting</h2>
              <div class="calendar row row-cols-1 row-cols-md-2 g-4">
                  <!-- Loop through each day in the month -->
                  {{-- @for ($day = 1; $day <= $lastDayOfMonth; $day++) --}}
                      <div class="day col">
                          <h5 class="mb-3">{{$post->agenda}}</h5>
                          <h6 class="mb-2">{{$post->rmeeting}}</h6>
                          <!-- Loop through events for the day -->
                          {{-- @foreach ($events as $event) --}}
                              {{-- @if ($event['day'] == $day) --}}

                                  <div class="event">
                                      <strong>Tanggal :{{ date('d M Y', strtotime($post->tanggal)) }}</strong><br>
                                      Waktu : {{$post->jam}}
                                      
                                  </div>
                              {{-- @endif --}}
                          {{-- @endforeach --}}
                      </div>
                      <!-- Add a new row for every 4 days -->
                      {{-- @if ($day % 4 == 0) --}}
                          <div class="w-100"></div>
                      {{-- @endif --}}
                  {{-- @endfor --}}
              </div>
          </div>
          </div>
        </div>
      </div>
      
    <script src="{{asset('bootstrap5/js/bootstrap.bundle.min.js')}}" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>