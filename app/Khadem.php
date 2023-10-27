<?php

namespace App;

use App\Azmoon;
use Illuminate\Database\Eloquent\Model;

class Khadem extends Model
{
    protected $fillable = ['namesr', 'familysr', 'codemsr', 'tdatesr', 'sanvatsr', 'moavenat', 'enzebatsr', 'keifisr', 'isarsr', 'tahsilsr', 'nokhbehsr' , 'tajmi' , 'bkhademyarsr', 'mobilesr', 'dateshsr' , 'madraksr', 'descriptionsr'];

    public function azmoons()
    {
        return $this->hasMany(Azmoon::class);
    }

}
