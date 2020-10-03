<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Club extends Model
{
    protected $fillable = ['name','description'];

    protected $guarded = ['id'];

    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function student(){
        return $this->belongsToMany('App\Student');
    }

}
