<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'szerep_id'
    ];
    public static function boot()
    {
        parent::boot();

        static::creating(function ($user) {
            if (!str_ends_with($user->email, '@akk.szamalk-szalezi.hu')) {
                throw new \Exception('Az e-mail címnek @akk.szamalk-szalezi.hu végződésűnek kell lennie.');
            }
        });

        static::updating(function ($user) {
            if (!str_ends_with($user->email, '@akk.szamalk-szalezi.hu')) {
                throw new \Exception('Az e-mail címnek @akk.szamalk-szalezi.hu végződésűnek kell lennie.');
            }
        });
    }

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
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
