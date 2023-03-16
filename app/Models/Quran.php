<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Http;
use PhpParser\Node\Expr\Cast\Object_;

class Quran
{
  use HasFactory;

  public function get(int $surah = null, int $ayah = null) : Object
  {
    if($surah){
      if($ayah){
        return Http::get("https://quran-endpoint.vercel.app/quran/$surah/$ayah", [
          'imamId' => 7,
        ])->object();
      }
      
      return Http::get("https://quran-endpoint.vercel.app/quran/$surah", [
        'imamId' => 7,
      ])->object();
    }

    return Http::get('https://quran-endpoint.vercel.app/quran', [
      'imamId' => 7,
    ])->object();
  }
}
