<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;
    protected $fillable = [
      'content',
      'chat_id'
    ];
    public fuction user()
    {
      return $this->belongsTo('App\Models\User');
    }
    public function chat()
    {
      return $this->hasMany('App\Models\Chat');
    }
}
