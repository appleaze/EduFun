<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Article extends Model
{
    /** @use HasFactory<\Database\Factories\ArticleFactory> */
    use HasFactory;
    protected $guarded = ['id'];
    
    public function writer(): BelongsTo
    {
        return $this->belongsTo(Writer:: class);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category:: class);
    }
}
