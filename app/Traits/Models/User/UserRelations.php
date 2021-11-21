<?php namespace App\Traits\Models\User ; ?>

<?php

use App\Models\UserThumbnail;
use Illuminate\Database\Eloquent\Relations\HasMany;

trait UserRelations
{
    public function thumbnails():HasMany
    {
        return $this->hasMany(UserThumbnail::class);
    }
}
