@extends('layouts.main')

@section('content')
<div class="row w-50 mt-5 mx-auto">
    <d class="col-8 mx-auto">
        <h1 class="text-center">Register</h1>
            <form action="{{ route('store') }}" method="post" class="mt-3">
                @csrf
                <div class="mb-3 form-floating">
                    <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" value="{{ old('email') }}" autofocus>
                    <label for="name">Email</label>
                    @error('email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3 form-floating">
                    <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" placeholder="Name" value="{{ old('name') }}" >
                    <label for="name">Name</label>
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3 form-floating">
                    <input type="text" name="username" id="username" class="form-control @error('username') is-invalid @enderror" value="{{ old('username') }}" placeholder="Username" >
                    <label for="username">Username</label>
                    @error('username')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-2 form-floating">
                    <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" value="{{ old('password') }}" placeholder="Password" >
                    <label for="password">Password</label>
                    @error('password')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <small>
                    Already Have Account ? <a href="{{ route('login') }}">Login</a>
                </small>
                <button type="submit" class="btn btn-primary d-block mt-3">Register</button>
            </form>
    </div>
</div>
@endsection
