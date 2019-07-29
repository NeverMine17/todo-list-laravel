<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'name',
        'group_id'
    ];

    public function groups() {
        return $this->belongsTo("App\Group", "group_id", "id");
    }
}
