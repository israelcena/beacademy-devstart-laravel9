<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
        'post',
        'active'
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    protected $with = [
        'user'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}