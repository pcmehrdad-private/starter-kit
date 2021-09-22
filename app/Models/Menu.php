<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Traits\HasRecursiveRelationships;
// https://github.com/paxha/laravel-recursive-relationships

class Menu extends Model
{
    use HasFactory,HasRecursiveRelationships;

    protected $guarded = ['id'];
    public $timestamps = false;

    public function items()
    {
        return $this->hasMany(MenuItem::class);
    }

}

class MenuItem extends Model
{
    use HasFactory,HasRecursiveRelationships;
    protected $guarded = ['id'];
    public $timestamps = false;

    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }

}
