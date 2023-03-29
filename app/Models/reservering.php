<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservering extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'voornaam',
        'tussenvoegsel',
        'achternaam',
        'datum',
        'volwassen',
        'kinderen',
        'optiepakket',
    ];

    protected $table = 'reservering';
}
