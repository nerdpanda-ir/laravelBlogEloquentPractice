<?php

namespace App\Models;

use App\Traits\Models\Clear;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserThumbnail extends Model
{
    use HasFactory , Clear ;
    public $timestamps=false;
}
