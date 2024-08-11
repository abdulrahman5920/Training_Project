<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class category extends Model
{
    // use HasFactory;
    protected $table = "categories";
    protected $fillable = [
        "category_name",
    ];

    public function Menus():HasMany{
        return $this->hasMany(Menu::class);
    }
}
