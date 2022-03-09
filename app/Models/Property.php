<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;


    public function location(){
        return $this->belongsTo(Location::class, foreignKey:'location_id');
    }
    public function gallery(){
        return $this->hasMany(Media::class, foreignKey:'property_id');
    }
}
