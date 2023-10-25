<?php

namespace App;

use App\Khadem;
use Illuminate\Database\Eloquent\Model;

class Azmoon extends Model
{
    protected $fillable = ['khadem_id' , 'nomrehAzmoonsr'];

    public function Khadem()
    {
        return $this->belongsTo(Khadem::class);
    }
}
