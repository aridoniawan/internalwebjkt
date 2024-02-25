<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>internalwebjkt</title>
    <link href="{{asset('bootstrap5/css/bootstrap.min.css')}}" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/sidebar.css')}}">
    @php
        function indoDate($date) {
        $days = [
            'Sunday'    => 'Minggu',
            'Monday'    => 'Senin',
            'Tuesday'   => 'Selasa',
            'Wednesday' => 'Rabu',
            'Thursday'  => 'Kamis',
            'Friday'    => 'Jumat',
            'Saturday'  => 'Sabtu',
        ];

        $months = [
            'January'   => 'Januari',
            'February'  => 'Februari',
            'March'     => 'Maret',
            'April'     => 'April',
            'May'       => 'Mei',
            'June'      => 'Juni',
            'July'      => 'Juli',
            'August'    => 'Agustus',
            'September' => 'September',
            'October'   => 'Oktober',
            'November'  => 'November',
            'December'  => 'Desember',
        ];

        $day = date('l', strtotime($date));
        $month = date('F', strtotime($date));

        return $days[$day] . ', ' . $months[$month] . date(' - Y', strtotime($date));
      }
    @endphp
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
            <h2 class="text-center mt-2">Meeting {{ indoDate(now()) }}</h2>
            <div class="row row-cols-1 row-cols-md-3 g-4 mt-2">
              <div class="col">
                <div class="card shadow">
                  <div class="card-header text-bg-success">
                    Ruang Meeting A (Samping BOD)
                  </div>
                  @foreach ($meetingRooms as $room)                      
                  <div class="card border-success p-1 lh-1">
                    <h6 class="card-title">Agenda : {{$room->agenda}}</h6>
                    <p class="fs-6">User : {{$room->uname}}</p>
                    <p class="fs-6">Start: {{date('H:i', strtotime($room->start_time))}} s/d {{date('H:i', strtotime($room->end_time))}}</p>
                  </div>
                  @endforeach
                </div>
              </div>
              <div class="col">
                <div class="card shadow">
                  <div class="card-header text-bg-success">
                    Ruang Meeting B (Meeting Besar)
                  </div>
                  @foreach ($meetingRoomsB as $room)                      
                  <div class="card border-success p-1 lh-1">
                    <h6 class="card-title">Agenda : {{$room->agenda}}</h6>
                    <p class="fs-6">User : {{$room->uname}}</p>
                    <p class="fs-6">Start: {{date('H:i', strtotime($room->start_time))}} s/d {{date('H:i', strtotime($room->end_time))}}</p>
                  </div>
                  @endforeach
                </div>
              </div>
              <div class="col">
                <div class="card shadow">
                  <div class="card-header text-bg-success">
                    Ruang Meeting C
                  </div>
                  @foreach ($meetingRoomsC as $room)                      
                  <div class="card border-success p-1 lh-1">
                    <h6 class="card-title">Agenda : {{$room->agenda}}</h6>
                    <p class="fs-6">User : {{$room->uname}}</p>
                    <p class="fs-6">Start: {{date('H:i', strtotime($room->start_time))}} s/d {{date('H:i', strtotime($room->end_time))}}</p>
                  </div>
                  @endforeach
                </div>
              </div>
            </div>
            <div class="row row-cols-1 row-cols-md-3 g-4 mt-3">
              <div class="col">
                <div class="card shadow">
                  <div class="card-header text-bg-success">
                    Ruang Meeting F (Samping Ruang Server)
                  </div>
                  @foreach ($meetingRoomsf as $room)                      
                  <div class="card border-success p-1 lh-1">
                    <h6 class="card-title">Agenda : {{$room->agenda}}</h6>
                    <p class="fs-6">User : {{$room->uname}}</p>
                    <p class="fs-6">Start: {{date('H:i', strtotime($room->start_time))}} s/d {{date('H:i', strtotime($room->end_time))}}</p>
                  </div>
                  @endforeach
                </div>
              </div>
              <div class="col">
                <div class="card shadow">
                  <div class="card-header text-bg-success">
                    Ruang Meeting E 
                  </div>
                  @foreach ($meetingRoomsE as $room)                      
                  <div class="card border-success p-1 lh-1">
                    <h6 class="card-title">Agenda : {{$room->agenda}}</h6>
                    <p class="fs-6">User : {{$room->uname}}</p>
                    <p class="fs-6">Start: {{date('H:i', strtotime($room->start_time))}} s/d {{date('H:i', strtotime($room->end_time))}}</p>
                  </div>
                  @endforeach
                </div>
              </div>
              <div class="col">
                <div class="card shadow">
                  <div class="card-header text-bg-success">
                    Ruang Meeting D
                  </div>
                  @foreach ($meetingRoomsD as $room)                      
                  <div class="card border-success p-1 lh-1">
                    <h6 class="card-title">Agenda : {{$room->agenda}}</h6>
                    <p class="fs-6">User : {{$room->uname}}</p>
                    <p class="fs-6">Start: {{date('H:i', strtotime($room->start_time))}} s/d {{date('H:i', strtotime($room->end_time))}}</p>
                  </div>
                  @endforeach
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>    
    <script src="{{asset('bootstrap5/js/bootstrap.bundle.min.js')}}" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>