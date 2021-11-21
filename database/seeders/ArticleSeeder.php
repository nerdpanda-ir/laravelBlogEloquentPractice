<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Faker\Factory as FakerGenerator;
use Faker\Generator as Faker;
use App\Models\Article ;
use App\Models\User;
class ArticleSeeder extends Seeder
{
    private Faker $faker;
    private Article $article;
    private User $user;
    private array $userIds;
    private const MAX=10;
    public function __construct(Article $article,User $user)
    {
        $this->faker = FakerGenerator::create();
        $this->article = $article ;
        $this->user = $user;
        $this->userIds = $this->user->getIds();
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->article->clear();
        $this->createArticles();
    }
    private function createArticle(int $userId):void
    {
        $this->article->slug= $this->faker->words(rand(8,11),true);
        $this->article->title= $this->faker->words(4,true);
        $this->article->summary= $this->faker->words(30,true);
        $this->article->body=$this->faker->words(rand(1000,2000),true);
        $this->article->user_id= $userId;
        $this->article->active= $this->faker->boolean;
        $this->article->created_at= Carbon::now();
        $this->article->updated_at =  $this->getRandomDate();
        $this->article->published_at= $this->getRandomDate();
        $this->article->save();
        $this->article= new Article();
    }
    private function getRandomDate():null|Carbon
    {
        $chance = $this->faker->boolean;
        if ($chance)
            return Carbon::now()->addSeconds(rand(100,10000));
        return null;
    }

    private function createArticles():void
    {
        foreach ($this->userIds as $id)
            for ($counter = 0 ;$counter<rand(0,static::MAX); $counter++)
                $this->createArticle($id);
    }
}
