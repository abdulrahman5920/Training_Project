<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class booking extends Model
{
    // use HasFactory;
    protected $table="bookings"; 
    protected $fillable = [
        "customer_id",
        "date",
        "persons_num",
    ] ;
    public function Customer():BelongsTo{
        return $this->belongsTo(Customers::class);
        
    }
 
}
