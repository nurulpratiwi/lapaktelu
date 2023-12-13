@extends('layouts.main')
@section('title', 'Admin')
@section('content')
  <div class=" mt-5 pt-5">
    <div class="container d-flex justify-content-center">
      <a href="#" class="btn btn-primary m-3" id="showRequests">Permintaan</a>
      <a href="#" class="btn btn-outline-primary m-3" id="showConfirmed">Terkonfirmasi</a>
      <a href="#" class="btn btn-outline-primary m-3" id="showReview">Tinjau Kembali</a>
    </div>
  </div>
  <div class="container">
  <table class="table">
      <thead>
          <tr>
              <th>No Produk</th>
              <th>Nama</th>
              <th>Deskripsi</th>
              <th>Harga</th>
              <th>Kategori</th>
              <th>Kondisi</th>
              <th>Penjual</th>
              <th>Gambar</th>
              <th>Konfirmasi</th>
          </tr>
      </thead>
      <tbody>
          @foreach(App\Models\Produk::all() as $product)
              <tr>
                  <td>{{ $product->id }}</td>
                  <td>{{ $product->nama }}</td>
                  <td>{{ $product->deskripsi }}</td>
                  <td>{{ $product->harga }}</td>
                  <td>{{ $product->kategori->name }}</td>
                  <td>{{ $product->kondisi->name }}</td>
                  <td>{{ $product->user->username }}</td>
                  <td>
                      <a href="{{ asset('images/' . $product->gambar) }}" target="_blank">Lihat Gambar</a>
                  </td>
                  <td>
                      <form action="{{ route('admin.confirm.product', $product->id) }}" method="post">
                          @csrf
                          <button type="submit">Konfirmasi</button>
                      </form>
                  </td>
              </tr>
          @endforeach
      </tbody>
  </table>
</div>
<form action="{{ route('logout') }}" method="POST">
  @csrf
  <button type="submit">Logout</button>
</form>

@endsection




{{--  <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home - Lapak Tel-U</title>

    <!--- Style Eksternal -->
    <link rel="stylesheet" href="style/home_page.css" />
    <link rel="stylesheet" href="js/script.js" />

    <!--Font Eksternal-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Montserrat:wght@100;300;400;500;600;700&family=Quicksand:wght@400;700&display=swap"
      rel="stylesheet"
    />

    <!-- Bootstrap 5 -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />

    <!--Font Awesome-->
    <script
      src="https://kit.fontawesome.com/e718798741.js"
      crossorigin="anonymous"
    ></script>

    <!--Style-->
    <style></style>

    <!--Jquery-->

    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>

    <!-- Latest compiled and minified CSS -->
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
    />

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <script src="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
  </head>
  <body>
    <!-- navigasi bar -->
    <nav class="justify-content-between navbar p-3">
      <div class="container-fluid">
        <!-- setting tulisan lapak telu dan logo -->
        <a
          class="navbar-brand fw-bold px-4"
          href="#"
          style="color: white; font-family: sans-serif"
        >
          <img src="img/logo-lapak-telu.png" alt="Logo" width="60" />
          LAPAK TEL-U
        </a>
        <!-- Say hello -->
        <h4 class="text-white">Hello, Admin Lapak Tel-U</h4>
        <!-- setting upload dan masuk -->
        <div class="button px-5">
          <button
            id="btnMasuk"
            class="btn btn-light fw-bold"
            style="
              padding-inline: 30px;
              color: #3570d6;
              font-family: sans-serif;
            "
          >
            Admin
          </button>
        </div>
      </div>
    </nav>
    <div class="content">
      <div class="container d-flex justify-content-center m-3">
        <a href="#" class="btn btn-primary m-3" id="showRequests">Permintaan</a>
        <a href="#" class="btn btn-outline-primary m-3" id="showConfirmed"
          >Terkonfirmasi</a
        >
        <a href="#" class="btn btn-outline-primary m-3" id="showReview"
          >Tinjau Kembali</a
        >
      </div>

      <!------------------------------------------------------- Permintaan -------------------------------------------------------------->
      <div class="container" id="requestsTable">
        <table class="table table-striped data">
          <thead>
            <tr>
              <th scope="col">Usrname Account</th>
              <th scope="col">Nama Produk</th>
              <th scope="col" style="width: 20%">Deskripsi Produk</th>
              <th scope="col">Kategori</th>
              <th scope="col">Harga</th>
              <th scope="col">Kondisi</th>
              <th scope="col">Foto/Video</th>
              <th scope="col">Status</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Kiwil Syahputra</td>
              <td>Baju</td>
              <td>
                Sepatu keren tidak ketinggalan zaman, harga sesuai kualitas
              </td>
              <td>Sepatu</td>
              <td>Rp. 2,000,000</td>
              <td>Baik Sekali</td>
              <td></td>
              <td>
                <a href="#" class="btn btn-primary">Confirm</a>
                <a href="#" class="btn btn-danger">Tolak</a>
              </td>
            </tr>
            <tr>
              <td>Kiwil Syahputra</td>
              <td>Sepatu Nike</td>
              <td>
                Sepatu keren tidak ketinggalan zaman, harga sesuai kualitas
              </td>
              <td>Sepatu</td>
              <td>Rp. 2,000,000</td>
              <td>Baik Sekali</td>
              <td></td>
              <td>
                <a href="#" class="btn btn-primary">Confirm</a>
                <a href="#" class="btn btn-danger">Tolak</a>
              </td>
            </tr>
            <tr>
              <td>Kiwil Syahputra</td>
              <td>Sepatu Nike</td>
              <td>
                Sepatu keren tidak ketinggalan zaman, harga sesuai kualitas
              </td>
              <td>Sepatu</td>
              <td>Rp. 2,000,000</td>
              <td>Baik Sekali</td>
              <td></td>
              <td>
                <a href="#" class="btn btn-primary">Confirm</a>
                <a href="#" class="btn btn-danger">Tolak</a>
              </td>
            </tr>
            <tr>
              <td>Kiwil Syahputra</td>
              <td>Sepatu Nike</td>
              <td>
                Sepatu keren tidak ketinggalan zaman, harga sesuai kualitas
              </td>
              <td>Sepatu</td>
              <td>Rp. 2,000,000</td>
              <td>Baik Sekali</td>
              <td></td>
              <td>
                <a href="#" class="btn btn-primary">Confirm</a>
                <a href="#" class="btn btn-danger">Tolak</a>
              </td>
            </tr>
            <tr>
              <td>Kiwil Syahputra</td>
              <td>Sepatu Nike</td>
              <td>
                Sepatu keren tidak ketinggalan zaman, harga sesuai kualitas
              </td>
              <td>Sepatu</td>
              <td>Rp. 2,000,000</td>
              <td>Baik Sekali</td>
              <td></td>
              <td>
                <a href="#" class="btn btn-primary">Confirm</a>
                <a href="#" class="btn btn-danger">Tolak</a>
              </td>
            </tr>
            <tr>
              <td>Kiwil Syahputra</td>
              <td>Sepatu Nike</td>
              <td>
                Sepatu keren tidak ketinggalan zaman, harga sesuai kualitas
              </td>
              <td>Sepatu</td>
              <td>Rp. 2,000,000</td>
              <td>Baik Sekali</td>
              <td></td>
              <td>
                <a href="#" class="btn btn-primary">Confirm</a>
                <a href="#" class="btn btn-danger">Tolak</a>
              </td>
            </tr>
            <tr>
              <td>Kiwil Syahputra</td>
              <td>Sepatu Nike</td>
              <td>
                Sepatu keren tidak ketinggalan zaman, harga sesuai kualitas
              </td>
              <td>Sepatu</td>
              <td>Rp. 2,000,000</td>
              <td>Baik Sekali</td>
              <td></td>
              <td>
                <a href="#" class="btn btn-primary">Confirm</a>
                <a href="#" class="btn btn-danger">Tolak</a>
              </td>
            </tr>
            <tr>
              <td>Kiwil Syahputra</td>
              <td>Sepatu Nike</td>
              <td>
                Sepatu keren tidak ketinggalan zaman, harga sesuai kualitas
              </td>
              <td>Sepatu</td>
              <td>Rp. 2,000,000</td>
              <td>Baik Sekali</td>
              <td></td>
              <td>
                <a href="#" class="btn btn-primary">Confirm</a>
                <a href="#" class="btn btn-danger">Tolak</a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>

      <!----------------------------------------------------- Terkonfirmasi --------------------------------------------------------->

      <div class="container" id="confirmedContent" style="display: none">
        <table class="table table-striped data">
          <thead>
            <tr>
              <th scope="col">Usrname Account</th>
              <th scope="col">Nama Produk</th>
              <th scope="col" style="width: 20%">Deskripsi Produk</th>
              <th scope="col">Kategori</th>
              <th scope="col">Harga</th>
              <th scope="col">Kondisi</th>
              <th scope="col">Foto/Video</th>
              <th scope="col">Status</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Kiwil Syahputra</td>
              <td>Sepatu Nike</td>
              <td>
                Sepatu keren tidak ketinggalan zaman, harga sesuai kualitas
              </td>
              <td>Sepatu</td>
              <td>Rp. 2,000,000</td>
              <td>Baik Sekali</td>
              <td></td>
              <td>
                <a href="#" class="btn btn-primary">Confirm</a>
              </td>
            </tr>
            <tr>
              <td>Kiwil Syahputra</td>
              <td>Sepatu Nike</td>
              <td>
                Sepatu keren tidak ketinggalan zaman, harga sesuai kualitas
              </td>
              <td>Sepatu</td>
              <td>Rp. 2,000,000</td>
              <td>Baik Sekali</td>
              <td></td>
              <td>
                <a href="#" class="btn btn-primary">Confirm</a>
              </td>
            </tr>
            <tr>
              <td>Kiwil Syahputra</td>
              <td>Sepatu Nike</td>
              <td>
                Sepatu keren tidak ketinggalan zaman, harga sesuai kualitas
              </td>
              <td>Sepatu</td>
              <td>Rp. 2,000,000</td>
              <td>Baik Sekali</td>
              <td></td>
              <td>
                <a href="#" class="btn btn-primary">Confirm</a>
              </td>
            </tr>
            <tr>
              <td>Kiwil Syahputra</td>
              <td>Sepatu Nike</td>
              <td>
                Sepatu keren tidak ketinggalan zaman, harga sesuai kualitas
              </td>
              <td>Sepatu</td>
              <td>Rp. 2,000,000</td>
              <td>Baik Sekali</td>
              <td></td>
              <td>
                <a href="#" class="btn btn-primary">Confirm</a>
              </td>
            </tr>
            <tr>
              <td>Kiwil Syahputra</td>
              <td>Sepatu Nike</td>
              <td>
                Sepatu keren tidak ketinggalan zaman, harga sesuai kualitas
              </td>
              <td>Sepatu</td>
              <td>Rp. 2,000,000</td>
              <td>Baik Sekali</td>
              <td></td>
              <td>
                <a href="#" class="btn btn-primary">Confirm</a>
              </td>
            </tr>
            <tr>
              <td>Kiwil Syahputra</td>
              <td>Sepatu Nike</td>
              <td>
                Sepatu keren tidak ketinggalan zaman, harga sesuai kualitas
              </td>
              <td>Sepatu</td>
              <td>Rp. 2,000,000</td>
              <td>Baik Sekali</td>
              <td></td>
              <td>
                <a href="#" class="btn btn-primary">Confirm</a>
              </td>
            </tr>
            <tr>
              <td>Kiwil Syahputra</td>
              <td>Sepatu Nike</td>
              <td>
                Sepatu keren tidak ketinggalan zaman, harga sesuai kualitas
              </td>
              <td>Sepatu</td>
              <td>Rp. 2,000,000</td>
              <td>Baik Sekali</td>
              <td></td>
              <td>
                <a href="#" class="btn btn-primary">Confirm</a>
              </td>
            </tr>
            <tr>
              <td>Kiwil Syahputra</td>
              <td>Sepatu Nike</td>
              <td>
                Sepatu keren tidak ketinggalan zaman, harga sesuai kualitas
              </td>
              <td>Sepatu</td>
              <td>Rp. 2,000,000</td>
              <td>Baik Sekali</td>
              <td></td>
              <td>
                <a href="#" class="btn btn-primary">Confirm</a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>

      <!---------------------------------------------- Tinjau Kembali --------------------------------------------------------------->

      <!-- Permintaan -->
      <div class="container" id="reviewContent" style="display: none">
        <table class="table table-striped data">
          <thead>
            <tr>
              <th scope="col">Usrname Account</th>
              <th scope="col">Nama Produk</th>
              <th scope="col" style="width: 20%">Deskripsi Produk</th>
              <th scope="col">Kategori</th>
              <th scope="col">Harga</th>
              <th scope="col">Kondisi</th>
              <th scope="col">Foto/Video</th>
              <th scope="col">Status</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Kiwil Syahputra</td>
              <td>Sepatu Nike</td>
              <td>
                Sepatu keren tidak ketinggalan zaman, harga sesuai kualitas
              </td>
              <td>Sepatu</td>
              <td>Rp. 2,000,000</td>
              <td>Baik Sekali</td>
              <td></td>
              <td>
                <a href="#" class="btn btn-primary">Confirm</a>
                <a href="#" class="btn btn-danger">Tolak</a>
              </td>
            </tr>
            <tr>
              <td>Kiwil Syahputra</td>
              <td>Sepatu Nike</td>
              <td>
                Sepatu keren tidak ketinggalan zaman, harga sesuai kualitas
              </td>
              <td>Sepatu</td>
              <td>Rp. 2,000,000</td>
              <td>Baik Sekali</td>
              <td></td>
              <td>
                <a href="#" class="btn btn-primary">Confirm</a>
                <a href="#" class="btn btn-danger">Tolak</a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <script>
      const showRequestsButton = document.getElementById("showRequests");
      const showConfirmedButton = document.getElementById("showConfirmed");
      const showReviewButton = document.getElementById("showReview");
      const requestsTable = document.getElementById("requestsTable");
      const confirmedContent = document.getElementById("confirmedContent");
      const reviewContent = document.getElementById("reviewContent");

      showRequestsButton.addEventListener("click", () => {
        requestsTable.style.display = "block";
        confirmedContent.style.display = "none";
        reviewContent.style.display = "none";
        showRequestsButton.classList.replace(
          "btn-outline-primary",
          "btn-primary"
        );
        showConfirmedButton.classList.replace(
          "btn-primary",
          "btn-outline-primary"
        );
        showReviewButton.classList.replace(
          "btn-primary",
          "btn-outline-primary"
        );
      });

      showConfirmedButton.addEventListener("click", () => {
        requestsTable.style.display = "none";
        confirmedContent.style.display = "block";
        reviewContent.style.display = "none";
        showConfirmedButton.classList.replace(
          "btn-outline-primary",
          "btn-primary"
        );
        showRequestsButton.classList.replace(
          "btn-primary",
          "btn-outline-primary"
        );

        showReviewButton.classList.replace(
          "btn-primary",
          "btn-outline-primary"
        );
      });

      showReviewButton.addEventListener("click", () => {
        requestsTable.style.display = "none";
        confirmedContent.style.display = "none";
        reviewContent.style.display = "block";
        showReviewButton.classList.replace(
          "btn-outline-primary",
          "btn-primary"
        );
        showConfirmedButton.classList.replace(
          "btn-primary",
          "btn-outline-primary"
        );
        showRequestsButton.classList.replace(
          "btn-primary",
          "btn-outline-primary"
        );
      });

      $(document).ready(function () {
        $(".data").DataTable();
      });
    </script>
  </body>
</html>  --}}
