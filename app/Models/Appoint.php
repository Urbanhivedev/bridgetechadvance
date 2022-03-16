<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appoint extends Model
{
    use HasFactory;
    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'phone',
        'course',
        'developer',
        'date',
        'time',

    ];

    public function user(){

        return $this->hasOne(User::class , 'id' , 'user_id');
    }

}
