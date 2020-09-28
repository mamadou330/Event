<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
class Events extends Model
{
    use HasFactory;

    //protected $fillable = ['title', 'description', 'slug'];
    protected $fillable = ['title', 'description'];
    //protected $guarded = []  ;//si on utilise jamais request_all() on peut mettre guarded (les champ qu'on ne peut pas filler)


    public function getRouteKeyName()
    {
        return 'slug';
    }

    /**
     * Fonction qui permet d'empacher le changement du slug quand on modifier un Event 
     * N'obulie pas Ok 
     */
    protected static function boot()
    {
        parent::boot();

        static::creating(function($event) {
            $event->slug = Str::slug($event->title);
        });
    }
}
