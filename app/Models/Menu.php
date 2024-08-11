<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class menu extends Model
{
    // use HasFactory;
    protected $table="menus";
    protected $fillable = [
        "product_name",
        "product_category",
        "description",
        "price",
        "pic",
        "category_id",
    ];
    public function categoriy():BelongsTo{
        return $this->belongsTo(Category::class);
    
    }
}
