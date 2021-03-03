<?php

namespace App\Domains\Page\Models;

use App\Domains\Page\Models\Traits\Attribute\UserAttribute;
//use App\Domains\Page\Models\Traits\Method\UserMethod;
//use App\Domains\Page\Models\Traits\Relationship\UserRelationship;
//use App\Domains\Page\Models\Traits\Scope\UserScope;
use App\Domains\Page\Notifications\Frontend\ResetPasswordNotification;
use App\Domains\Page\Notifications\Frontend\VerifyEmail;
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
 * Class Page.
 */
class Pages extends Authenticatable implements MustVerifyEmail, TwoFactorAuthenticatable
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
        'title',
        'meta_title',
        'meta_description',
        'meta_tag',
        'contant',
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
