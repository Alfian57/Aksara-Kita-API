<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubMenu extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function script()
    {
        return $this->hasOne(Script::class, 'script_id', 'id');
    }
}
