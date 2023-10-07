<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{

    use HasFactory;

    protected $fillable = [
        'name',
        'image',
        'price',
        'description',
        'categorie_id',
    ];

    protected $dates = [
        'deleted_at'
    ];

    public function categorie()
    {

        return $this->hasMany(related: product::class);
    }
}
