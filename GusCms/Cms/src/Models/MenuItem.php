<?php

namespace GustavoMorais\Cms\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    use HasFactory;
    protected $fillable = ['post_id', 'menu_id'];

    public function subItems()
    {
        return $this->hasMany(MenuSubItem::class);
    }

    public function post()
    {
        return $this->hasOne(Post::class, 'id', 'post_id');
    }
}
