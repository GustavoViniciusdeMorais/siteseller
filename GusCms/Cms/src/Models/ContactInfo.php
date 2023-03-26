<?php

namespace GustavoMorais\Cms\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactInfo extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'type', 'value'];

    public static function getTypes()
    {
        return [
            'cellphone',
            'phone',
            'email',
            'address'
        ];
    }
}
