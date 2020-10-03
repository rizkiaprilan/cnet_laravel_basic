<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    protected $fillable = ['name','address','majority_id'];

    protected $guarded = ['id'];

    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function majority(){
        return $this->belongsTo('App\Majority');
    }

    public function club(){
        return $this->belongsToMany('App\Club');
    }

    // public function cards(){
    //     return $this->hasOne('App\Card');
    // }
}
