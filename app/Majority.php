<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Majority extends Model
{
    protected $fillable = ['name','description','faculty_id'];

    protected $guarded = ['id'];

    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function faculty(){
        return $this->belongsTo('App\Faculty');
    }

    public function student(){
        return $this->hasMany('App\Student');
    }
}
