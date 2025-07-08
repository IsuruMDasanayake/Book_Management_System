@extends('layouts.app')

@section('content')
<div class="container col-md-5 mt-5">
    <h3 class="mb-4 text-center">🔑 Forgot Password</h3>

    @if(session('status'))
      <div class="alert alert-success">{{ session('status') }}</div>
    @endif

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <div class="mb-3">
            <label>Email address</label>
            <input type="email" name="email" class="form-control" required autofocus>
        </div>

        <button type="submit" class="btn btn-warning w-100">Send Password Reset Link</button>
    </form>
</div>
@endsection
