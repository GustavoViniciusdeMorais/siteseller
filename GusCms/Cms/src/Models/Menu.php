<?php

namespace GustavoMorais\Cms\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'status'];

    public function items()
    {
        return $this->hasMany(MenuItem::class);
    }
}
