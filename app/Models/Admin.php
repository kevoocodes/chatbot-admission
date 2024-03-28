<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;
use Illuminate\Contracts\Auth\Authenticatable;

class Admin extends Model implements Authenticatable
{
    use HasFactory;

    use Notifiable;
    use AuthenticableTrait;

    protected $guard = 'admin';

    public function isAdmin() {
        return $this->role === 'admin';
    }
    protected $fillable = [
        'firstname',
        'middlename',
        'lastname',
        'email',
        'username',
        'role',
        'password'
    ];
}
