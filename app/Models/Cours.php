<?php

namespace App\Models;

use COM;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cours extends Model
{
    use HasFactory;
    protected $fillable =[

        'name',	
        'description',
        'image',
        'corseId',
        'slug',

    ];

    public function coursclass(){

        return $this->belongsTo(Coursclass::class);
    }
}
