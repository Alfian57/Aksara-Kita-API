<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stats extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function user()
    {
        return $this->hasOne(User::class, 'user_id', 'id');
    }

    public function script()
    {
        return $this->hasOne(Script::class, 'script_id', 'id');
    }
}
