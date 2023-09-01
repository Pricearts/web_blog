<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'title',
        'subtitle',
        'content',
        'author'
    ];

    public function getAuthor() {
        return User::where(['name' => $this->author])->first();
    }

    public function getComments() {
        return $this->hasMany(Comments::class, 'article_id')->orderByDesc('id');
    }
}
