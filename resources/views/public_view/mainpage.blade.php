 @extends('layouts.navbar')
 
@section('title', 'Main Page')
 
@section('content')
    <link href='https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.css' rel='stylesheet' />
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.js'></script>
    
    

    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/img/Carousel.png" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
  
    <div class="col-xl-12 row justify-content-center pb-xl-2 mb-xl-0 mx-xl-0 mt-xl-0 mt-lg-5">
        <div class="col-xl-7 mt-xl-5 mb-lg-5 ">
            <div class="col-xl-12">
                <h1 class="Poppins-bold text-center display-2 mb-5 d-none d-xxl-block" style="color: #162455"> Kalender Akademik</h1>
                <h1 class="Poppins-bold text-center display-5 mb-5 d-none d-lg-block d-xxl-none" style="color: #162455"> Kalender Akademik</h1>
                <div class="col-xxl-7 col-xl-9 col-lg-9 mx-auto">
                    <div id='calendar'></div>
                </div>
            </div>
        </div>
        <div class="col-xl-5 " style="background-color: #402E32">
            <h1 class="Poppins-bold text-center display-2 mb-5 mt-xl-5 d-none d-xxl-block" style="color: #FFC36B">Pengumuman</h1>
            <h1 class="Poppins-bold text-center display-5 mb-5 mt-xl-5 d-none d-lg-block d-xxl-none mt-xl-0 mt-lg-5" style="color: #FFC36B">Pengumuman</h1>
            <div class="row">
                <div class="col-xl-10 col-lg-10 pb-xl-5 mx-auto">
                    <div data-bs-spy="scroll"  data-bs-smooth-scroll="true" class="scrollspy-example " style="min-height: 35rem;" tabindex="0">
                        <div class="list-group Poppins">
                            <a href="#" class="list-group-item list-group-item-action py-xl-5 mb-xl-3" aria-current="true">
                                <div class="d-flex w-100 justify-content-between">
                                    <h3 class="mb-1 text-danger Poppins-bold">Pengumuman 1</h3>
                                    <small>3 days ago</small>
                                </div>
                                <h5 class="mb-1 Poppins-bold">Kamis, 12 September 2022</h5>
                                <small>And some small print.</small>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action py-xl-5 mb-xl-3">
                                <div class="d-flex w-100 justify-content-between">
                                    <h3 class="mb-1 text-danger Poppins-bold">Pengumuman 1</h3>
                                    <small>3 days ago</small>
                                </div>
                                <h5 class="mb-1 Poppins-bold">Kamis, 12 September 2022</h5>
                                <small>And some small print.</small>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action py-xl-5 mb-xl-3">
                                <div class="d-flex w-100 justify-content-between">
                                    <h3 class="mb-1 text-danger Poppins-bold">Pengumuman 1</h3>
                                    <small>3 days ago</small>
                                </div>
                                <h5 class="mb-1 Poppins-bold">Kamis, 12 September 2022</h5>
                                <small>And some small print.</small>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action py-xl-5 mb-xl-3">
                                <div class="d-flex w-100 justify-content-between">
                                    <h3 class="mb-1 text-danger Poppins-bold">Pengumuman 1</h3>
                                    <small>3 days ago</small>
                                </div>
                                <h5 class="mb-1 Poppins-bold">Kamis, 12 September 2022</h5>
                                <small>And some small print.</small>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-12 col-lg-12 py-xxl-5 py-xl-1 py-lg-5 mx-lg-0 row justify-content-center" style="background-color: #FFEECA">
        <div class="col-xxl-3 offset-xxl-0 offset-xl-1 col-xl-2 py-xl-5 col-lg-2 ">
            <div class="container mx-auto pt-xl-5 pt-xxl-5">
                <img src="/img/logo.png" class="d-none d-xxl-block" alt="Bootstrap" width="300rem" height="300rem">
                <img src="/img/logo.png" class="d-none d-xl-block d-xxl-none" alt="Bootstrap" width="165rem" height="165rem">
                <img src="/img/logo.png" class="d-none d-lg-block d-xl-none" alt="Bootstrap" width="130rem" height="130rem">
            </div>
            
        </div>
        <div class="col-xxl-5 col-xl-7 col-lg-7 offset-xxl-1 offset-xl-2 offset-lg-1 ps-xxl-0 ps-xl-5 py-xl-5">
            <h1 class="Poppins-bold display-1 mb-5 d-none d-xxl-block" style="color: #162455"> Profile Sekolah</h1>
            <h1 class="Poppins-bold display-4 mb-3 d-none d-xl-block d-xxl-none" style="color: #162455"> Profile Sekolah</h1>
            <h1 class="Poppins-bold display-6 mb-3 d-none d-lg-block d-xl-none" style="color: #162455"> Profile Sekolah</h1>
            <p class="Poppins-bold fs-3 ms-xl-2 d-none d-xxl-block" style="color: #162455">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie, dictum est a, mattis tellus. Sed dignissim, metus nec 
                fringilla accumsan, risus sem sollicitudin lacus, ut interdum tellus elit sed risus. Maecenas eget condimentum velit.</p>
            <p class="Poppins-bold fs-5 ms-xl-1 d-none d-xl-block d-xxl-none" style="color: #162455">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie, dictum est a, mattis tellus. Sed dignissim, metus nec 
                fringilla accumsan, risus sem sollicitudin lacus, ut interdum tellus elit sed risus. Maecenas eget condimentum velit.</p>
            <p class="Poppins-bold fs-6 ms-xl-1 d-none d-lg-block d-xl-none" style="color: #162455">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie, dictum est a, mattis tellus. Sed dignissim, metus nec 
                fringilla accumsan, risus sem sollicitudin lacus, ut interdum tellus elit sed risus. Maecenas eget condimentum velit.</p>
                <a name="" id="" class="btn btn-primary Poppins-bold fs-5" style="background-color: #162455; outline-color: #162455" href="#" role="button">Selanjutnya</a>
        </div> 
    </div>
    <div class="col-xl-12 py-lg-5  mx-xl-0 row justify-content-center" style="background-color: #B4AA99">
        <div class="col-xl-12 col-xl-12 pt-xl-3 row justify-content-center">
            <h1 class="Poppins-bold display-3 text-light col-xl-9 d-none d-xxl-block"> Artikel</h1>
            <h1 class="Poppins-bold display-6 text-light col-xl-9 me-xl-1 offset-xl-0 offset-lg-1 d-none d-lg-block d-xl-block d-xxl-none"> Artikel</h1>
            <div class="col-xl-1 d-none d-xl-block d-xxl-none"></div>
            <p class="Poppins fs-4 text-light col-xl-9 d-none d-xxl-block" >Publikasi artikel oleh staff dan guru SMA ABC.</p>
            <p class="Poppins fs-4 text-light col-xl-9 d-none offset-xl-0 offset-lg-1 d-lg-block d-xl-block d-xxl-none" >Publikasi artikel oleh staff dan guru SMA ABC.</p>
            <div class="col-xl-1 d-none d-xl-block d-xxl-none"></div>
            <div class="col-xl-11 col-lg-11 row row-cols-1 row-cols-md-3 gx-xxl-5 gx-xl-5 justify-content-center">
                <div class="col-xxl-3 col-xl-4">
                  <div class="card h-100">
                    <img src="/img/card2.png" class="card-img-top" alt="...">
                    <div class="card-body pb-xxl-5 pb-xl-1">
                        <h3 class="mb-1 Poppins-bold" style="color: #162455">Pengumuman 1</h3>
                        <h6 class="mb-1 Poppins-bold">Kamis, 12 September 2022 - Agus Riyadi P. S.Pd</h6>
                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                    <div class="d-flex"><a name="" id="" class="btn btn-primary Poppins col-xl-3 m-xl-2 col-lg-3 m-lg-2" href="#" role="button">lihat</a>
                        <i class="fa-regular fa-share-nodes fa-2xl mt-xl-4 offset-xl-7 mt-lg-4 offset-lg-6"></i>
                    </div>
                    <div class="card-footer">
                      <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                  </div>
                </div>
                <div class="col-xxl-3 col-xl-4">
                  <div class="card h-100">
                    <img src="/img/card1.png" class="card-img-top" alt="...">
                    <div class="card-body pb-xxl-5 pb-xl-1">
                        <h3 class="mb-1 Poppins-bold" style="color: #162455">Pengumuman 1</h3>
                        <h6 class="mb-1 Poppins-bold">Kamis, 12 September 2022 - Agus Riyadi P. S.Pd</h6>
                      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                    </div>
                    <div class="d-flex"><a name="" id="" class="btn btn-primary Poppins col-xl-3 m-xl-2 col-lg-3 m-lg-2" href="#" role="button">lihat</a>
                        <i class="fa-regular fa-share-nodes fa-2xl mt-xl-4 offset-xl-7 mt-lg-4 offset-lg-6"></i>
                    </div>
                    <div class="card-footer">
                      <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                  </div>
                </div>
                <div class="col-xxl-3 col-xl-4">
                  <div class="card h-100">
                    <img src="/img/card2.png" class="card-img-top" alt="...">
                    <div class="card-body pb-xxl-5 pb-xl-1">
                        <h3 class="mb-1 Poppins-bold" style="color: #162455">Pengumuman 1</h3>
                        <h6 class="mb-1 Poppins-bold">Kamis, 12 September 2022 - Agus Riyadi P. S.Pd</h6>
                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                    </div>
                    <div class="d-flex"><a name="" id="" class="btn btn-primary Poppins col-xl-3 m-xl-2 col-lg-3 m-lg-2" href="#" role="button">lihat</a>
                        <i class="fa-regular fa-share-nodes fa-2xl mt-xl-4 offset-xl-7 mt-lg-4 offset-lg-6"></i>
                    </div>
                    <div class="card-footer">
                      <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                  </div>
                </div>
              </div>
        </div> 
    </div>
    <div class="col-xl-12 py-lg-5 mx-xl-0 row justify-content-center" style="background-color: #FFEECA">
        <div class="col-xl-12 pt-xl-3 row justify-content-center">
            <h1 class="Poppins-bold display-3 col-xl-9 d-none d-xxl-block" style="color: #162455"> Galeri Kegiatan</h1>
            <h1 class="Poppins-bold display-6 col-xl-9 me-xl-1 offset-xl-0 offset-lg-1 d-none d-lg-block d-xl-block d-xxl-none" style="color: #162455"> Galeri Kegiatan</h1>
            <div class="col-xl-1 d-none d-xl-block d-xxl-none"></div>
            <p class="Poppins fs-4 col-xl-9 d-none d-xxl-block" style="color: #162455">Publikasi kegiatan oleh staff dan guru SMA ABC.</p>
            <p class="Poppins fs-4 col-xl-9 offset-xl-0 offset-lg-1 d-none d-lg-block d-xl-block d-xxl-none" style="color: #162455">Publikasi kegiatan oleh staff dan guru SMA ABC.</p>
            <div class="col-xl-1 d-none d-xl-block d-xxl-none"></div>
            <div class="col-xxl-12 col-xl-11 col-lg-11 row row-cols-1 row-cols-md-3 gx-xxl-5 gx-xl-5 justify-content-center mb-xxl-5">
                <div class="col-xxl-3 col-xl-4">
                    <div class="card text-bg-dark">
                        <img src="/img/gal1.png" class="card-img" alt="...">
                        <div class="card-img-overlay pb-xl-0 pt-xl-5 overlay-dark">
                            <h5 class="card-title Poppins-bold fs-4 mb-xl-0 pt-xl-5 mt-xxl-5 d-none d-xxl-block">17 Agustus 2022</h5>
                            <h5 class="card-title Poppins-bold fs-6 mb-lg-0 pt-lg-5 mt-xxl-5 d-none d-lg-block d-xl-block d-xxl-none">17 Agustus 2022</h5>
                            <p class="card-text Poppins mb-xl-0">Galeri Upacara 17 Agustus 2022</p>
                            <p class="card-text Poppins d-none d-xl-block d-xxl-block"><small>oleh: STAFF DOKUMENTASI OSIS SMA ABC</small></p>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-4">
                    <div class="card text-bg-dark">
                        <img src="/img/gal2.png" class="card-img" alt="...">
                        <div class="card-img-overlay pb-xl-0 pt-xl-5 overlay-dark">
                            <h5 class="card-title Poppins-bold fs-4 mb-xl-0 pt-xl-5 mt-xxl-5 d-none d-xxl-block">17 Agustus 2022</h5>
                            <h5 class="card-title Poppins-bold fs-6 mb-lg-0 pt-lg-5 mt-xxl-5 d-none d-lg-block d-xl-block d-xxl-none">17 Agustus 2022</h5>
                            <p class="card-text Poppins mb-xl-0">Galeri Upacara 17 Agustus 2022</p>
                            <p class="card-text Poppins d-none d-xl-block d-xxl-block"><small>oleh: STAFF DOKUMENTASI OSIS SMA ABC</small></p>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-4">
                    <div class="card text-bg-dark">
                        <img src="/img/gal3.png" class="card-img" alt="...">
                        <div class="card-img-overlay pb-xl-0 pt-xl-5 overlay-dark">
                            <h5 class="card-title Poppins-bold fs-4 mb-xl-0 pt-xl-5 mt-xxl-5 d-none d-xxl-block">17 Agustus 2022</h5>
                            <h5 class="card-title Poppins-bold fs-6 mb-lg-0 pt-lg-5 d-none d-lg-block d-xl-block d-xxl-none">17 Agustus 2022</h5>
                            <p class="card-text Poppins mb-lg-0">Galeri Upacara 17 Agustus 2022</p>
                            <p class="card-text Poppins d-none d-xl-block d-xxl-block"><small>oleh: STAFF DOKUMENTASI OSIS SMA ABC</small></p>
                        </div>
                    </div>
                </div>
              </div>
        </div> 
    </div>



    <script>

        document.addEventListener('DOMContentLoaded', function() {
          var calendarEl = document.getElementById('calendar');
          var calendar = new FullCalendar.Calendar(calendarEl, {
            themeSystem: 'bootstrap5',
            initialView: 'dayGridMonth',
          });
          calendar.render();
        });
  
      </script>
@endsection