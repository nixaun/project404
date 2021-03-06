<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Verhaal extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $fillable = [
      'body',
      'title',
      'isChecked',
      'isAnonymous',
    ];

    public function user() {
        return $this->belongsTo('App\User');
    }
}
