<?php namespace App\Traits\Models\Article ; ?>
<?php

use App\Models\User;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\ArticleThumbnail ;
use App\Models\Comment;
trait ArticleRelations
{
    public function images():HasMany
    {
       return  $this
            ->hasMany(ArticleThumbnail::class);
    }
    public function author():BelongsTo
    {
        return $this->belongsTo(User::class,'user_id');
    }
    public function comments():HasMany
    {
        return $this->hasMany(Comment::class);
    }

}
