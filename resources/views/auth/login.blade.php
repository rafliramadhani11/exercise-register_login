@extends('layouts.main')

@section('content')
<div class="row w-50 mt-5 mx-auto">
    <d class="col-8 mx-auto">
        <h1 class="text-center">Log In</h1>

            @if (session()->has('LoginFailed'))
            <div class=" m-auto alert alert-danger alert-dismissible fade show " role="alert">
                <small>{{ session('LoginFailed') }}</small>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

            <form action="{{ route('auth') }}" method="post" class="mt-3">
                @csrf
                <div class="mb-3 form-floating">
                    <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" autofocus>
                    <label for="name">Email</label>
                    @error('email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-2 form-floating">
                    <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" autofocus>
                    <label for="password">Password</label>
                    @error('password')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <small><a href="{{ route('create') }}">Register</a> to get Account</small>
                <button type="submit" class="btn btn-primary d-block mt-3">Log In</button>
            </form>
    </div>
</div>
@endsection
