<?php

namespace App\Models;

use App\Traits\Models\Clear;
use App\Traits\Models\Comment\CommentRelations;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory , Clear , CommentRelations;
    public $timestamps =false;
}
