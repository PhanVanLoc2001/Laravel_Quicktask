<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
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
     */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    protected $guarded =['is_admin'];
=======
=======
>>>>>>> main
=======
>>>>>>> main
=======
>>>>>>> b7aa53c82f1e35723dcedb7d0a30fca061b3f9b4
=======
>>>>>>> b7aa53c82f1e35723dcedb7d0a30fca061b3f9b4
=======
>>>>>>> main
=======
>>>>>>> main
    protected $fillable = [
        'name',
        'email',
        'password',
    ];
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> main
=======
>>>>>>> main
=======
>>>>>>> main
=======
>>>>>>> b7aa53c82f1e35723dcedb7d0a30fca061b3f9b4
=======
>>>>>>> b7aa53c82f1e35723dcedb7d0a30fca061b3f9b4
=======
>>>>>>> main
=======
>>>>>>> main

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
