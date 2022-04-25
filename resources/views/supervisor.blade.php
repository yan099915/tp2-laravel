@extends('layouts.main')
@section('container')
<div class="min-h-screen flex">
  <div class="py-12 px-10 w-1/4">
    <div class="flex space-2 items-center border-b-2 pb-4">
      <div>
        <svg xmlns="http://www.w3.org/2000/svg" class="h-14 w-14 text-black" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>
      </div>
      <div class="ml-3">
        <h1 class="text-3xl font-bold text-black">DASHBOARD</h1>
      </div>
    </div>
    <div class="flex items-center space-x-4 mt-6 p-2 ">
      <div>
        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 ml-3 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 10a1 1 0 011-1h4a1 1 0 011 1v4a1 1 0 01-1 1h-4a1 1 0 01-1-1v-4z" />
        </svg>
      </div>
      <div>
        <p class="text-lg text-gray-500 font-semibold">Penjualan</p>
      </div>
    </div>
    <div class="mt-8 space-x-4 mt-6 p-2 bg-black rounded-md">
      <ul class="space-y-10">
        <li>
          <a href="#" class="flex items-center ml-3 text-lg font-semibold text-white hover:text-indigo-600 transition duration-200" hover:text-indigo-600>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-4 text-white hover:text-indigo-600 transition duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            Laporan Penjualan Sales</a
          >
        </li>
      </ul>
    </div>
    <div class="flex ml-3 mt-20 space-x-4 items-center">
      <div>
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-400 hover:text-indigo-600 transition duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
        </svg>
      </div>
      <a href="#" class="block font-semibold text-gray-500 hover:text-indigo-600 transition duration-200">Logout</a>
    </div>
  </div>
  <div class="bg-indigo-50 flex-grow py-12 px-10">
    <div class="flex justify-between">
      <div>
        <h2 class="text-sm font-bold text-indigo-600">Hi Didi,</h2>
        <h1 class="text-4xl font-bold text-indigo-900 mt-">Welcome back!</h1>
      </div>
      <div>
        <div class="flex items-center border rounded-lg bg-white w-max py-2 px-4 space-x-3">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
          </svg>
          <input class="outline-none" type="text" placeholder="Search" />
        </div>
      </div>
    </div>
    <div>
      <div class="flex space-x-4 justify-center">
        <div class="flex items-center justify-around p-6 bg-white w-64 rounded-xl space-x-2 mt-10 shadow-lg">
          <div>
            <span class="text-sm font-semibold text-gray-400">Penjualan Toko Bulan Ini</span>
            <h1 class="text-2xl font-bold">Rp.85.200.000</h1>
          </div>
          <div>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 11l7-7 7 7M5 19l7-7 7 7" />
            </svg>
          </div>
        </div>
        <div class="flex items-center justify-around p-6 bg-white w-64 rounded-xl space-x-2 mt-10 shadow-lg">
          <div>
            <span class="text-sm font-semibold text-gray-400">Penjualan Toko Bulan Lalu</span>
            <h1 class="text-2xl font-bold">Rp.135.250.000</h1>
          </div>
          <div>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-indigo-600" viewBox="0 0 20 20" fill="currentColor">
              <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z" />
            </svg>
          </div>
        </div>
        <div class="flex items-center justify-around p-6 bg-white w-64 rounded-xl space-x-2 mt-10 shadow-lg">
          <div>
            <span class="text-sm font-semibold text-gray-400">Target Penjualan Toko</span>
            <h1 class="text-2xl font-bold">Rp.250.000.000</h1>
          </div>
          <div>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 13v-1m4 1v-3m4 3V8M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z" />
            </svg>
          </div>
        </div>
      </div>
      <div class="flex mt-10 justify-center">
        <div>
          <h1 class="bg-white font-bold text-xl text-center">Laporan Penjualan Sales</h1>
          <table class="min-w-full table-auto">
            <thead class="justify-between">
              <tr class="bg-black">
                <th class="px-16 py-2">
                  <span class="text-gray-300">Kode Sales</span>
                </th>
                <th class="px-16 py-2">
                  <span class="text-indigo-50">Nama Sales</span>
                </th>
                <th class="px-16 py-2">
                  <span class="text-indigo-50">Penjualan Bulan Ini</span>
                </th>
                <th class="px-16 py-2">
                  <span class="text-indigo-50">Penjualan Bulan Lalu</span>
                </th>

              </tr>
            </thead>
            <tbody class="bg-gray-200">
              <tr class="bg-white border-4 border-gray-200 text-center">
                <td class="px-16 py-2 flex flex-row items-center">
                  <span class="text-center ml-2 font-semibold">SA1</span>
                </td>
                <td>
                  <span class="text-center ml-2 font-semibold">Yan S</span>
                </td>
                <td class="px-16 py-2">15.250.000</td>
                <td class="px-16 py-2">
                  <span>Rp.25.200.000</span>
                </td>
              </tr>
              <tr class="bg-white border-4 border-gray-200 text-center">
                <td class="px-16 py-2 flex flex-row items-center">
                  <span class="text-center ml-2 font-semibold">SA2</span>
                </td>
                <td>
                  <span class="text-center ml-2 font-semibold">Kevin</span>
                </td>
                <td class="px-16 py-2">Rp.20.000.000</td>
                <td class="px-16 py-2">
                  <span>Rp.24.000.000</span>
                </td>
              </tr>
              <tr class="bg-white border-4 border-gray-200 text-center">
                <td class="px-16 py-2 flex flex-row items-center">
                  <span class="text-center ml-2 font-semibold">SA3</span>
                <td>
                  <span class="text-center ml-2 font-semibold">Ristha</span>
                </td>
                <td class="px-16 py-2">Rp.28.000.000</td>
                <td class="px-16 py-2">
                  <span>Rp.27.500.000</span>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div></div>
      <div></div>
    </div>
    <div></div>
    <div></div>
  </div>
</div>
@endsection
