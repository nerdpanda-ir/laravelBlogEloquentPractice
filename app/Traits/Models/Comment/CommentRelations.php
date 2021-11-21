<?php namespace App\Traits\Models\Comment ; ?>
<?php

use App\Models\User;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

trait CommentRelations
{
    public function writer():BelongsTo
    {
        return $this->belongsTo(User::class,'user_id');
    }
}
