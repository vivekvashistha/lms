<?php

namespace App\Domains\Set\Models;

use App\Domains\Set\Models\Traits\Attribute\UserAttribute;
//use App\Domains\Set\Models\Traits\Method\UserMethod;
//use App\Domains\Set\Models\Traits\Relationship\UserRelationship;
//use App\Domains\Set\Models\Traits\Scope\UserScope;
use App\Domains\Set\Notifications\Frontend\ResetPasswordNotification;
use App\Domains\Set\Notifications\Frontend\VerifyEmail;
use DarkGhostHunter\Laraguard\Contracts\TwoFactorAuthenticatable;
use DarkGhostHunter\Laraguard\TwoFactorAuthentication;
use Database\Factories\UserFactory;
use Illuminate\Auth\MustVerifyEmail as MustVerifyEmailTrait;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Lab404\Impersonate\Models\Impersonate;
use Spatie\Permission\Traits\HasRoles;
/**
 * Class Set.
 */
class Sets extends Authenticatable implements MustVerifyEmail, TwoFactorAuthenticatable
{
    use HasFactory,
        HasRoles,
        Impersonate,
        MustVerifyEmailTrait,
        Notifiable,
        SoftDeletes,
        TwoFactorAuthentication;
        //UserMethod,
        //UserRelationship,
        //UserScope;
    
    /**
     * @var string[]
     */
    protected $with = [
        'permissions',
    ];
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'business_commision',
        'status',
    ];

    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory()
    {
        return RoleFactory::new();
    }
}
