@extends('layouts.form')

@section('title', 'Masuk')

@section('content')
<div class="row">
    <div class="col-md-6 d-flex justify-content-center align-items-center flex-column left-box">
      <div class="featured-img">
        <img src="{{url('img/tokong-nanas.png')}}" class="img-fluid" />
      </div>
    </div>
    <div class="col-md-6 right-box p-5" style="height: 100vh">
      <div class="row align-items-center">
        <div class="header-text mb-4 text-white text-center">
          <h2>Masuk</h2>
          <h1 class="fw-bold">LAPAK TEL-U</h1>
        </div>
        {{--  {{--  <div class="mt-5">
          @if($errors->any())
            <div class="col-12">
              @foreach($errors->all() as $error)
                <div class="alert alert-danger">
                  {{ $error }}
                </div>
              @endforeach
            </div>
          @endif
          @if(session()->has('error'))
          <div class="alert alert-danger">
            {{ session('error') }}
          </div>
          @endif
          @if(session()->has('success'))
          <div class="alert alert-success">
            {{ session('success') }}
          </div>
          @endif  
        </div>  --}}
        <form action="{{ route('login.post') }}" method="POST">
            @csrf
          <div class="mb-3 text-white">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control p-2" id="email" aria-describedby="emailHelp" placeholder="Masukkan email kamu" />
            <div class="invalid-feedback">
              Mohon masukkan Email Anda
            </div>
          </div>
          <div class="mb-3 text-white">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control p-2" id="password" placeholder="Masukkan password kamu" />
            <div class="invalid-feedback">
              Mohon masukkan password Anda
            </div>
          </div>
          <div class="mb-3 d-flex justify-content-end">
            <a href="#" class="lupa-password text-white text-decoration-none">Lupa Password?</a>
          </div>
          <button name="submit" type="submit" class="btn btn-primary w-100 bg-light text-primary fw-bold p-3 mt-3">Masuk</button>
          <div class="option-text p-4 text-white text-center">
            <p>atau masuk dengan</p>
          </div>
          <div class="login-option d-flex justify-content-between text-center">
            <div class="google-login bg-light p-2 w-100 align-items-center rounded d-flex justify-content-center align-items-center">
              <img src="{{url('img/logo-google.jpg')}}" class="img-fluid max-width-25" />
              <a href="#!" class="text-dark ml-1 text-decoration-none bg-light fw-bold">Google</a>
            </div>
          </div>
        </form>
        <div>
          <p class="mt-3 text-white text-center">
            Belum memiliki akun?
            <a href="{{route('register')}}" class="text-white fw-bold">Daftar disini</a>
          </p>
        </div>
      </div>
    </div>
  </div>
@endsection