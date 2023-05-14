@extends('layouts.main')
@section('title', 'Ubah data')
@section('content')
    <section class="flex items-center justify-center">
        <div class="w-1/2 dark:text-white text-gray-700">
            <div class="py-8 ">
                <h2 class="font-bold text-2xl dark:text-white">Ubah Data Diri</h2>
            </div>
            <form class=" dark:bg-gray-800 shadow-md rounded px-8 pt-6 pb-8 mb-4" enctype="multipart/form-data" method="POST"
                action="{{ route('update') }}">
                {{ csrf_field() }}
                <div class="mb-4">
                    <label class="block  text-sm font-bold mb-2">
                        NIM
                    </label>
                    <input name="nim" autocomplete="off"
                    value="{{ $profile->nim }}"
                        class="shadow appearance-none border rounded w-full py-2 px-3 leading-tight focus:dark:border-purple-700 dark:border-gray-900 dark:bg-gray-900 focus:border-indigo-700 focus:outline-none"
                        type="text" placeholder="NIM">
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-bold mb-2">
                        Nama
                    </label>
                    <input name="nama" autocomplete="off"
                    value="{{ $profile->nama }}"

                        class="shadow appearance-none border rounded w-full py-2 px-3 leading-tight focus:dark:border-purple-700 dark:border-gray-900 dark:bg-gray-900 focus:border-indigo-700 focus:outline-none"
                        type="text" placeholder="Nama">
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-bold mb-2">
                        Email
                    </label>
                    <input name="email" autocomplete="off"
                    value="{{ $profile->email }}"

                        class="shadow appearance-none border rounded w-full py-2 px-3 leading-tight focus:dark:border-purple-700 dark:border-gray-900 dark:bg-gray-900 focus:border-indigo-700 focus:outline-none"
                        type="email" placeholder="Email">
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-bold mb-2">
                        Hobi
                    </label>
                    <input name="hobi" autocomplete="off"
                    value="{{ $profile->hobi }}"

                        class="shadow appearance-none border rounded w-full py-2 px-3 leading-tight focus:dark:border-purple-700 dark:border-gray-900 dark:bg-gray-900 focus:border-indigo-700 focus:outline-none"
                        type="text" placeholder="Hobi">
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-bold mb-2">
                        Tempat Lahir
                    </label>
                    <input name="tempat_lahir" autocomplete="off"
                    value="{{ $profile->tempat_lahir }}"

                        class="shadow appearance-none border rounded w-full py-2 px-3 leading-tight focus:dark:border-purple-700 dark:border-gray-900 dark:bg-gray-900 focus:border-indigo-700 focus:outline-none"
                        type="text" placeholder="Tempat Lahir">
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-bold mb-2">
                        Tanggal Lahir
                    </label>
                    <input name="tanggal_lahir" autocomplete="off"
                    value="{{ $profile->tanggal_lahir }}"

                        class="shadow appearance-none border rounded w-full py-2 px-3 leading-tight focus:dark:border-purple-700 dark:border-gray-900 dark:bg-gray-900 focus:border-indigo-700 focus:outline-none"
                        type="date" placeholder="Tanggal Lahir">
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-bold mb-2">
                    </label>
                    <input type="file" name="foto"
                        class="block w-full text-sm text-gray-500
      file:mr-4 file:py-2 file:px-4
      file:rounded-full file:border-0
      file:text-sm file:font-semibold
      file:bg-purple-50 file:text-purple-700
      hover:file:bg-purple-100
    " />
                    <!-- <input name="photo" id="img" autocomplete="off" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:dark:border-purple-700 dark:border-gray-900 dark:bg-gray-900 focus:border-indigo-700 focus:outline-none" type="file"> -->
                </div>
                <div class="flex items-center justify-start">
                    <button
                        class="bg-indigo-700 transition ease-out duration-500 hover:bg-indigo-500 text-white font-bold py-2 px-4 rounded"
                        name="submit" type="submit">
                        Simpan
                    </button>
                    <div class="px-6">
                        <button onclick="window.location.href='/'" type="button"
                            class="bg-purple-700 hover:bg-purple-600 text-white font-bold py-2 px-4 rounded">
                            Batal
                        </button>
                    </div>

                </div>
            </form>
        </div>
    </section>
@endsection
