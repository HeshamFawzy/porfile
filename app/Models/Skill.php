<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\EloquentSortable\Sortable;
use Spatie\EloquentSortable\SortableTrait;

class Skill extends Model implements Sortable
{
    use HasFactory, SortableTrait;

    protected $fillable = [
        'skill',
        'percentage',
        'color',
        'visibility',
        'arrangement',
    ];
}
