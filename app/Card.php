<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Card extends Model
{
    // protected $fillable = ['nim','balance','student_id'];
    protected $fillable = ['nim','balance',];

    protected $guarded = ['id'];

    use SoftDeletes;
    protected $dates = ['deleted_at'];

    // public function student(){
    //     return $this->belongsTo('App\Student');
    // }

    public function credit(){
        return $this->hasOne('App\Credit');
    }
}
