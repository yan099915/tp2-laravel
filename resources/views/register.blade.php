@extends('layouts.main')
@section('container')
    <!-- component -->
<div class="h-screen bg-gradient-to-br from-blue-600 to-indigo-600 flex justify-center items-center w-full">
    <form action="/register" method="POST" class="form">
    @csrf
      <div class="bg-white px-10 py-8 rounded-xl w-screen shadow-md max-w-sm">
        <div class="space-y-4">
          <h1 class="text-center text-2xl font-semibold text-gray-600">Register</h1>
          <div>
            <input type="email" name="Email" id="Email" placeholder="Email" class="bg-indigo-50 px-4 py-2 outline-none rounded-md w-full" />
          </div>
          <div>
            <input type="password" name="Password" id="Password" placeholder="Password"  class="bg-indigo-50 px-4 py-2 outline-none rounded-md w-full" />
          </div>
          <div>
            <input type="text" name="NamaDepan" id="NamaDepan" placeholder="Nama Depan"  class="bg-indigo-50 px-4 py-2 outline-none rounded-md w-full" />
          </div>
          <div>
            <input type="text" name="NamaBelakang" id="NamaBelakang" placeholder="Nama Belakang"  class="bg-indigo-50 px-4 py-2 outline-none rounded-md w-full" />
          </div>
          <div>
            <input type="number" name="Usia" id="Usia" placeholder="Usia"  class="bg-indigo-50 px-4 py-2 outline-none rounded-md w-full" />
          </div>
          <div>
            <input type="text" name="Nik" id="Nik" placeholder="Nik Sesuai KTP"  class="bg-indigo-50 px-4 py-2 outline-none rounded-md w-full" />
          </div>
          <div>
            <input type="text" name="Telp" id="Telp" placeholder="Nomor Telp"  class="bg-indigo-50 px-4 py-2 outline-none rounded-md w-full" />
          </div>
          <div>
            <input type="textarea" name="Alamat" id="Alamat" placeholder="Alamat"  class="bg-indigo-50 px-4 py-2 outline-none rounded-md w-full" />
          </div>
        </div>
        <button type="submit" class="mt-4 w-full bg-gradient-to-tr from-blue-600 to-indigo-600 text-indigo-100 py-2 rounded-md text-lg tracking-wide">Register</button>
      </div>
    </form>
  </div>
@endsection
