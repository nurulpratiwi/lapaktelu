@section('title', 'Jual')
@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Posting Produk</title>

    <!--- Style Eksternal -->
    <link rel="stylesheet" href="style/pos_produk.css" />

    <!--Font Eksternal-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Montserrat:wght@100;300;400;500;600;700&family=Quicksand:wght@400;700&display=swap"
        rel="stylesheet" />

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>
<!-- POSTING PRODUK -->

<body style="padding-top: 70px;">
    <!-- nav bar -->
    <nav class="navbar navbar-expand-lg fixed-top" style="background-color: #3570d6">
        <div class=" container-fluid justify-content-center">
            <!-- logo -->
            <a class="navbar-brand d-flex ps-4" href="home_profile.html">
                <img src="img/logo-lapak-telu.png" alt="" width="60" />
            </a>

            <div class="d-flex flex-column">
                <a class="text-white fs-5 fw-bold text-start text-decoration-none" href="home_profile.html">
                    LAPAK TEL-U
                </a>
            </div>

            <!-- navbar tonggle -->
            <button class="navbar-toggler shadow-none border-0" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- sidebar -->
            <div class="sidebar offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <!-- sidebar header -->
                <div class="offcanvas-header text-white border-bottom">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">
                        LAPAK TELU
                    </h5>
                    <button type="button" class="btn-close btn-close-white shadow-none" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>

                <!-- sidebar body -->
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-center align-item-center flex-grow-1 pe-3">
                        <form role="search">
                            <div class="input-group my-3">
                                <button class="input-group-text">
                                    <img src="img/icon-cari.png" alt="" />
                                </button>
                                <input class="form-control" type="text" placeholder="Cari" />
                            </div>
                        </form>
                    </ul>
                    <div class="d-flex justify-content-center gap-3 pe-4">
                        <a href="profile_penjual.html" class="text-white text-decoration-none px-4 py-2">
                            <img src="img/user.png" alt="" width="50px" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- CONTENT -->
    <div class="container-flex justify-content-center align-items-center pt-5" style="padding: 70px 70px 0px 70px;">
        <div class="row">
            <div class="col-md-6 justify-content-center align-items-center">
                <form action="/store" method="POST">
                    @csrf
                    <div class="form-group mb-3">
                        <label>Nama Produk <span>*</span></label>
                        <input class="form-control" placeholder="Masukan Nama Produk" name="nama"
                            value="{{ isset($data) ? $data->nama : '' }}" />
                    </div>

                    <div class="form-group mb-3">
                        <label class="form-label">Deskripsi Produk <span>*</span></label>
                        <textarea class="form-control" placeholder="Masukkan Deskripsi Produk" rows="3"
                            name="deskripsi">{{ isset($data) ? $data->deskripsi : '' }}</textarea>
                    </div>
                    <div class="form-group mb-3">
                        <label>Kategori Produk <span>*</span></label>
                        <select class="form-select " aria-label="Default select example" name="kategori">
                            <option value="{{ isset($data)?$data->kategori:'' }}" selected>Pilih Kategori</option>
                            <option value="Pakaian Pria">Pakaian Pria</option>
                            <option value="Pakaian Wanita">Pakaian Wanita</option>
                            <option value="Sepatu">Sepatu</option>
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <label>Harga Produk <span>*</span></label>
                        <input type="number" class="form-control " placeholder="Masukan Harga Produk" name="harga"
                            value="{{ isset($data)?$data->harga:'' }}" />
                    </div>

                    <div class="form-group mb-3">
                        <label>Kondisi</label>
                        <select class="form-select " aria-label="Default select example" name="kondisi">
                            <option value="{{ isset($data)?$data->kondisi:'' }}" selected>Pilih Kondisi</option>
                            <option value="Seperti Baru">Seperti Baru</option>
                            <option value="Ada Sedikit Kecacatan">Ada Sedikit Kecacatan</option>
                            <option value="Layak Digunakan">Layak Digunakan</option>
                        </select>
                    </div>
                    <input type="submit" value="Submit" class="btn btn-primary w-100 mt-3">
                </form>










            </div>
            <div class="col-md-6 justify-content-center align-items-center">
                <div class="fotovideo">
                    <label>Foto/Video <span>*</span></label>
                    <input type="file" accept="image/*, video/*" id="uploadFile" style="display: none"
                        name="fotoOrvideo" value="{{ isset($data)?$data->fotoOrvideo:'' }}" />
                    <label for="uploadFile"
                        class="input-file d-flex form-control justify-content-center align-items-center">+ Tambah Foto
                        dan Video</label>
                </div>
                <div class="mt-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                    <label class="form-check-label" for="exampleCheck1">*Semua yang diisi telah sesuai</label>
                </div>
                <a href="{{ url('/store') }}" type="submit" class="btn btn-primary w-100 mt-3">Submit</a>
            </div>
        </div>
    </div>



    </div>
    </div>
    <!-- Footer -->
    <footer class="text-center text-lg-start bg-light text-muted">
        <!-- Section: Links  -->
        <section class="container-fluid" style="background-color: #3570d6">
            <div class="container text-center text-white text-md-start mt-5 pt-2">
                <!-- Grid row -->
                <div class="row mt-3">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <!-- Content -->
                        <img src="img/logo-lapak-telu.png" alt="" width="40%" class="img-fluid mb-3" />
                        <p class="fs-2">Lapak Tel-U</p>
                        <p>
                            Lapak Telkom University merupakan website penyedia forum jual
                            beli untuk membantu menjualbelikan barang bekas
                            (second/preloved) bagi seluruh civitas akademik Telkom
                            University, Bandung.
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">Layanan</h6>
                        <p>
                            <a href="#!" class="text-reset text-decoration-none">Jual</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset text-decoration-none">Beli</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset text-decoration-none">Tanya</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset text-decoration-none">Saran</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">Link</h6>
                        <p>
                            <a href="#!" class="text-reset text-decoration-none">About Us</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset text-decoration-none">Settings</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset text-decoration-none">Pesanan</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset text-decoration-none">Bantuan</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">Kontak</h6>
                        <p><i class="fas fa-home me-3"></i>TULT Lantai 6</p>
                        <p>
                            <i class="fas fa-envelope me-3"></i>
                            info@lapaktelu.com
                        </p>
                        <p><i class="fas fa-phone me-3"></i> + 221 476373</p>
                        <p><i class="fas fa-print me-3"></i> + 221 834980</p>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </div>
        </section>
        <!-- Section: Links  -->

        <!-- Copyright -->
        <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05)">
            © 2023 Copyright:
            <a class="text-reset fw-bold" href="#">www.lapaktelu.com</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js">
    </script>
</body>

</html>