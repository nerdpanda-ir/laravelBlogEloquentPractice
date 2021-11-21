<?php namespace App\Traits\Models\Article ; ?>
<?php

use Illuminate\Database\Eloquent\Builder;

trait ArticleScopes
{
    public function scopeWhereActivated(Builder $query):Builder
    {
        return $query
                ->where('active','=',true);
    }
    public function scopeWherePublished(Builder $query):Builder
    {
        return $query
                ->whereNotNull('published_at');
    }
    public function scopeWhereActivatedPublished(Builder $query):Builder
    {
        return $query
                ->WhereActivated()
                ->wherePublished();
    }
    public function scopeWithImages(Builder $query , array $imageColumns=[
        'id',
        'article_id',
        'thumbnail' ,
        'alt'
    ]):Builder
    {
        $imageColumns = implode(',',$imageColumns);
        return $query
                ->with('images:'.$imageColumns);
    }
    public function scopeWithAuthor(Builder $query, array $authorColumns=[
        'id' ,
        'name'
    ]):Builder
    {
        $authorColumns = implode(',',$authorColumns);
        return  $query->with('author:'.$authorColumns);
    }
    public function scopeWithAuthorThumbnails(Builder $query,array $columns=[
        'user_id',
        'thumbnail'
    ]):Builder
    {
        $columns = implode(',',$columns);
        return $query
                ->with('author.thumbnails:'.$columns);
    }
    public function scopeWithComments(Builder $query , $columns = [
        'article_id' ,
        'user_id' ,
        'comment' ,
        'created_at'
    ]):Builder
    {
        $columns = implode(',',$columns);
        return  $query->with('comments:'.$columns);
    }
    public function scopeWithCommentWriter(Builder $query , array $columns = [
        'id' ,
        'name' ,
        'created_at'
    ]):Builder
    {
        $columns = implode(',',$columns);
        return $query
                ->with('comments.writer:'.$columns);
    }
    public function scopeWithCommentWriterThumbnails(Builder $query , array $columns = [
        'thumbnail' ,
        'user_id'
    ]):Builder
    {

        return $query
                ->with('comments.writer.thumbnails:thumbnail,user_id');
    }
    public function scopeWithCommentCount(Builder $query):Builder
    {
        return
            $query
                ->withAggregate('comments','id','count');
    }
    public function scopeWhereById(Builder $query,int $id):Builder
    {
        return $query
                ->where('id','=',$id);
    }
    public function scopeWhereBySlug(Builder $query , string $slug):Builder
    {
        return $query
                ->whereRaw(
                    '`slug`=replace(?,"-"," ")' ,
                    [$slug]
                );
    }

}
