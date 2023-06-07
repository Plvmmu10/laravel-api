<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug', 'image', 'description', 'technology_id'];

    public function technology(): BelongsTo
    {
        return $this->belongsTo(Technology::class);
    }
}