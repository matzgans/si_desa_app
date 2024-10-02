<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Village extends Model
{
    use HasFactory;
    protected $table = 'villages';
    protected $guarded = [];

    // Relasi One to One dengan EducationLevel
    public function educationLevel()
    {
        return $this->hasOne(EducationLevel::class);
    }
    public function transportationMean()
    {
        return $this->hasOne(TransportationMean::class);
    }
}
