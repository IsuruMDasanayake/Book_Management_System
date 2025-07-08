@extends('layouts.app')

@section('content')
<div class="container col-md-5 mt-5">
    <h3 class="mb-4 text-center">⚠️ Confirm Password</h3>

    <p class="text-muted text-center">This is a secure area of the app. Please confirm your password before continuing.</p>

    <form method="POST" action="{{ route('password.confirm') }}">
        @csrf

        <div class="mb-3">
            <label>Password</label>
            <input type="password" name="password" class="form-control" required autofocus>
        </div>

        <button type="submit" class="btn btn-danger w-100">Confirm</button>
    </form>
</div>
@endsection
