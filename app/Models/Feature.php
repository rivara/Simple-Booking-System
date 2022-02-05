<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Apartament;
class Feature extends Model
{
    use HasFactory;

    public $table = 'features';

  
    protected $fillable = [
        'id',
        'name',
    ];

   
    public function apartaments()
    {
        return $this->belongsToMany(Apartament::class,'apartament_feature');
    }

}
