@extends('layouts.form')

@section('content')
  <div class="row">
    <div
      class="col-md-6 d-flex justify-content-center align-items-center flex-column left-box"
    >
      <div class="featured-img">
        <img src="{{'img/tokong-nanas.png'}}" class="img-fluid" />
      </div>
    </div>
    <div class="col-md-6 right-box p-5">
      <div class="row align-items-center">
        <div class="header-text mb-4 text-white text-center">
          <h2>Daftar</h2>
          <h1 class="fw-bold">LAPAK TEL-U</h1>
        </div>

        <form class="needs-validation" action="home_profile.html" method="get" novalidate>
          <div class="mb-3 text-white">
            <label for="email" class="form-label">Email</label>
            <input
              type="text"
              class="form-control p-2"
              id="email"
              required
              aria-describedby="emailHelp"
              placeholder="Masukkan email kamu"
            />
            <div class="invalid-feedback">
              Masukan email kamu
            </div>
          </div>
          <div class="mb-3 text-white">
            <label for="username" class="form-label">Username</label>
            <input
              type="text"
              class="form-control p-2"
              id="email"
              required
              aria-describedby="usernaHelp"
              placeholder="Masukkan username kamu"
            />
            <div class="invalid-feedback">
              Masukan Username kamu
            </div>
          </div>
          <div class="mb-3 text-white">
            <label for="password" class="form-label">Password</label>
            <input
              type="password"
              class="form-control p-2"
              id="password"
              required
              placeholder="Masukkan password kamu"
            />
            <div class="invalid-feedback">
              Masukan Password kamu
            </div>
          </div>
          <div class="mb-3 d-flex justify-content-end">
            <a
              href="#"
              class="lupa-password text-white text-decoration-none"
              >Lupa Password?</a
            >
          </div>
          <button
            type="submit"
            class="btn btn-primary w-100 bg-light text-primary fw-bold p-3 mt-3"
          >
            Daftar
          </button>
          <div class="option-text p-4 text-white text-center">
            <p>atau masuk dengan</p>
          </div>


          <div
            class="login-option d-flex justify-content-between text-center"
          >
            <div
              class="google-login bg-light p-2 w-100 align-items-center rounded d-flex justify-content-center align-items-center"
            >
              <img
                src="{{'img/logo-google.jpg'}}"
                class="img-fluid max-width-25"
              />
              <a
                href="#!"
                class="text-dark ml-1 text-decoration-none bg-light fw-bold"
                >Google</a
              >
            </div>
          </div>
        </form>
        <div>
          <p class="mt-3 text-white text-center">
            Sudah memiliki akun?
            <a href="{{route('login')}}" class="text-white fw-bold"
              >Masuk disini</a
            >
          </p>
        </div>
      </div>
    </div>
  </div>
@endsection



