<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['status','content','user_id'];

    public function users()
    {
        return $this->belongsTo(user::class);
    }
}
