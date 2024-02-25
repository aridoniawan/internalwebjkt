<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>internalwebjkt:EDIT</title>
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
            <div class="d-flex flex-column flex-shrink-0 bg-light shadow" style=" width: 270px">
                <div class="d-flex flex-column flex-shrink-0 bg-light mt-4" style="width: 250px; height:1000vh">
                    <a href="{{'../'}}" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
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
                    <hr>
                  </div>
            </div>
          </div>
          
          <!-- Content -->
          <div class="col-9">
            <!-- FORM -->
            <form action="{{url("posts/$post->id")}}" method="post" class="form-control mt-4">
                @method('PATCH')
                @csrf
                <h2>Form Request Meeting</h2>
                <div class="form-floating mb-3">
                    <input type="date" class="form-control" id="floatingInput" placeholder="Tanggal" name="tanggal" value="{{$post->tanggal}}" required>
                    <label for="floatingInput">Tanggal</label>
                  </div>
                  <div class="form-floating mb-3">
                    <input type="time" class="form-control" id="floatingPassword" placeholder="jam" name="jam" value="{{$post->jam}}" required>
                    <label for="floatingPassword">jam</label>
                  </div>
                  <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="floatingPassword" placeholder="email" name="email" value="{{$post->email}}" required>
                    <label for="floatingPassword">Email</label>
                  </div>
                  <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingPassword" placeholder="aplikasi" name="aplikasi" value="{{$post->aplikasi}}" required>
                    <label for="floatingPassword">aplikasi</label>
                  </div>
                  <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingPassword" placeholder="agenda" name="agenda" value="{{$post->agenda}}" required>
                    <label for="floatingPassword">agenda</label>
                  </div>
                  <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingPassword" placeholder="reqby" name="reqby" value="{{$post->reqby}}" required>
                    <label for="floatingPassword">Request by</label>
                  </div>
                  <div class="form-floating mb-3">
                    <textarea class="form-control" id="content" rows="3" name="detail">{{$post->detail}}</textarea>
                    <label for="content">Detail </label>
                  </div>
                  <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingPassword" placeholder="link" name="link" value="{{$post->link}}" required>
                    <label for="floatingPassword">link</label>
                  </div>
                  <div class="form-floating mb-3">
                    <select name="rmeeting" class="form-select" aria-label="Default select example" required>
                      <option selected>{{$post->rmeeting}}</option>
                      <option value="Ruang Meeting A">Ruang Meeting A</option>
                      <option value="Ruang Meeting B">Ruang Meeting B</option>
                      <option value="Ruang Meeting C">Ruang Meeting C</option>
                      <option value="Ruang Meeting D">Ruang Meeting D</option>
                      <option value="Ruang Meeting E">Ruang Meeting E</option>
                      <option value="Ruang Meeting F">Ruang Meeting F</option>
                    </select>
                    {{-- <input type="text" class="form-control" id="floatingPassword" placeholder="rmeeting" name="rmeeting"> --}}
                    <label for="floatingPassword">ruang meeting</label>
                  </div>
                  <button type="submit" class="d-grid col-2 btn btn-primary">Kirim</button>
            </form>
          </div>
        </div>
      </div>
      
    <script src="{{asset('bootstrap5/js/bootstrap.bundle.min.js')}}" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>