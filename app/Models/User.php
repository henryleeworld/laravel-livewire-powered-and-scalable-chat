<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Hidden;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Wirechat\Wirechat\Panel;
use Wirechat\Wirechat\Traits\InteractsWithWirechat;
use Wirechat\Wirechat\Contracts\WirechatUser;

#[Fillable(['name', 'email', 'password'])]
#[Hidden(['password', 'remember_token'])]
class User extends Authenticatable implements WirechatUser
{
    /** @use HasFactory<UserFactory> */
    use HasFactory, InteractsWithWirechat, Notifiable;

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

    public function canAccessWirechatPanel(Panel $panel): bool
    {
        return true;//$this->hasVerifiedEmail();
    }

    public function canCreateChats(): bool
    {
        return true;//$this->hasVerifiedEmail();
    }

    public function canCreateGroups(): bool
    {
        return true;//$this->hasVerifiedEmail();
    }
}
