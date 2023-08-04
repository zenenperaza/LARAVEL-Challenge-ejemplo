<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function scopePages(Builder $query): void
    {
        $query->whereType('PAGE');
    }

    public function scopePosts(Builder $query): void
    {
        $query->whereType('POST')->orderByDESC('id');
    }
}
