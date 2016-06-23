<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Competitor;

class Club extends Model
{
    protected $fillable = ['name', 'location', 'association'];

    public function competitors()
    {
        return $this->hasMany(Competitor::class);
    }

    public function getAssociation()
    {
        $assoc = $this->association;
        if ($assoc == 'sopas') {
            return 'SOPAS';
        }

        if ($assoc == 'spav') {
            return 'SPAV';
        }

        if ($assoc == 'both') {
            return 'SOPAS i SPAV';
        }

    }
}
