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
    <link href="/css/img-overlay.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css' rel='stylesheet'>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#162455">
        <div class="container-xxl">
           
            <div class="row mx-0 col-xl-12 col-lg-12">
                <div class="d-flex me-auto col-xl-3 col-lg-4 my-2 my-xl-0 offset-xxl-0 offset-xl-1">
                    <h6 class="me-4 text-light">  <i class="fa-solid fa-envelope me-lg-2"></i> <u>abc@email.com</u> </h6>
                    <h6 class="text-light">  <i class="fa-sharp fa-solid fa-phone me-lg-2"></i> 021665876</h6>
                </div>
                <div class="d-flex col-xl-4 col-lg-5 offset-xxl-1 pe-xxl-0">
                    <h6 class="ps-xxl-5 ps-xl-4 ps-lg-5 ms-xl-0 ms-xxl-0 mb-lg-0 pt-lg-2 text-light">  <i class="fa-solid fa-calendar-days ps-xxl-4 me-xxl-2"></i> Operational Hour: Mon-Sat 7.30 AM - 4 PM  </h6>
                </div>
            </div>
        </div>
    </nav>

      <nav class="navbar navbar-expand-lg navbar-dark " style="background-color:#F9C94E">
        <div class="container-xxl">
            <div class="row mx-0 col-xl-12 col-lg-12">
                <div class="d-flex col-xl-4 col-lg-4 offset-xxl-0 offset-xl-1 offset-lg-1">
                    <a class="navbar-brand" href="#">
                    <img src="/img/logo.png" alt="Bootstrap" width="80" height="80">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
                    data-bs-target="#navbarScroll" aria-controls="navbarScroll" 
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                </div>            
                <div class="d-flex col-xl-5 col-lg-5 collapse navbar-collapse Poppins ps-xxl-4 offset-xxl-2 ps-xl-5 offset-xl-0" id="navbarScroll">
                    <ul class="navbar-nav ms-xl-3 my-2 my-xxl-0 navbar-nav-scroll ps-xl-5" style="--bs-scroll-height: 100px;">
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
        </div>
        
      </nav>


    <main>
        @yield('content')
    </main>
    <footer>
        <div class="container-fluid px-xxl-0 px-xl-0">
            <div class="col-xxl-12 col-xl-12 col-lg-12 py-xxl-5 py-xl-5 row mx-xxl-0 mx-xl-0 justify-content-center" style="background-color: #162455">
                <div class="col-xxl-2 py-xxl-5 col-xl-2">
                    <div class="container">
                        <img src="/img/logo.png" alt="Bootstrap" class="mx-auto d-none d-xxl-block" width="250rem" height="250rem">
                        <img src="/img/logo.png" alt="Bootstrap" class="mx-auto d-none d-xl-block d-xxl-none" width="165rem" height="165rem">
                    </div>
                    <div class="container">
                        <p class="Poppins-bold fs-4 mb-0 text-light  text-center d-none d-xxl-block" >SMA ABC.</p>
                        <p class="Poppins-bold fs-5 mb-0 text-light  text-center d-none d-xxl-block" >Lorem ipsum dolor sit amet, consectetur adipiscing elit..</p>
                        <p class="Poppins-bold fs-5 mb-0 text-light  text-center d-none d-xl-block d-xxl-none" >SMA ABC.</p>
                        <p class="Poppins-bold fs-6 mb-0 text-light  text-center d-none d-xl-block d-xxl-none" ><small>Lorem ipsum dolor sit amet, consectetur adipiscing elit..</small></p>
                    </div>
                </div>
                <div class="col-xxl-2 offset-xxl-4 py-xxl-5 col-xl-2 offset-xl-4">
                    <h1 class="Poppins-bold display-5 mb-5 text-light d-none d-xxl-block" >GENERAL</h1>
                    <h1 class="Poppins-bold fs-2 mb-5 text-light d-none d-xl-block d-xxl-none" >GENERAL</h1>
                    <p class="text-justify">
                        <a href="/#" class="text-light Poppins fs-3">Home</a>
                    </p>
                    <p class="text-justify">
                        <a href="/#" class="text-light Poppins fs-3">Pengumuman</a>
                    </p>
                    <p class="text-justify">
                        <a href="/#" class="text-light Poppins fs-3">Profil</a>
                    </p>
                    <p class="text-justify">
                        <a href="/#" class="text-light Poppins fs-3">Artikel</a>
                    </p>
                    <p class="text-justify">
                        <a href="/#" class="text-light Poppins fs-3">Galery</a>
                    </p>
                </div>
                <div class="col-xxl-2 col-xl-2 ms-xxl-0 ms-xl-5 py-xxl-5">
                    <h1 class="Poppins-bold display-5 mb-5 text-light d-none d-xxl-block" >Contact</h1>
                    <h1 class="Poppins-bold fs-2 mb-5 text-light d-none d-xl-block d-xxl-none" >Contact</h1>
                    <p class="text-justify">
                        <a href="/#" class="text-light Poppins fs-3">Contact</a>
                    </p>
                </div>
                 
            </div>
            <div class="col-xxl-12 col-xl-12 py-xxl-3 py-xl-3 row mx-xxl-0 mx-xl-0 justify-content-center" style="background-color: #0C1534">
                <h1 class="Poppins-bold fs-3 text-light text-center mb-xl-0" >2022 Copyright: Crossdev</h1>
            </div>
        </div>
    </footer>
</body>
</html>