<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>PPDB</title>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('foodwagon/public/assets/img/favicons/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('foodwagon/public/assets/img/favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('foodwagon/public/assets/img/favicons/favicon-16x16.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('foodwagon/public/assets/img/favicons/favicon.ico') }}">
    <link rel="manifest" href="{{ asset('foodwagon/public/assets/img/favicons/manifest.json') }}">
    <meta name="msapplication-TileImage" content="{{ asset('foodwagon/public/assets/img/favicons/mstile-150x150.png') }}">
    <meta name="theme-color" content="#ffffff">


    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="{{ asset('foodwagon/public/assets/css/theme.css') }}" rel="stylesheet" />

    <style>
        .bg-header {
            background: linear-gradient(270deg, rgba(2, 0, 36, 1) 0%, rgba(87, 115, 166, 1) 53%, rgba(173, 147, 39, 0.7399334733893557) 100%);
        }

        .text-header {
            background: linear-gradient(90deg, rgba(226, 226, 226, 1) 0%, rgba(67, 163, 255, 1) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
    </style>

</head>


<body>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" data-navbar-on-scroll="data-navbar-on-scroll">
            <div class="container"><a class="navbar-brand d-inline-flex" href="index.html"><img class="d-inline-block" src="https://methodist2.sch.id/assets/umum/images/favicon.png" alt="logo" width="50" height="50" /><span class="text-1000 fs-3 fw-bold me-5 text-black">Methodist-2 Palembang</span></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"> </span></button>
                <div class="collapse navbar-collapse border-top border-lg-0 my-2 mt-lg-0" id="navbarSupportedContent">
                    <div class="mx-auto pt-5 pt-lg-0 d-block d-lg-none d-xl-block">
                    </div>
                    <form class="d-flex mt-4 mt-lg-0 ms-lg-auto ms-xl-0">
                        <div class="input-group-icon pe-2">
                        </div>
                        @if(auth()->check())
                        <a class="btn btn-white shadow-warning text-black" href="{{ route('home') }}"> <i class="fas fa-user me-2"></i>Go to Dashboard</a>
                        @else
                        <a class="btn btn-white shadow-warning text-black" href="{{ route('login') }}"> <i class="fas fa-user me-2"></i>Login</a>
                        @endif
                    </form>
                </div>
            </div>
        </nav>
        <section class="py-5 overflow-hidden bg-header" id="home">
            <div class="container">
                <div class="row flex-center">
                    <div class="col-md-5 col-lg-6 order-0 order-md-1 mt-0"><a class="" href="#"><img class="img-fluid" src="https://meth2.methodist2.sch.id/assets/umum/images/why/foto_gedung.JPG" alt="hero-header" /></a></div>
                    <div class="col-md-7 col-lg-6 py-8 text-md-start text-center">
                        <h1 class="display-1 fs-md-5 fs-lg-6 fs-xl-8 text-light">METODHIST 2</h1>
                        <h4 class="mb-3">⚲ PALEMBANG</h4>
                        <h1 class="text-800 mb-5 fs-4 text-header">Sekolah dengan tingkat pendidikan tinggi<br class="d-none d-xxl-block" />Segara daftar!</h1>
                        <div class="card w-xxl-75">
                            <div class="card-body">
                                <div class="tab-content mt-3" id="nav-tabContent">
                                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                        <form class="row gx-2 gy-2 align-items-center">
                                            <div class="col">
                                                <a href="#" class="btn btn-dark d-block d-block mb-5 w-50 mx-auto">DAFTAR SEKARANG</a>
                                            </div>
                                        </form>
                                    </div>
                                    <nav>
                                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                            <button class="nav-link active mx-auto" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true"><i class="#"></i>📖 PENDAFTARAN</button>
                                            <button class="nav-link mx-auto" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false"><i class="#"></i>☏ KONTAK KAMI</button>
                                        </div>
                                    </nav>
                                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                        <form class="row gx-4 gy-2 align-items-center">
                                            <div class="col">
                                                <div class="input-group-icon"><i class="#"></i>
                                                    <label class="visually-hidden" for="inputPickup">Telepon</label>
                                                </div>
                                            </div>
                                            <div class="container text-center">
                                                <div class="row">
                                                    <div class="col btn btn-grey text-dark me-2">
                                                        9292929
                                                    </div>
                                                    <div class="col-4 btn btn-danger me-5">
                                                        Hubungi
                                                    </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="py-0">

            <div class="container">
                <div class="row h-100">
                    <div class="col-lg-7 mx-auto text-center mt-7 mb-5">
                        <h5 class="fw-bold fs-3 fs-lg-5 lh-sm">Mengapa harus Methodist-2 Palembang?</h5>
                    </div>

                    <div class="row h-100 gx-2 mt-3">
                        <div class="col-sm-6 col-lg-3 mb-3 mb-md-0 h-100 pb-4">
                            <div class="card card-span h-100">
                                <div class="position-relative"> <img class="img-fluid rounded-3 w-100" src="https://meth2.methodist2.sch.id/assets/umum/images/why/foto_gedung.JPG" alt="..." />
                                    <div class="card-actions">
                                        <div class="badge badge-foodwagon p-4">
                                            <div class="d-flex flex-between-center">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body px-0">
                                    <h5 class="fw-bold text-1000 text-truncate text-center">TEMPAT YANG STRATEGIS <br>KARENA BERADA DI PUSAT KOTA</h5><span class="badge bg-soft-danger py-2 px-3"></span>
                                </div><a class="stretched-link" href="#"></a>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3 mb-3 mb-md-0 h-100 pb-4">
                            <div class="card card-span h-100">
                                <div class="position-relative"> <img class="img-fluid rounded-3 w-100" src="https://meth2.methodist2.sch.id/assets/umum/images/why/allTingkatan.jpg" alt="..." />
                                    <div class="card-actions">
                                        <div class="badge badge-foodwagon p-4">
                                            <div class="d-flex flex-between-center">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body px-0">
                                    <h5 class="fw-bold text-1000 text-truncate text-center">TERSEDIANYA 5 JENJANG PENDIDIKAN <br> YAITU TK SD SMP SMK DAN SMK</h5><span class="badge bg-soft-danger py-2 px-3"></span>
                                </div><a class="stretched-link" href="#"></a>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3 mb-3 mb-md-0 h-100 pb-4">
                            <div class="card card-span h-100">
                                <div class="position-relative"> <img class="img-fluid rounded-3 w-100" src="https://meth2.methodist2.sch.id/assets/umum/images/why/bakat.jpg" alt="..." />
                                    <div class="card-actions">
                                        <div class="badge badge-foodwagon p-4">
                                            <div class="d-flex flex-between-center">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body px-0">
                                    <h5 class="fw-bold text-1000 text-truncate text-center">PERCAYA BAHWA SETIAP ANAK <br> MEMILIKI POTENSI & KEMEMPUAN <br> YANG BERBEDA BEDA</h5><span class="badge bg-soft-danger py-2 px-3"></span>
                                </div><a class="stretched-link" href="#"></a>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3 mb-3 mb-md-0 h-100 pb-4">
                            <div class="card card-span h-100">
                                <div class="position-relative"> <img class="img-fluid rounded-3 w-100" src="https://meth2.methodist2.sch.id/assets/umum/images/why/3fondasi.jpg" alt="..." />
                                    <div class="card-actions">
                                        <div class="badge badge-foodwagon p-4">
                                            <div class="d-flex flex-between-center">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body px-0">
                                    <h5 class="fw-bold text-1000 text-truncate text-center">MEMILIKI 3 PONDASI PENDIDIKAN <br>YAITU AKADEMIK KARAKTER KREATIVITAS</h5><span class="badge bg-soft-danger py-2 px-3"></span>
                                </div><a class="stretched-link" href="#"></a>
                            </div>
                        </div>
                    </div>
                </div><!-- end of .container-->

        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->




        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="py-0 bg-primary-gradient">

            <div class="container">
                <div class="row justify-content-center g-0">
                    <div class="col-xl-9">
                        <div class="col-lg-6 text-center mx-auto mb-3 mb-md-5 mt-4">
                            <h5 class="fw-bold text-danger fs-3 fs-lg-5 lh-sm my-6">Cara melakukan pendaftaran</h5>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-md-3 mb-6">
                                <div class="text-center"><img class="shadow-icon" src="https://w7.pngwing.com/pngs/639/449/png-transparent-computer-icons-website-icon-text-globe-symmetry-thumbnail.png" height="112" alt="..." />
                                    <h5 class="mt-4 fw-bold">Buka Website</h5>
                                    <p class="mb-md-0">Buka website pendartaran Methodist-2 Palembang</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3 mb-6">
                                <div class="text-center"><img class="shadow-icon" src="https://w7.pngwing.com/pngs/725/728/png-transparent-form-others-angle-text-photography-thumbnail.png" height="112" alt="..." />
                                    <h5 class="mt-4 fw-bold">Formulir pendaftaran</h5>
                                    <p class="mb-md-0">Mengisi fomulir pendaftaran sesuai dengan identitas diri</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3 mb-6">
                                <div class="text-center"><img class="shadow-icon" src="https://w7.pngwing.com/pngs/134/205/png-transparent-process-project-logo-others-orange-computer-team.png" height="112" alt="..." />
                                    <h5 class="mt-4 fw-bold">Proses</h5>
                                    <p class="mb-md-0">Formulir yang sudah dikirim akan segera di proses oleh pihak sekolah</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3 mb-6">
                                <div class="text-center"><img class="shadow-icon" src="https://img2.pngdownload.id/20180525/zva/kisspng-information-policy-logo-library-5b07b4abaeda23.5730021215272316597162.jpg" height="112" alt="..." />
                                    <h5 class="mt-4 fw-bold">Informasi</h5>
                                    <p class="mb-md-0">Pihak sekolah akan menginformasikan pendartaran yang diajukan</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- end of .container-->

        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->




        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="py-4 overflow-hidden">

            <div class="container">
                <div class="row h-100">
                    <div class="col-lg-7 mx-auto text-center mt-7 mb-5">
                        <h5 class="fw-bold fs-3 fs-lg-5 lh-sm">Fasilitas apa yang didapat?</h5>
                    </div>
                    <div class="col-12">
                        <div class="carousel slide" id="carouselPopularItems" data-bs-touch="false" data-bs-interval="false">
                            <div class="carousel-inner">
                                <div class="carousel-item active" data-bs-interval="10000">
                                    <div class="row gx-3 h-100 align-items-center">
                                        <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                                            <div class="card card-span h-100 rounded-3"><img class="img-fluid rounded-3 h-100" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTaiCtStQuxZ64kjRd10dHhUkgWkjzqoXp00w&usqp=CAU" alt="..." />
                                                <div class="card-body ps-0">
                                                    <h5 class="fw-bold text-1000 text-truncate mb-1 text-center">LAB KOMPUTER</h5>
                                                    <div><span class="text-dark text-center">Mempunyai lab komputer yang lemhkap dengan leptop dan innternetnya</span></div>
                                                </div>
                                            </div>
                                            <div class="d-grid gap-2"><a href="#!" role="button"></a></div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                                            <div class="card card-span h-100 rounded-3"><img class="img-fluid rounded-3 h-100" src="https://lh3.googleusercontent.com/proxy/NAJZh3ynHhqOTnaydvI6ktHPmyNcG5U9hJRj_Q5Lclu9IL6Plqv47wv16M5oLCURCpn_IdwSzDodYqRCzBNEqMPz8VyH2r4ec556wiJ9efzOdz5Ui4Xg-xcRUmE4raWvZKCZYFazXw" alt="..." />
                                                <div class="card-body ps-0">
                                                    <h5 class="fw-bold text-1000 text-truncate mb-1 text-center">WESLEY KITCHEN</h5>
                                                    <div><span class="text-dark text-center">Mempunyai wesley kitchen yang lengkap dengan kompor serta beberapa peralatan</span></div>
                                                </div>
                                            </div>
                                            <div class="d-grid gap-2"><a href="#!" role="button"></a></div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                                            <div class="card card-span h-100 rounded-3"><img class="img-fluid rounded-3 h-100" src="https://dispusip.pekanbaru.go.id/wp-content/uploads/2017/02/perpustakaan-yang-nyaman.jpg" alt="..." />
                                                <div class="card-body ps-0">
                                                    <h5 class="fw-bold text-1000 text-truncate mb-1 text-center">PERPUSTAKAAN</h5>
                                                    <div><span class="text-dark text-center">Mempunyai perpustakaan yang lengkap dengan buku buku pembelajaran</span></div>
                                                </div>
                                            </div>
                                            <div class="d-grid gap-2"><a href="#!" role="button"></a></div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div><!-- end of .container-->

        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->


        <section id="testimonial">
            <div class="container">
                <div class="row h-100">
                    <div class="col-lg-7 mx-auto text-center mb-6">
                        <h5 class="fw-bold fs-3 fs-lg-5 lh-sm mb-3">PRESTASI & PENGHARGAAN TERBARU</h5>
                    </div>
                </div>
                <div class="row gx-2">
                    <div class="col-sm-6 col-md-4 col-lg-3 h-100 mb-5">
                        <div class="card card-span h-100 text-white rounded-3"><img class="img-fluid rounded-3 h-100" src="https://methodist2.sch.id/assets/umum/images/prestasi/380851085_3442883102617672_383958165258395709_n.jpg" alt="..." />
                            <div class="card-img-overlay ps-0"></span></div>
                            <div class="card-body ps-0">
                                <div class="d-flex align-items-center mb-3">
                                </div><span class="badge bg-soft-danger p-2"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 h-100 mb-5">
                        <div class="card card-span h-100 text-white rounded-3"><img class="img-fluid rounded-3 h-100" src="https://meth2.methodist2.sch.id/assets/umum/images/prestasi/318019717_467429798878284_8064154061742008778_n.jpg" alt="..." />
                            <div class="card-img-overlay ps-0"></span></div>
                            <div class="card-body ps-0">
                                <div class="d-flex align-items-center mb-3">
                                </div><span class="badge bg-soft-danger p-2"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 h-100 mb-5">
                        <div class="card card-span h-100 text-white rounded-3"><img class="img-fluid rounded-3 h-100" src="https://meth2.methodist2.sch.id/assets/umum/images/prestasi/334333812_1154160995259205_1435665119317611025_n_(1).jpg" alt="..." />
                            <div class="card-img-overlay ps-0"></span></div>
                            <div class="card-body ps-0">
                                <div class="d-flex align-items-center mb-3">
                                </div><span class="badge bg-soft-danger p-2"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 h-100 mb-5">
                        <div class="card card-span h-100 text-white rounded-3"><img class="img-fluid rounded-3 h-100" src="https://methodist2.sch.id/assets/umum/images/prestasi/383770344_1244524782879425_4690165458142440881_n.jpg" alt="..." />
                            <div class="card-img-overlay ps-0"></span></div>
                            <div class="card-body ps-0">
                                <div class="d-flex align-items-center mb-3">
                                </div><span class="badge bg-soft-danger p-2"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 h-100 mb-5">
                        <div class="card card-span h-100 text-white rounded-3"><img class="img-fluid rounded-3 h-100" src="https://methodist2.sch.id/assets/umum/images/prestasi/386373540_2228487717341832_9110610395021806609_n.jpg" alt="..." />
                            <div class="card-img-overlay ps-0"></span></div>
                            <div class="card-body ps-0">
                                <div class="d-flex align-items-center mb-3">
                                </div><span class="badge bg-soft-danger p-2"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 h-100 mb-5">
                        <div class="card card-span h-100 text-white rounded-3"><img class="img-fluid rounded-3 h-100" src="https://methodist2.sch.id/assets/umum/images/prestasi/377263022_790337536221149_5382831023480852232_n.jpg" alt="..." />
                            <div class="card-img-overlay ps-0"></span></div>
                            <div class="card-body ps-0">
                                <div class="d-flex align-items-center mb-3">
                                </div><span class="badge bg-soft-danger p-2"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 h-100 mb-5">
                        <div class="card card-span h-100 text-white rounded-3"><img class="img-fluid rounded-3 h-100" src="https://methodist2.sch.id/assets/umum/images/prestasi/359737222_1637842900049935_6886609647074730956_n.jpg" alt="..." />
                            <div class="card-img-overlay ps-0"></span></div>
                            <div class="card-body ps-0">
                                <div class="d-flex align-items-center mb-3">
                                </div><span class="badge bg-soft-danger p-2"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 h-100 mb-5">
                        <div class="card card-span h-100 text-white rounded-3"><img class="img-fluid rounded-3 h-100" src="https://methodist2.sch.id/assets/umum/images/prestasi/350716690_612675950840010_782795245349584535_n.jpg" alt="..." />
                            <div class="card-img-overlay ps-0"></span></div>
                            <div class="card-body ps-0">
                                <div class="d-flex align-items-center mb-3">
                                </div><span class="badge bg-soft-danger p-2"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 d-flex justify-content-center mt-5"> <a class="btn btn-lg btn-primary" href="#!">View All <i class="fas fa-chevron-right ms-2"> </i></a></div>
                </div>
            </div>
        </section>


        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="py-8 overflow-hidden">

            <div class="container">
                <div class="row flex-center mb-6">
                    <div class="col-lg-7">
                        <h5 class="fw-bold fs-3 fs-lg-5 lh-sm text-center text-lg-start">GURU & KARYAWAN</h5>
                    </div>
                    <div class="col-lg-4 text-lg-end text-center"><a class="btn btn-lg text-800 me-2" href="#" role="button">VIEW ALL <i class="fas fa-chevron-right ms-2"></i></a></div>
                    <div class="col-lg-auto position-relative">
                        <button class="carousel-control-prev s-icon-prev carousel-icon" type="button" data-bs-target="#carouselSearchByFood" data-bs-slide="prev"><span class="carousel-control-prev-icon hover-top-shadow" aria-hidden="true"></span><span class="visually-hidden">Previous</span></button>
                        <button class="carousel-control-next s-icon-next carousel-icon" type="button" data-bs-target="#carouselSearchByFood" data-bs-slide="next"><span class="carousel-control-next-icon hover-top-shadow" aria-hidden="true"></span><span class="visually-hidden">Next</span></button>
                    </div>
                </div>
                <div class="row flex-center">
                    <div class="col-12">
                        <div class="carousel slide" id="carouselSearchByFood" data-bs-touch="false" data-bs-interval="false">
                            <div class="carousel-inner">
                                <div class="carousel-item active" data-bs-interval="10000">
                                    <div class="row h-100 align-items-center">
                                        <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                                            <div class="card card-span h-100 rounded-circle"><img class="img-fluid rounded-circle h-100" src="{{ asset('foodwagon/public/assets/img/gallery/search-pizza.png') }}" alt="..." />
                                                <div class="card-body ps-0">
                                                    <h5 class="text-center fw-bold text-1000 text-truncate mb-2">pizza</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                                            <div class="card card-span h-100 rounded-circle"><img class="img-fluid rounded-circle h-100" src="{{ asset('foodwagon/public/assets/img/gallery/burger.png') }}" alt="..." />
                                                <div class="card-body ps-0">
                                                    <h5 class="text-center fw-bold text-1000 text-truncate mb-2">Burger</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                                            <div class="card card-span h-100 rounded-circle"><img class="img-fluid rounded-circle h-100" src="{{ asset('foodwagon/public/assets/img/gallery/noodles.png') }}" alt="..." />
                                                <div class="card-body ps-0">
                                                    <h5 class="text-center fw-bold text-1000 text-truncate mb-2">Noodles</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                                            <div class="card card-span h-100 rounded-circle"><img class="img-fluid rounded-circle h-100" src="{{ asset('foodwagon/public/assets/img/gallery/sub-sandwich.png') }}" alt="..." />
                                                <div class="card-body ps-0">
                                                    <h5 class="text-center fw-bold text-1000 text-truncate mb-2">Sub-sandwiches</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                                            <div class="card card-span h-100 rounded-circle"><img class="img-fluid rounded-circle h-100" src="{{ asset('foodwagon/public/assets/img/gallery/chowmein.png') }}" alt="..." />
                                                <div class="card-body ps-0">
                                                    <h5 class="text-center fw-bold text-1000 text-truncate mb-2">Chowmein</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                                            <div class="card card-span h-100 rounded-circle"><img class="img-fluid rounded-circle h-100" src="{{ asset('foodwagon/public/assets/img/gallery/steak.png') }}" alt="..." />
                                                <div class="card-body ps-0">
                                                    <h5 class="text-center fw-bold text-1000 text-truncate mb-2">Steak</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item" data-bs-interval="5000">
                                    <div class="row h-100 align-items-center">
                                        <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                                            <div class="card card-span h-100 rounded-circle"><img class="img-fluid rounded-circle h-100" src="{{ asset('foodwagon/public/assets/img/gallery/search-pizza.png') }}" alt="..." />
                                                <div class="card-body ps-0">
                                                    <h5 class="text-center fw-bold text-1000 text-truncate mb-2">pizza</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                                            <div class="card card-span h-100 rounded-circle"><img class="img-fluid rounded-circle h-100" src="{{ asset('foodwagon/public/assets/img/gallery/burger.png') }}" alt="..." />
                                                <div class="card-body ps-0">
                                                    <h5 class="text-center fw-bold text-1000 text-truncate mb-2">Burger</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                                            <div class="card card-span h-100 rounded-circle"><img class="img-fluid rounded-circle h-100" src="{{ asset('foodwagon/public/assets/img/gallery/noodles.png') }}" alt="..." />
                                                <div class="card-body ps-0">
                                                    <h5 class="text-center fw-bold text-1000 text-truncate mb-2">Noodles</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                                            <div class="card card-span h-100 rounded-circle"><img class="img-fluid rounded-circle h-100" src="{{ asset('foodwagon/public/assets/img/gallery/sub-sandwich.png') }}" alt="..." />
                                                <div class="card-body ps-0">
                                                    <h5 class="text-center fw-bold text-1000 text-truncate mb-2">Sub-sandwiches</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                                            <div class="card card-span h-100 rounded-circle"><img class="img-fluid rounded-circle h-100" src="{{ asset('foodwagon/public/assets/img/gallery/chowmein.png') }}" alt="..." />
                                                <div class="card-body ps-0">
                                                    <h5 class="text-center fw-bold text-1000 text-truncate mb-2">Chowmein</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                                            <div class="card card-span h-100 rounded-circle"><img class="img-fluid rounded-circle h-100" src="{{ asset('foodwagon/public/assets/img/gallery/steak.png') }}" alt="..." />
                                                <div class="card-body ps-0">
                                                    <h5 class="text-center fw-bold text-1000 text-truncate mb-2">Steak</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item" data-bs-interval="3000">
                                    <div class="row h-100 align-items-center">
                                        <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                                            <div class="card card-span h-100 rounded-circle"><img class="img-fluid rounded-circle h-100" src="{{ asset('foodwagon/public/assets/img/gallery/search-pizza.png') }}" alt="..." />
                                                <div class="card-body ps-0">
                                                    <h5 class="text-center fw-bold text-1000 text-truncate mb-2">pizza</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                                            <div class="card card-span h-100 rounded-circle"><img class="img-fluid rounded-circle h-100" src="{{ asset('foodwagon/public/assets/img/gallery/burger.png') }}" alt="..." />
                                                <div class="card-body ps-0">
                                                    <h5 class="text-center fw-bold text-1000 text-truncate mb-2">Burger</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                                            <div class="card card-span h-100 rounded-circle"><img class="img-fluid rounded-circle h-100" src="{{ asset('foodwagon/public/assets/img/gallery/noodles.png') }}" alt="..." />
                                                <div class="card-body ps-0">
                                                    <h5 class="text-center fw-bold text-1000 text-truncate mb-2">Noodles</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                                            <div class="card card-span h-100 rounded-circle"><img class="img-fluid rounded-circle h-100" src="{{ asset('foodwagon/public/assets/img/gallery/sub-sandwich.png') }}" alt="..." />
                                                <div class="card-body ps-0">
                                                    <h5 class="text-center fw-bold text-1000 text-truncate mb-2">Sub-sandwiches</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                                            <div class="card card-span h-100 rounded-circle"><img class="img-fluid rounded-circle h-100" src="{{ asset('foodwagon/public/assets/img/gallery/chowmein.png') }}" alt="..." />
                                                <div class="card-body ps-0">
                                                    <h5 class="text-center fw-bold text-1000 text-truncate mb-2">Chowmein</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                                            <div class="card card-span h-100 rounded-circle"><img class="img-fluid rounded-circle h-100" src="{{ asset('foodwagon/public/assets/img/gallery/steak.png') }}" alt="..." />
                                                <div class="card-body ps-0">
                                                    <h5 class="text-center fw-bold text-1000 text-truncate mb-2">Steak</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row h-100 align-items-center">
                                        <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                                            <div class="card card-span h-100 rounded-circle"><img class="img-fluid rounded-circle h-100" src="{{ asset('foodwagon/public/assets/img/gallery/search-pizza.png') }}" alt="..." />
                                                <div class="card-body ps-0">
                                                    <h5 class="text-center fw-bold text-1000 text-truncate mb-2">pizza</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                                            <div class="card card-span h-100 rounded-circle"><img class="img-fluid rounded-circle h-100" src="{{ asset('foodwagon/public/assets/img/gallery/burger.png') }}" alt="..." />
                                                <div class="card-body ps-0">
                                                    <h5 class="text-center fw-bold text-1000 text-truncate mb-2">Burger</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                                            <div class="card card-span h-100 rounded-circle"><img class="img-fluid rounded-circle h-100" src="{{ asset('foodwagon/public/assets/img/gallery/noodles.png') }}" alt="..." />
                                                <div class="card-body ps-0">
                                                    <h5 class="text-center fw-bold text-1000 text-truncate mb-2">Noodles</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                                            <div class="card card-span h-100 rounded-circle"><img class="img-fluid rounded-circle h-100" src="{{ asset('foodwagon/public/assets/img/gallery/sub-sandwich.png') }}" alt="..." />
                                                <div class="card-body ps-0">
                                                    <h5 class="text-center fw-bold text-1000 text-truncate mb-2">Sub-sandwiches</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                                            <div class="card card-span h-100 rounded-circle"><img class="img-fluid rounded-circle h-100" src="{{ asset('foodwagon/public/assets/img/gallery/chowmein.png') }}" alt="..." />
                                                <div class="card-body ps-0">
                                                    <h5 class="text-center fw-bold text-1000 text-truncate mb-2">Chowmein</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                                            <div class="card card-span h-100 rounded-circle"><img class="img-fluid rounded-circle h-100" src="{{ asset('foodwagon/public/assets/img/gallery/steak.png') }}" alt="..." />
                                                <div class="card-body ps-0">
                                                    <h5 class="text-center fw-bold text-1000 text-truncate mb-2">Steak</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- end of .container-->

        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->


        <section>
            <div class="bg-holder" style="background-image:url({{ asset('foodwagon/public/assets/img/gallery/cta-one-bg.png') }});background-position:center;background-size:cover;">
            </div>
            <!--/.bg-holder-->

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xxl-10">
                        <div class="card card-span shadow-warning" style="border-radius: 35px;">
                            <div class="card-body py-5">
                                <div class="row justify-content-evenly">
                                    <div class="col-md-3">
                                        <div class="d-flex d-md-block d-xl-flex justify-content-evenly justify-content-lg-between"><img src="{{ asset('foodwagon/public/assets/img/icons/discounts.png') }}" width="100" alt="..." />
                                            <div class="d-flex d-lg-block d-xl-flex flex-center">
                                                <h2 class="fw-bolder text-1000 mb-0 text-gradient">Potongan Harga<br class="d-none d-md-block" />Pendaftaran </h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 hr-vertical">
                                        <div class="d-flex d-md-block d-xl-flex justify-content-evenly justify-content-lg-between"><img src="https://e7.pngegg.com/pngimages/142/76/png-clipart-white-and-orange-book-logo-symbol-yellow-orange-logo-ibooks-orange-logo-thumbnail.png" width="100" alt="..." />
                                            <div class="d-flex d-lg-block d-xl-flex flex-center">
                                                <h2 class="fw-bolder text-1000 mb-0 text-gradient">Pendidikan Terjamin</h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 hr-vertical">
                                        <div class="d-flex d-md-block d-xl-flex justify-content-evenly justify-content-lg-between"><img src="https://png.pngtree.com/element_our/20190602/ourmid/pngtree-public-facility-station-illustration-image_1403655.jpg" width="100" alt="..." />
                                            <div class="d-flex d-lg-block d-xl-flex flex-center">
                                                <h2 class="fw-bolder text-1000 mb-0 text-gradient">Fasilitas lengkap </h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row flex-center mt-md-8">
                    <div class="col-lg-5 d-none d-lg-block" style="margin-bottom: -122px;"> <img class="w-100" src="{{ asset('foodwagon/public/assets/img/gallery/phone-cta-one.png') }}" alt="..." /></div>
                    <div class="col-lg-5 mt-7 mt-md-0">
                        <h1 class="text-primary">Install the app</h1>
                        <p>It's never been easier to order food. Look for the finest <br class="d-none d-xl-block" />discounts and you'll be lost in a world of delectable food.</p><a class="pe-2" href="https://www.apple.com/app-store/" target="_blank"><img src="{{ asset('foodwagon/public/assets/img/gallery/app-store.svg') }}" width="160" alt="" /></a><a href="https://play.google.com/store/apps" target="_blank"><img src="{{ asset('foodwagon/public/assets/img/gallery/google-play.svg') }}" width="160" alt="" /></a>
                    </div>
                </div>
            </div>
        </section>


        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="pb-5 pt-8">

            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="card card-span mb-3 shadow-lg">
                            <div class="card-body py-0">
                                <div class="row justify-content-center">
                                    <div class="col-md-5 col-xl-7 col-xxl-8 g-0 order-0 order-md-1"><img class="img-fluid w-100 fit-cover h-100 rounded-top rounded-md-end rounded-md-top-0" src="{{ asset('foodwagon/public/assets/img/gallery/crispy-sandwiches.png') }}" alt="..." /></div>
                                    <div class="col-md-7 col-xl-5 col-xxl-4 p-4 p-lg-5">
                                        <h1 class="card-title mt-xl-5 mb-4">Best deals <span class="text-primary"> Crispy Sandwiches</span></h1>
                                        <p class="fs-1">Enjoy the large size of sandwiches. Complete your meal with the perfect slice of sandwiches.</p>
                                        <div class="d-grid bottom-0"><a class="btn btn-lg btn-primary mt-xl-6" href="#!">PROCEED TO ORDER<i class="fas fa-chevron-right ms-2"></i></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- end of .container-->

        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->




        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="py-0">

            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="card card-span mb-3 shadow-lg">
                            <div class="card-body py-0">
                                <div class="row justify-content-center">
                                    <div class="col-md-5 col-xl-7 col-xxl-8 g-0 order-md-0"><img class="img-fluid w-100 fit-cover h-100 rounded-top rounded-md-start rounded-md-top-0" src="{{ asset('foodwagon/public/assets/img/gallery/fried-chicken.png') }}" alt="..." /></div>
                                    <div class="col-md-7 col-xl-5 col-xxl-4 p-4 p-lg-5">
                                        <h1 class="card-title mt-xl-5 mb-4">Celebrate parties with <span class="text-primary">Fried Chicken</span></h1>
                                        <p class="fs-1">Get the best fried chicken smeared with a lip smacking lemon chili flavor. Check out best deals for fried chicken.</p>
                                        <div class="d-grid bottom-0"><a class="btn btn-lg btn-primary mt-xl-6" href="#!">PROCEED TO ORDER<i class="fas fa-chevron-right ms-2"></i></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- end of .container-->

        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->




        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="pt-5">

            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="card card-span mb-3 shadow-lg">
                            <div class="card-body py-0">
                                <div class="row justify-content-center">
                                    <div class="col-md-5 col-xl-7 col-xxl-8 g-0 order-0 order-md-1"><img class="img-fluid w-100 fit-cover h-100 rounded-top rounded-md-end rounded-md-top-0" src="{{ asset('foodwagon/public/assets/img/gallery/pizza.png') }}" alt="..." /></div>
                                    <div class="col-md-7 col-xl-5 col-xxl-4 p-4 p-lg-5">
                                        <h1 class="card-title mt-xl-5 mb-4">Wanna eat hot & <span class="text-primary">spicy Pizza?</span></h1>
                                        <p class="fs-1">Pair up with a friend and enjoy the hot and crispy pizza pops. Try it with the best deals.</p>
                                        <div class="d-grid bottom-0"><a class="btn btn-lg btn-primary mt-xl-6" href="#!">PROCEED TO ORDER<i class="fas fa-chevron-right ms-2"></i></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- end of .container-->

        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->


        <section class="py-0">
            <div class="bg-holder" style="background-image:url(https://yt3.googleusercontent.com/8G-Vwy7HMY_d6o9Uc8_TCIcED1s5gyTZV87plHMAnrKEWnzylOUXfWyugZGBGMXjL6pC3mWlQys=w1060-fcrop64=1,00005a57ffffa5a8-k-c0xffffffff-no-nd-rj);background-position:center;background-size:cover;">
            </div>
            <!--/.bg-holder-->

            <div class="container">
                <div class="row flex-center">
                    <div class="col-xxl-9 py-7 text-center">
                        <h1 class="fw-bold mb-4 text-white fs-6">BELAJAR DENGAN <br />METHODIST-2 PALEMBANG? </h1><a class="btn btn-danger" href="#"> DAFTAR SEKARANG!!<i class="fas fa-chevron-right ms-2"></i></a>
                    </div>
                </div>
            </div>
        </section>


        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="py-0 pt-7 bg-1000">

            <div class="container">
                <div class="container"><a class="navbar-brand d-inline-flex" href="index.html"><img class="d-inline-block" src="https://methodist2.sch.id/assets/umum/images/favicon.png" alt="logo" width="50" height="50" /><span class="text-1000 fs-3 fw-bold me-5 text-white">Methodist-2 Palembang </span></a>
                    <hr class="text-900" />
                    <div class="row">

                    </div>
                    <div class="col-12 col-md-8 col-lg-6 col-xxl-4">
                        <h5 class="lh-lg fw-bold text-500">FOLLOW US</h5>
                        <div class="text-start my-3"> <a href="#!">
                                <svg class="svg-inline--fa fa-instagram fa-w-14 fs-2 me-2" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="instagram" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <path fill="#BDBDBD" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"></path>

                                </svg></a><a href="#!">
                                <svg class="svg-inline--fa fa-facebook fa-w-16 fs-2 mx-2" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="facebook" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path fill="#BDBDBD" d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z"></path>
                                </svg></a><a href="#!">
                                <svg class="svg-inline--fa fa-twitter fa-w-16 fs-2 mx-2" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="twitter" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path fill="#BDBDBD" d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"></path>
                                </svg></a></div>
                        <div class="row input-group-icon mb-5">

                        </div>
                    </div>
                </div>
                <hr class="border border-800" />
                <div class="row flex-center pb-3">
                    <div class="col-md-6 order-0">
                        <p class="text-200 text-center">Sekolah methodist 2 Palembang &copy; 2024</p>
                    </div>

                </div>
            </div><!-- end of .container-->

        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->


    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->




    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="{{ asset('foodwagon/public/vendors/@popperjs/popper.min.js') }}"></script>
    <script src="{{ asset('foodwagon/public/vendors/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('foodwagon/public/vendors/is/is.min.js') }}"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="{{ asset('foodwagon/public/vendors/fontawesome/all.min.js') }}"></script>
    <script src="{{ asset('foodwagon/public/assets/js/theme.js') }}"></script>

    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@200;300;400;600;700;900&amp;display=swap" rel="stylesheet">
</body>

</html>