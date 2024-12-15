<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'body',
        'active',
        'image',
        'user_id',
        'category_id',
        'seo_title',
        'meta_description',
        'meta_keywords',
        'pinned'];
        public function user(): BelongsTo
        {
            return $this->belongsTo(User::class);
        }
    
        public function category(): BelongsTo
        {
            return $this->belongsTo(Category::class);
        }
}