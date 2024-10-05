<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Farm extends Model
{
    use HasFactory;
    protected $table = 'farms';
    protected $guarded = [];

    public function village()
    {
        return $this->belongsTo(Village::class);
    }
}
