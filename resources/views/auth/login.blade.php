@extends('layouts.bootstrap')
@section('title', 'Login')

@push('styles')
<link rel="stylesheet" src="{{ asset('css/app.css') }}" />
@endpush

@section('content')
<main class="d-flex align-items-center justify-content-center h-100 min-vh-100">
  <form class="form-signin" target="/login">
    <input type="hidden" name="csrf_token" value="{{ csrf_token() }}" />
    <h1 class="h3 mb-3 font-weight-normal">Please Login</h1>
    <label for="username" class="sr-only">Username</label>
    <input type="text" name='username' id="username" class="form-control" placeholder="Username" required autofocus />
    <label for="password" class="sr-only">Password</label>
    <input type="password" id="password" name="password" class="form-control" placeholder="Password" required />
    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" name="remember" /> Remember me
      </label>
    </div>
    <button class="btn btn-lg btn-primary btn-block" type="submit">
      Login
    </button>
  </form>
</main>
@endsection
