<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Post extends Model
{   
    use HasFactory;
    // use HasUuids; 
    // protected $primaryKey = 'id';
    // protected $keyType = 'string'; // UUID - Universal Unique Identifier - change it from int to string
    // protected $incrementing = false; // When key type = string then the inc = false

    protected $table = 'posts';

    protected $fillable = ['title', 'body', 'published'];

    protected $guraded = ['id'];

    public function comments() : HasMany { 
        return $this->hasMany(Comment::class);
    }

    public function tags() : BelongsToMany { 
        return $this->belongsToMany(Tag::class);
    }

    public function user() : BelongsTo {
        return $this->BelongsTo(User::class, 'post_id', 'id');
    }
}
