<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Feature;
class Apartament extends Model
{
    use HasFactory;

    public $table = 'apartaments';



    public function features()
    {
        return $this->belongsToMany(Feature::class,'apartament_feature');
    }
}
