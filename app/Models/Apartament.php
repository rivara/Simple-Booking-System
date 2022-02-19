<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Feature;
use App\Models\LandLord;
class Apartament extends Model
{
    use HasFactory;

    public $table = 'apartaments';

 protected $fillable = ['title','description','reserved','landlord_id'];

 public $timestamps = false;

    public function features()
    {
        return $this->belongsToMany(Feature::class,'apartament_feature');
    }

    public function landLord()
    {
        return $this->hasOne(landLord::class);
    }
}
