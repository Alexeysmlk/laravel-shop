<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
    ];

    protected static function boot(): void
    {
        parent::boot();

        // TODO update
        static::creating(function (Category $category) {
            $category->slug = $category->slug ?? str($category->title)->slug();
        });
    }

    public function products(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}
