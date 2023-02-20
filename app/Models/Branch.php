<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    use HasFactory;

    protected $table = 'branches';
    protected $guarded = false;

    public function menuCategories()
    {
        return $this->hasMany(MenuCategory::class);
    }
}
