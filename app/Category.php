<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Competitor;

class Category extends Model
{
    protected $fillable = ['name'];

    public function competitors()
    {
        return $this->hasMany(Competitor::class);
    }
}
