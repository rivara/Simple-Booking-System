<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
class Landlord extends Model
{
    use  HasFactory, Notifiable;
    public $table = 'landlord';
    protected $fillable = [
        'id',
        'name',
        'email',
    ];


    public function apartament()
    {
        return $this->hasOne(apartament::class);
    }

}
