<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;



class Shopkeeper extends Model
{
    use HasFactory;

    protected $guarded = [];

    public static function generateSlug($name)
    {
        return Str::slug($name, '-');
    }

    public function types() :BelongsToMany{
        return $this->belongsToMany(Type::class);
    }

    public function users() :BelongsTo{
        return $this->BelongsTo(User::class);
    }

    public function products():HasMany{
        return $this->hasMany(Product::class);
    }
}
