<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

// Import the Category model
// use App\Models\Category;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'author_id',
        'category_id',
        'title',
        'seo_title',
        'excerpt',
        'body',
        'image',
        'slug',
        'meta_description',
        'meta_keywords',
        'status',
        'featured',
        'location',
        'circle_size',
    ];

    protected $casts = [
        'featured' => 'boolean',
        'circle_size' => 'integer',
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    public function getLatAttribute(): ?float
    {
        $parts = explode(',', (string) $this->location);

        return isset($parts[1]) ? (float) $parts[1] : null;
    }

    public function getLngAttribute(): ?float
    {
        $parts = explode(',', (string) $this->location);

        return isset($parts[0]) ? (float) $parts[0] : null;
    }

    /**
     * Resolve the post image to a usable URL.
     *
     * Full URLs (e.g. seeded https://picsum.photos placeholders) are returned
     * as-is; storage-relative paths (e.g. "posts/post1.jpg") are resolved
     * through the public disk.
     */
    public function getImageUrlAttribute(): ?string
    {
        if (empty($this->image)) {
            return null;
        }

        if (preg_match('/^https?:\/\//', $this->image)) {
            return $this->image;
        }

        return \Illuminate\Support\Facades\Storage::disk(config('voyager.storage.disk'))->url($this->image);
    }
}
