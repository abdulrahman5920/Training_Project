<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class customers extends Model
{
    // use HasFactory;
    protected $table="customers";
    protected $fillable = [
        "name","phone","email"
    ] ;
    public function Bookings():HasMany{
        return $this->hasMany(Booking::class);
    }
}
