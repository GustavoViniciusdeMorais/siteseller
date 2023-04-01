<?php

namespace GustavoMorais\Cms\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuSubItem extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'url', 'menu_item_id'];
}
