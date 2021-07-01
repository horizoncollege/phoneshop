<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExtraPhoneInfo extends Model
{
    use HasFactory;

    protected $fillable = [
        'kleur',
        'gewicht',
        'besturingssysteem',
        'scherm',
        'schermgrootte',
        'resolutie',
        'cameras',
        'aantalcameras',
        'werkgeheugen',
        'batterij',
        'draadloos',
        'vingerafdrukscanner',
        'netwerk',
        'introductiejaar',
        'telefoons_id'
    ];
}
