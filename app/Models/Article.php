<?php

namespace App\Models;

use App\Traits\Models\Article\ArticleRelations;
use App\Traits\Models\Article\ArticleScopes;
use App\Traits\Models\Clear;
use App\Traits\Models\IdsGetter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;

class Article extends Model
{
    use HasFactory , IdsGetter , Clear , ArticleScopes , ArticleRelations;
    public $timestamps=false;

    public function getForArticlesView(array $columns=['id','slug' , 'title' , 'summary','published_at' , 'user_id']):LengthAwarePaginator
    {
        return $this
                ->select($columns)
                ->WithAuthor()
                ->WithImages()
                ->WithCommentCount()
                ->whereActivatedPublished()
                ->paginate(4);
    }
    public function getForArticleView(
        int $id ,
        string $slug ,
        array $columns=[
            'id' ,
            'user_id' ,
            'title' ,
            'published_at',
            'concat(`summary`,`body`) as "body"'
        ]
    ):null|self
    {
        $articleItem = $this
                        ->selectRaw( implode(',',$columns))
                        ->whereById($id)
                        ->whereBySlug($slug)
                        ->whereActivated()
                        ->wherePublished()
                        ->WithAuthorThumbnails()
                        ->withAuthor(['id','created_at','name'])
                        ->withCommentWriterThumbnails()
                        ->withCommentWriter(['id','name'])
                        ->withComments()
                        ->withCommentCount()
                        ->withImages()
                        ->first();
        return $articleItem;
    }
}
