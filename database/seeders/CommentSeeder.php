<?php

namespace Database\Seeders;

use App\Lib\RandomDateTime;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Faker\Factory as FakerGenerator;
use App\Models\User ;
use App\Models\Article;
use App\Models\Comment;
class CommentSeeder extends Seeder
{
    private Faker $faker;
    private User $user;
    private Article $article;
    private Comment $comment;
    private array $userIds;
    private array $articleIds;
    private const MAX=5;
    public function __construct(
        User $user , Article $article , Comment $comment
    )
    {
        $this->faker = FakerGenerator::create();
        $this->user = $user ;
        $this->article = $article ;
        $this->comment = $comment;
        $this->articleIds = $article->getIds();
        $this->userIds = $this->user->getIds();
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->comment->clear();
        $this->createComments();
    }
    private function createComment(int $userId , int $articleId):void
    {
        $this->comment->comment = $this->faker->words(rand(50,255),true);
        $this->comment->active= $this->faker->boolean;
        $this->comment->user_id = $userId;
        $this->comment->article_id = $articleId;
        $this->comment->created_at = Carbon::now()->format(RandomDateTime::DATE_FORMAT);
        $this->comment->updated_at = RandomDateTime::get();
        $this->comment->published_at = RandomDateTime::get();
        $this->comment->save();
        $this->comment = new Comment();
    }
    private function createComments():void
    {
        foreach ($this->articleIds as $articleId)
            if ($this->faker->boolean)
                foreach ($this->userIds as $userId)
                    if ($this->faker->boolean)
                        for($counter = 0 ; $counter<rand(1,static::MAX) ; $counter++)
                            $this->createComment($userId,$articleId);

    }

}
