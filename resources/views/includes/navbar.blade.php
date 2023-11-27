<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container-fluid justify-content-center">
            <!-- logo -->
            <a class="navbar-brand d-flex ps-4" href="#">
                <img href="#" src="img/group-296.png" alt="" width="60">
            </a>

            <div class="d-flex flex-column">
                <a class="text-white fs-5 fw-bold text-start text-decoration-none" href="">
                    LAPAK TEL-U
                </a>
            </div>

            <!-- navbar tonggle -->
            <button class="navbar-toggler shadow-none border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- sidebar -->
            <div class="sidebar offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <!-- sidebar header -->
                <div class="offcanvas-header text-white border-bottom">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">LAPAK TELU</h5>
                    <button type="button" class="btn-close btn-close-white shadow-none" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>

                <!-- sidebar body -->
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-center align-item-center flex-grow-1 pe-3">
                        <form role="search">
                            <div class="input-group">
                                <button class="input-group-text"><img src="img/material-symbols-search.png" alt=""></button>
                                <input class="form-control" type="text" placeholder="Cari">
                            </div>
                        </form>                      
                    </ul>
                    <div class="d-flex justify-content-center gap-3 pe-4" >

                        <a href="" class="text-white text-decoration-none px-3 py-2">
                            Upload
                        </a>
                        <a href="" class="text-white text-decoration-none px-4 py-2" id="upload-login">
                            Login
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</body>
</html>