<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
        'name',
        'age',
        'position_id',
    ];

    public function position()
    {
        return $this->belongsTo(Position::class);
    }
}
