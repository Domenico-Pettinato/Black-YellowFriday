<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Product extends Model
{
    use HasFactory, Notifiable;

    protected $fillable = ['name', 'tag','category','description', 'price','image'];

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}
