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
     * @var list<string>
     */
    // public function canAccessPanel(): bool
    // {
    //     return true;
    // }
    // public function canAccessFilament(): bool
    // {
    //     return true;
    // }
    // public function canAccessFilamentAdmin(): bool
    // {
    //     return true;
    // }
    // public function canAccessFilamentEditor(): bool
    // {
    //     return true;
    // }
    // public function canAccessFilamentViewer(): bool
    // {
    //     return true;
    // }
    // public function canAccessFilamentUser(): bool
    // {
    //     return true;
    // }
    // public function canAccessFilamentSuperAdmin(): bool
    // {
    //     return true;
    // }
    // public function canAccessFilamentManager(): bool
    // {
    //     return true;
    // }
    // public function canAccessFilamentClient(): bool
    // {
    //     return true;
    // }
    // public function canAccessFilamentProgram(): bool
    // {
    //     return true;
    // }
    // public function canAccessFilamentProgramManager(): bool
    // {
    //     return true;
    // }
    // public function canAccessFilamentProgramEditor(): bool
    // {
    //     return true;
    // }
    // public function canAccessFilamentProgramViewer(): bool
    // {
    //     return true;
    // }
    // public function canAccessFilamentProgramUser(): bool
    // {
    //     return true;
    // }
    // public function canAccessFilamentProgramSuperAdmin(): bool
    // {
    //     return true;
    // }
    // public function canAccessFilamentProgramClient(): bool
    // {
    //     return true;
    // }
    // public function canAccessFilamentProgramClientManager(): bool
    // {
    //     return true;
    // }
    // public function canAccessFilamentProgramClientEditor(): bool
    // {
    //     return true;
    // }
    // public function canAccessFilamentProgramClientViewer(): bool
    // {
    //     return true;
    // }
    // public function canAccessFilamentProgramClientUser(): bool
    // {
    //     return true;
    // }
    // public function canAccessFilamentProgramClientSuperAdmin(): bool
    // {
    //     return true;
    // }
    // public function canAccessFilamentProgramClientAdmin(): bool
    // {
    //     return true;
    // }
    // Specify the table name
    protected $table = 'users';


    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
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

    public function program()
    {
        return $this->hasMany(Program::class);
    }

    public function client()
    {
        return $this->hasMany(Client::class);
    }
}
