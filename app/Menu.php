<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable = [
        'name',
        'url',
        'parent_id',
    ];

    public function children() {
        return $this->hasMany(self::class, 'parent_id');
      }
}
