<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Media extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $fillable = [
      'url',
      'title',
      'isChecked',
      'isAnonymous',
    ];

    public function user() {
        return $this->belongsTo('App\User');
    }
}
