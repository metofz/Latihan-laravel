@extends('layouts.main')

@section('container')
<div class="row justify-content-center pt-4">
  <div class="col-lg-4">
    <main class="form-registration w-100 m-auto">
      <form action="/register" method="POST">
        @csrf
        <img class="mb-4 mx-auto d-block rounded" src="/img/logo.png" alt="" width="72" height="57">
        <h1 class="h3 mb-3 fw-normal text-center">Sign Up</h1>
        <div class="form-floating">
          <input type="text" class="form-control rounded-top @error('name')is-invalid @enderror" name="name" id="name" placeholder="Name" required>
          <label for="name">Name</label>
          @error('name')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="form-floating">
          <input type="text" class="form-control @error('username')is-invalid @enderror" name="username" id="username" placeholder="Username" required>
          <label for="username">Username</label>
          @error('username')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="form-floating">
          <input type="email" class="form-control @error('email')is-invalid @enderror" name="email" id="email" placeholder="name@example.com" required>
          <label for="email">Email address</label>
          @error('email')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="form-floating">
          <input type="password" class="form-control rounded-bottom @error('password')is-invalid @enderror" name="password" id="password" placeholder="Password" required>
          <label for="password">Password</label>
          @error('password')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <button class="w-100 btn btn-lg btn-dark mb-4 mt-3" type="submit">Sign up</button>
        <small class="text-center d-block">Already Register? <a href="/login">Please Sign in</a></small>
        <p class="mt-5 mb-3 text-muted text-center">&copy; 2022</p>
      </form>
    </main>
  </div>
</div>

@endsection