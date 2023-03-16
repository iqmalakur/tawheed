@extends('layouts.main-layout')

@section('content')

<a href="/quran" class="inline-block text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700 m-5">Kembali</a>

<h1 class="text-center mt-5 mb-10 text-5xl font-bold">{{ $surah->data->asma->id->short }}</h1>

<div class="my-5">
  @foreach($surah->data->ayahs as $ayah)
  <div class="block p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 m-2">
    <p class="font-normal text-gray-700 dark:text-gray-400 text-right">{{ $ayah->text->ar }}</p>
    <p class="font-normal text-gray-700 dark:text-gray-400">{{ $ayah->text->read }}</p>
  </div>
  @endforeach
</div>

@endsection