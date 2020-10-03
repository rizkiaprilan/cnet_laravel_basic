<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Credit extends Model
{
    protected $fillable = ['name','balance','card_id'];

    protected $guarded = ['id'];

    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function card(){
        return $this->belongsTo('App\Card');
    }

}
