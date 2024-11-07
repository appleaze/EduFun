<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Writer extends Model
{
    /** @use HasFactory<\Database\Factories\WriterFactory> */
    use HasFactory;
    protected $guarded = ['id'];
    
    public function article(): HasMany
    {
        return $this->hasMany(Article::class);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
