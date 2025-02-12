<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $fillable = [
        'comment',
        'user_id',
        'article_id'
    ];
    //un commentaire est associé à un article
    public function article(){
        return $this->belongsTo(Article::class);
    }
    //un commemntaire est relatif a un utilisateur
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
