<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    public $timestamps = false;

    public function items()
    {
        return $this->hasMany(MenuItem::class);
    }

}

class MenuItem extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public $timestamps = false;

    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }

    public function parent()
    {
        return $this->belongsTo(self::class, 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(self::class, 'parent_id','id');
    }

    public function childrenRecursive()
    {
        //return $this->hasMany(self::class, 'parent_id','id')->with('childrenRecursive');
        return $this->children()->with('childrenRecursive');
    }

}
