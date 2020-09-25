<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pattern extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'category_id', 'definition', 'description', 'tag'
    ];

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function dimensions()
    {
        return $this->belongsToMany(Dimension::class);
    }

    public function issues()
    {
        return $this->belongsToMany(Issue::class);
    }
}
