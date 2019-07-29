<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    public $timestamps = false;

    protected $fillable = ["name"];

    public function tasks() {
        return $this->hasMany("App\TodoList");
    }
}
