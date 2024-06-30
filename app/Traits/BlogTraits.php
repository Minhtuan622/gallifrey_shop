<?php

namespace App\Traits;

use App\Models\Admin;

trait BlogTraits
{
    public function getAuthorInfoAttribute()
    {
        return Admin::find($this->admin_id);
    }

    public function getStatusNameAttribute(): string
    {
        return match ($this->status){
            1 => 'Draft',
            2 => 'Published',
            default => '',
        };
    }
}
