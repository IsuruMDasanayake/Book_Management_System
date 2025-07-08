@extends('layouts.app')

@section('content')
<div class="container col-md-5 mt-5">
    <h3 class="mb-4 text-center">🔐 Login</h3>

    @if(session('status'))
      <div class="alert alert-success">{{ session('status') }}</div>
    @endif

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="mb-3">
            <label>Email address</label>
            <input type="email" name="email" class="form-control" required autofocus>
        </div>

        <div class="mb-3">
            <label>Password</label>
            <input type="password" name="password" class="form-control" required>
        </div>

        <div class="mb-3 form-check">
            <input type="checkbox" name="remember" class="form-check-input" id="remember">
            <label class="form-check-label" for="remember">Remember Me</label>
        </div>

        <div class="d-flex justify-content-between">
            <a href="{{ route('password.request') }}">Forgot password?</a>
            <button type="submit" class="btn btn-primary">Login</button>
        </div>
    </form>
</div>
@endsection
