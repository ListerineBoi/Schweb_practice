<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>App Name - @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <link href="/fontawesome/css/fontawesome.css" rel="stylesheet">
    <link href="/fontawesome/css/solid.css" rel="stylesheet">
    <link href="/css/font.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark " style="background-color:#162455">
        <div class=" container-xxl">
           
            <div class="row mx-0 col-lg-12">
                <div class="d-flex me-auto col-lg-3 my-2 my-lg-0">
                    <h6 class="me-4 text-light">  <i class="fa-solid fa-envelope"></i> <u>abc@email.com</u> </h6>
                    <h6 class="text-light">  <i class="fa-sharp fa-solid fa-phone"></i> 021665876</h6>
                </div>
                <div class="d-flex col-lg-4 ms-lg-1 ps-lg-5 pe-lg-0">
                    <h6 class="text-light">  <i class="fa-solid fa-calendar-days"></i> Operational Hour: Mon-Sat 7.30 AM - 4 PM  </h6>
                </div>
            </div>
        </div>
    </nav>

      <nav class="navbar navbar-expand-lg navbar-dark " style="background-color:#F9C94E">
        <div class="container-xxl">
            <div class="container col-md-4">
                <a class="navbar-brand" href="#">
                <img src="/img/logo.png" alt="Bootstrap" width="80" height="80">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
                data-bs-target="#navbarScroll" aria-controls="navbarScroll" 
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            </div>            
            <div class="col-md-5 collapse navbar-collapse Poppins offset-lg-2" id="navbarScroll">
                <ul class="navbar-nav my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                    <li class="nav-item">
                        <a class="nav-link active fs-4" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active fs-4" aria-current="page" href="#">Pengumuman</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active fs-4" aria-current="page" href="#">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active fs-4" aria-current="page" href="#">Artikel</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active fs-4" aria-current="page" href="#">Galeri</a>
                    </li>
                </ul>
            </div>
        </div>
        
      </nav>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>