<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     * 
     * //protected $guarded=[];
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'lname',
        'img',
        'phone',
        'gender',
        'age',
        'front_id_pic',
        'back_id_pic',
        'needed_services',
        
        'time',
        'timeTo',
        'car',
        'is_accepted',
        'is_deleted',
        'volunteer_id',
        'job_taken'


    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
