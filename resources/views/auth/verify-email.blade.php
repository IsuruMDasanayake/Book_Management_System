@extends('layouts.app')

@section('content')
<div class="container col-md-6 mt-5">
    <h3 class="mb-4 text-center">📧 Verify Your Email</h3>

    @if (session('status') === 'verification-link-sent')
        <div class="alert alert-success text-center">
            A new verification link has been sent to your email address.
        </div>
    @endif

    <p class="text-center">Thanks for signing up! Please verify your email by clicking the link we just emailed you.</p>

    <form method="POST" action="{{ route('verification.send') }}" class="text-center mt-3">
        @csrf
        <button type="submit" class="btn btn-primary">Resend Verification Email</button>
    </form>
</div>
@endsection
