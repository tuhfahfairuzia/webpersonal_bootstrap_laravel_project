<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tuhfah profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
    crossorigin="anonymous">
    {{-- <link rel="stylesheet" href="assets/style.css/style.css"> --}}
    <link href="{{ Vite::asset('resources/css/style.css') }}" rel="stylesheet">


  </head>
  <body>
    {{-- <div class="container m-5">
        {{-- Contoh cara mereferensikan gambar di dalam file blade dengan menggunakan pendekatan Vite --}}
        {{-- <img class="img-thumbnail" src="{{ Vite::asset('resources/images/profileimages.jpg') }}" alt="image">
    </div>  --}}
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <!-- <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li> -->
              <li class="nav-item">
                <a class="nav-link disabled" aria-disabled="true">Disabled</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <section>
        <div class="container">
            <div class="profile">
           <img
           class="rounded-circle profileimages"
           {{-- src="assets/images/profileimages.jpg" --}}
           src="{{ Vite::asset('resources/images/profileimages.jpg') }}"
           alt="">
           <h2>Tuhfah Fairuzia Zahirah Ramdhani</h2>
           <h4>Mahasiswa Sistem Informasi</h4>
        </div>
        </div>
      </section>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#f3f4f5" fill-opacity="1.2" d="M0,192L48,170.7C96,149,192,107,288,112C384,117,480,171,576,192C672,213,768,203,864,170.7C960,139,1056,85,1152,53.3C1248,21,1344,11,1392,5.3L1440,0L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
      </path>
    </svg>
    <section class="biodata">
        <h1 class="text-center">BIODATA</h1>
        <div class="container text-center">
            <div class="row">
              <div class="col">hai everyone. perkenalkan namaku Tuhfah Fairuzia Zahirah Ramdhani. Saat ini saya mahasiswa semester 4 di Telkom University Surabaya. </div>
              <div class="col">
                <div class="btn-group-vertical" role="group" aria-label="Vertical button group">

                    <button type="button" class="btn btn-primary"> SDN rungkut menanggal I</button>
                        <button type="button" class="btn btn-primary">SMPN 19 Surabaya</button>
                    <button type="button" class="btn btn-primary"> SMAS 19 Agustus Surabaya
                    </button>
                    <button type="button" class="btn btn-primary">Telkom University Surabaya</button>
                  </div>

            </div>
              <div class="col">saya dari mahasiswa SISTEM INFORMASI. mata kuliah semester 4 ini adalah framework. dimana mata kuliah ini menggunakan laravel.</div>
            </div>
          </div>
    </section>
    <section class="achievement">
        <div class="container">
            <h1 style="color:white" class="text-center">PENGALAMAN</h1>
            <div class="container text-center">
                <div class="row">
                  <div class="col ">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                          <h5 class="card-title">MPK</h5>
                          <!-- <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6> -->
                          <p class="card-text"></p>
                          <!-- <a href="#" class="card-link">Card link</a>
                          <a href="#" class="card-link">Another link</a> -->
                        </div>
                      </div>
                  </div>
                  <div class="col">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                          <h5 class="card-title">osis</h5>
                          <!-- <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6> -->
                          <p class="card-text"></p>
                          <!-- <a href="#" class="card-link">Card link</a>
                          <a href="#" class="card-link">Another link</a> -->
                        </div>
                      </div>
                  </div>
                  <div class="col">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                          <h5 class="card-title">paduan suara</h5>
                          <!-- <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6> -->
                          <p class="card-text"></p>
                          <!-- <a href="#" class="card-link">Card link</a>
                          <a href="#" class="card-link">Another link</a> -->
                        </div>
                      </div>
                  </div>
                </div>
              </div>
        </div>

    </section>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#000b76" fill-opacity="1.2" d="M0,128L48,144C96,160,192,192,288,181.3C384,171,480,117,576,106.7C672,96,768,128,864,165.3C960,203,1056,245,1152,261.3C1248,277,1344,267,1392,261.3L1440,256L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
    </path>
</svg>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <div class="text-center text-sm text-gray-500 dark:text-gray-400 sm:text-right sm:ml-0">
        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
    </div>
  </body>
</html>

