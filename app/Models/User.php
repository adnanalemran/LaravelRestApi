<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Factories\HasFactory;
<<<<<<< HEAD
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
=======
use Illuminate\Database\Eloquent\Model;
use Laravel\Lumen\Auth\Authorizable;
>>>>>>> 7d1b6d8454c92a518cc2b24a08c9408be49cea16

class User extends Model implements AuthenticatableContract, AuthorizableContract
{
<<<<<<< HEAD
    use HasApiTokens, HasFactory, Notifiable;
=======
    use Authenticatable, Authorizable, HasFactory;
>>>>>>> 7d1b6d8454c92a518cc2b24a08c9408be49cea16

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name', 'email',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var string[]
     */
    protected $hidden = [
        'password',
    ];
<<<<<<< HEAD

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
=======
>>>>>>> 7d1b6d8454c92a518cc2b24a08c9408be49cea16
}
