<?php

namespace GustavoMorais\Cms\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SocialLink extends Model
{
    use HasFactory;
    protected $fillable = ['type', 'value'];
    
    public static function getDefaultTypes()
    {
        return ['instagram', 'facebook', 'twitter'];
    }
}
