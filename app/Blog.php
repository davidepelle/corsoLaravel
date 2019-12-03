<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

//aggiungiamo il soft delete


class Blog extends Model
{
    protected $table = 'blog';
    protected $fillable = ['titolo','contenuto','user_id'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
