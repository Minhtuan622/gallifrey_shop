<?php

namespace App\Traits;

trait BannerTraits
{
  public function getImageUrlAttribute(): string
  {
    return asset($this->image);
  }
}
