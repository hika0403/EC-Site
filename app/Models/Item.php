<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Item extends Model
{
    use HasFactory;

    protected $table = 'items';
    protected $fillable = [
        'name',
        'description',
        'price',
        'image_url',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
