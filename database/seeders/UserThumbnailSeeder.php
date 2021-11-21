<?php

namespace Database\Seeders;

use App\Lib\RandomDateTime;
use App\Models\User;
use App\Models\UserThumbnail;
use Illuminate\Database\Seeder;
use Faker\Factory as FakerGenerator ;
use Faker\Generator as Faker;

class UserThumbnailSeeder extends Seeder
{
    private const MAX = 15 ;
    private Faker $faker;
    private User $user;
    private array $userIds;
    private UserThumbnail $thumbnail ;
    public function __construct(User $user , UserThumbnail $thumbnail)
    {
        $this->faker=FakerGenerator::create();
        $this->user = $user ;
        $this->userIds= $this->user->getIds();
        $this->thumbnail = $thumbnail;
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->thumbnail->clear();
        $this->createThumbnails();
    }
    private function createThumbnail(int $userId):void
    {
        $this->thumbnail->thumbnail= $this->faker->imageUrl();
        $this->thumbnail->setAttribute('user_id',$userId);
        $this->thumbnail->created_at = now()->format(RandomDateTime::DATE_FORMAT);
        $this->thumbnail->updated_at = RandomDateTime::get();
        $this->thumbnail->save();
        $this->thumbnail = new UserThumbnail();
    }
    private function createThumbnails():void
    {
        foreach ($this->userIds as $userId)
            for ($counter = 0 ; $counter < rand(1,static::MAX) ; $counter++)
                $this->createThumbnail($userId);
    }
}
