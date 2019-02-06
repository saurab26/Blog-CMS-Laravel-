<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use GrahamCampbell\Markdown\Facades\Markdown;
use Laratrust\Traits\LaratrustUserTrait;

class User extends Authenticatable
{
    use LaratrustUserTrait;
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','slug','bio'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function posts()
    {
        return $this->hasMany(Post::class,'author_id');
    }

    public function gravatar()
    {
        $email = $this->email;
        $default = "https://cdn0.iconfinder.com/data/icons/iconshock_guys/512/andrew.png";
        $size = 100;

        return  "https://www.gravatar.com/avatar/" . md5( strtolower( trim( $email ) ) ) . "?d=" . urlencode( $default ) . "&s=" . $size;

    }


    public function getBioHtmlAttribute($value)
    {
        return $this->bio ? Markdown::convertToHtml(e($this->bio)): NULL;
    }
    public function getRouteKeyName()
    {
        return 'slug';
    }
    public function setPasswordAttribute($value)
{
    if (!empty($value)) $this->attributes['password'] = bcrypt($value);
}
}
