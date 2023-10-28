<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comision extends Model
{
    protected $fillable = ['khadem_id ', 'ShHerasatsr', 'TdHerasatsr', 'ShToliatsr', 'TdToliatsr', 'SiMKhodamsr', 'SiMSarmayehsr', 'SiMAalesr', 'SiToliatsr', 'ShHokmsr'];

    public function khadem()
    {
        return $this->belongsTo(Khadem::class);
    }
}
