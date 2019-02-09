<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use GrahamCampbell\Markdown\Facades\Markdown;

class Contact extends Model
{
    protected $fillable = ['name', 'email','address', 'phone', 'body'];

    public function getBodyHtmlAttribute()
    {
         return Markdown::convertToHtml(e($this->body));
    }
}
