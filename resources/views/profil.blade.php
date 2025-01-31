@extends('layouts.main')
@section('judul', "Profil")
@section('content')
<div class="container-fluid mt-5 d-flex col-md-12 pt-5">
      <div class="row">
        <div class="d-flex flex-column col-md-4 flex-shrink-0 p-3 text-white" style="width: 270px; margin-left: 10%; height: 65vh; border-radius: 10px; border: 1px solid #d8d8d8; background: #fff; color: black">

          <ul class="nav nav-pills flex-column">
            <li class="d-flex justify-content-center">
              <img src="{{ asset('images/' . Auth::user()->fotoProfil) }}" alt="" width="117" height="122" />
            </li>

            <li class="d-flex justify-content-center">
              <a href="#" class="nav-link link-dark p-1" style="font-size: 20px">{{Auth::user()->namalengkap}}</a>
            </li>

            <li class="d-flex justify-content-center">
              <a href="#" class="nav-link link-dark p-1" style="font-size: 14px">{{Auth::user()->username}}</a>
            </li>

            <li class="d-flex justify-content-center">
              <a href="#" class="nav-link link-dark p-1" style="font-size: 14px">{{Auth::user()->alamat}}</a>
            </li>

            <li class="nav-item">
              <a href="editProfil.html" class="nav-link link-dark ps-0" aria-current="page">
                
                Edit Profil
              </a>
            </li>
            <li>
              <a href="produk_tersimpan.html" class="nav-link link-dark ps-0">
                
                Tersimpan
              </a>
            </li>
            <li>
              <a href="home_page.html" class="nav-link link-dark ps-0" data-bs-toggle="modal" data-bs-target="#logout">
                
                Logout
              </a>
            </li>
          </ul>
          <hr />
        </div>
      </div>
      <div class="container-fluid col-md-8 justify-content-start">
        <h2>List Barang</h2>
        <div class="d-flex">
          <div class="produk-item">
            <div class="card m-3" style="width: 18rem">
              <img src="img/sepatu.png" class="card-img-top" alt="" />
              <div class="card-body">
                <h3 class="card-title">Sepatu Adidas</h3>
                <div class="d-flex justify-content-between">
                  <p class="card-text">Rp250.000</p>
                  <a href="edit_Produk.html" class="bi bi-pencil-fill" style="text-decoration: none"> Edit</a>
                </div>
              </div>
            </div>
          </div>

          <div class="produk-item">
            <div class="card m-3" style="width: 18rem">
              <img src="img/sepatu-bekas.png" class="card-img-top" alt="" />
              <div class="card-body">
                <h3 class="card-title">Sepatu</h3>
                <div class="d-flex justify-content-between">
                  <p class="card-text">Rp200.000</p>
                  <a href="" class="bi bi-pencil-fill" style="text-decoration: none"> Edit</a>
                </div>
              </div>
            </div>
          </div>

          <div class="produk-item">
            <div class="card m-3" style="width: 18rem">
              <img src="img/panci-listrik.png" class="card-img-top" alt="" />
              <div class="card-body">
                <h3 class="card-title">Panci Listrik</h3>
                <div class="d-flex justify-content-between">
                  <p class="card-text">Rp150.000</p>
                  <a href="" class="bi bi-pencil-fill" style="text-decoration: none"> Edit</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection