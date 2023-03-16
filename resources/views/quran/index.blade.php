@extends('layouts/main-layout')

@section('content')

<div class="flex flex-wrap justify-center">
  @foreach ($surahs->data as $surah)
    <a href="/quran/{{ $surah->number }}" class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 m-2">
      <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $surah->asma->id->short }}</h5>
      <p class="font-normal text-gray-700 dark:text-gray-400">{{ $surah->tafsir->id }}</p>
    </a>
  @endforeach
</div>

@endsection