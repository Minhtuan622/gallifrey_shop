<?php

namespace App\Models;

use App\Traits\ProductTraits;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static create(array $product)
 * @method static paginate(int $int)
 * @method static findOrFail(int $id)
 * @property mixed $name
 * @property mixed $description
 * @property mixed $price
 * @property mixed $image
 * @property mixed $stock
 * @property mixed $status
 * @property mixed $status_name
 */
class Product extends Model
{
    use HasFactory, ProductTraits;

    protected $table = 'products';

    protected $fillable = [
        'name',
        'description',
        'price',
        'image',
        'stock',
        'status',
    ];

    protected $appends = [
      'status_name',
      'image_url',
      ];
}
