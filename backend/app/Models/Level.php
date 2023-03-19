<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'time_limit',
    ];
     // Define the relationship to the scores table
     public function scores()
     {
         return $this->hasMany(Score::class);
     }
 
     // Define the relationship to the words table
     public function words()
     {
         return $this->hasMany(Word::class);
     }

}
