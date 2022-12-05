<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    /** PERFIS */
    const ROOT = 'ROOT';
    const ADMIN = 'ADMIN';
    const ATTENDANT = 'ATTENDANT';
    const CLIENT = 'CLIENT';

    /** Permissões padrão */
    const CREATE_ROOT = 'CREATE ROOT';
    const CREATE_ADMIN = 'CREATE ADMIN';
    const CREATE_ATTENDANT = 'CREATE ATTENDANT';
    const CREATE_CLIENT = 'CREATE CLIENT';
    const PERMISSIONS_ADMIN = 'PERMISSIONS ADMIN';
    const SEE_REPORTS = 'SEE REPORTS';
    const TICKET_OPEN = 'TICKET OPEN';
    const START_SERVICE = 'START SERVICE';
    const REMARK = 'REMARK';
    const TICKET_CLOSE = 'TICKET CLOSE';
    const EVALUATE_SERVICE = 'EVALUATE_SERVICE';
    const SEE_TICKETS = 'SEE TICKETS';
    const SEE_USERS = 'SEE USERS';
    const SEE_ATTENDANTS_AND_EVALUATIONS = 'SEE_ATTENDANTS_AND_EVALUATIONS';
    const SEE_TICKET_HISTORY = 'SEE TICKET HISTORY';


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
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
