<?php

namespace App\Models;

use App\Traits\BlogTraits;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static paginate(int $int)
 * @method static create(array $all)
 * @property mixed $admin_id
 * @property mixed $status
 * @property false|mixed|string $image
 */
class Blog extends Model
{
    use HasFactory, BlogTraits;

    protected $table = 'blogs';

    protected $fillable = [
        'admin_id',
        'title',
        'content',
        'image',
        'status',
        'published_at',
    ];

    protected $appends = ['author_info', 'status_name', 'image_url'];
}
