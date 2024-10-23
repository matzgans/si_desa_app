<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SaranaPerikanan extends Model
{
    use HasFactory;
    protected $table = 'sarana_perikanans';
    protected $guarded = [];

    public function village()
    {
        return $this->belongsTo(Village::class);
    }
}
