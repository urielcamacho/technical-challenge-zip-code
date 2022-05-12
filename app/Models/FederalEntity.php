<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FederalEntity extends Model
{
    use HasFactory;

    protected $fillable = ['key', 'name', 'code'];

    /**
     * Relationships
     */
    public function zipCodes()
    {
        return $this->hasMany(ZipCode::class);
    }
}
