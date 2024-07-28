<?php

namespace App\Models;

use App\Traits\BannerTraits;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property String $image
 */
class Banner extends Model
{
  use HasFactory, BannerTraits;

  protected $fillable = [
    'title',
    'image',
    'link_url',
    'position',
  ];

  protected $appends = [
    'image_url',
  ];
}

