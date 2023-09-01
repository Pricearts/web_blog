<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    use HasFactory;

    protected $fillable = [
        'id', 'article_id', 'user_id', 'content'
    ];

    public function getUser() {
        return User::findOrFail($this->user_id);
    }
}
