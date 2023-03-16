<?php

namespace App\Http\Controllers;

use App\Models\Quran;
use Illuminate\Http\Request;

class QuranController extends Controller
{
  private Quran $quran;

  public function __construct()
  {
    $this->quran = new Quran();
  }

  public function index()
  {
    return view('quran.index', [
      'title' => "Al-Qur'an",
      'surahs' => $this->quran->get(),
    ]);
  }

  public function show(int $surahId)
  {
    $surah = $this->quran->get($surahId);

    return view('quran.surah', [
      'title' => "Al-Qur'an",
      'surah' => $surah,
    ]);
  }
}
