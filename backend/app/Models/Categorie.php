<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
    ];

    protected $dates = [
        'deleted_at'
    ];

    public function product()
    {

        return $this->hasMany(related: product::class);
    }
}
