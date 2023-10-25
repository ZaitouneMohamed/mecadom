<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description'
    ];

    public function User()
    {
        return $this->belongsToMany(User::class , 'service_mecanicien' , "service_id" , "user_id");
    }
}
