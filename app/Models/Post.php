<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\EloquentSortable\Sortable;
use Spatie\EloquentSortable\SortableTrait;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Post extends Model implements HasMedia, Sortable
{
    use HasFactory, InteractsWithMedia, SoftDeletes, SortableTrait;

    protected $fillable = [
        'title',
        'desc',
        'url',
        'date',
        'visibility',
        'arrangement',
    ];
}
