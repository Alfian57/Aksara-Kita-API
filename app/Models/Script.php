<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Script extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function letters()
    {
        return $this->hasMany(Letter::class);
    }

    public function stats()
    {
        return $this->hasMany(Stats::class);
    }

    public function subMenu()
    {
        return $this->belongsTo(SubMenu::class);
    }
}
