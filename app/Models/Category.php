<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Category extends Model
{
    /** @use HasFactory<\Database\Factories\CategoryFactory> */
    use HasFactory;
    protected $guarded = ['id'];
    
    public function article() : HasMany
    {
        return $this->hasMany(Article::class);
    }

    public function writer() : HasOne
    {
        return $this->hasOne(Writer::class);
    }
}
