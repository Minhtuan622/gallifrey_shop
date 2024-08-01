<?php

namespace App\Traits;

trait ProductTraits
{
  public function getStatusNameAttribute(): string
  {
    return match ($this->status) {
      1 => 'Available',
      2 => 'Out of Stock',
      3 => 'Discontinued',
      default => '',
    };
  }

  public function getImageUrlAttribute(): string
  {
    return asset($this->image);
  }
}
