<?php

namespace GustavoMorais\Cms\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'url', 'menu_id'];

    public function subItems()
    {
        return $this->hasMany(MenuSubItem::class);
    }
}
