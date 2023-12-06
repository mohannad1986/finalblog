<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Post;

class Keyword extends Model
{
    use HasFactory;

    public function posts(): BelongsToMany
    {
        return $this->belongsToMany(Post::class);
    }
}
