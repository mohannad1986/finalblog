<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Comments extends Model
{
    use HasFactory;

    protected $fillable = ['content','user_id','post_id'];


    public function user(): BelongsTo
    {
        return $this->belongsTo(user::class,'user_id');
    }
}
