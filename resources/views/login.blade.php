@extends('layouts.main')
@section('container')
    <!-- component -->
<div class="h-screen bg-gradient-to-br from-blue-600 to-indigo-600 flex justify-center items-center w-full">
    {{-- @if(session()->has('success'))
      <div class="alert alert-success alert-dismissable fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif
    @if(session()->has('logginError'))
      <div class="alert alert-danger alert-dismissable fade show" role="alert">
        {{ session('logginError') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif --}}
    <form action="/login" method="POST" class="form">
    @csrf
      <div class="bg-white px-10 py-8 rounded-xl w-screen shadow-md max-w-sm">
        <div class="space-y-4">
          <h1 class="text-center text-2xl font-semibold text-gray-600">Login</h1>
          <div>
            <input type="email" name="Email" id="Email" placeholder="Email" class="bg-indigo-50 px-4 py-2 outline-none rounded-md w-full @error('Email') is-invalid @enderror" />
            @error('Email') <div class="invalid-feedback">{{ $message }}</div> @enderror
          </div>
          <div>
            <input type="password" name="Password" id="Password" placeholder="Password"  class="bg-indigo-50 px-4 py-2 outline-none rounded-md w-full" />
          </div>
        </div>
        <button type="submit" class="mt-4 w-full bg-gradient-to-tr from-blue-600 to-indigo-600 text-indigo-100 py-2 rounded-md text-lg tracking-wide">Register</button>
      </div>
    </form>
  </div>
@endsection
