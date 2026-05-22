<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class esemenyek extends Model
{
    /** @use HasFactory<\Database\Factories\EsemenyekFactory> */
    use HasFactory;
     protected $fillable = [
        'kategoria_id',
        'esemeny_nev',
        'leiras',
        'datum',
        'ar',
        'resztvevok',
        'kepUrl'
    ];
    public function catfuggveny(){
        return $this ->belongsTo(kategoriak::class, 'kategoria_id');
    }
    
}
