<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Club;
use App\Category;

class Competitor extends Model
{
    protected $fillable = [
        'category_id', 'club_id', 'serial', 'full_name', 'time_sec'
    ];

    public function club()
    {
        return $this->belongsTo(Club::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
