<?php

namespace Database\Seeders;

use App\Lib\RandomDateTime;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Faker\Factory as FakerGenerator;
use App\Models\Article ;
use App\Models\ArticleThumbnail ;
class ArticleThumbnailSeeder extends Seeder
{
    private Faker $faker;
    private Article $article ;
     private ArticleThumbnail $thumbnail;
     private const MAX = 10 ;
     private array $articleIds;
     public function __construct(Article $article , ArticleThumbnail $thumbnail)
     {
         $this->faker = FakerGenerator::create();
         $this->article = $article ;
         $this->thumbnail = $thumbnail;
         $this->articleIds = $this->article->getIds();
     }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->thumbnail->clear();
        $this->createThumbnail(1);
        $this->createThumbnails();
    }
    private function createThumbnail(int $articleId)
    {
        $this->thumbnail->thumbnail = $this->faker->imageUrl;
        $this->thumbnail->alt = $this->getAlt();
        $this->thumbnail->article_id = $articleId;
        $this->thumbnail->created_at = Carbon::now();
        $this->thumbnail->updated_at = RandomDateTime::get();
        $this->thumbnail->save();
        $this->thumbnail= new ArticleThumbnail();
    }
    private function getAlt():string|null
    {
        $chance = $this->faker->boolean;
        if ($chance)
            return $this->faker->words(10, true);
        return null;
    }

    private function createThumbnails():void
    {
        foreach ($this->articleIds as $id)
            for ($counter = 0 ; $counter<rand(1,static::MAX);$counter++)
                $this->createThumbnail($id);
    }
}
