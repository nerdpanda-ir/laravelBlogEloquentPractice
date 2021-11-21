<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as FakerGenerator;
use Faker\Generator as Faker;
use App\Models\User;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    private Faker $faker;
    private User $user;
    private const COUNT = 10 ;
    public function __construct(User $user)
    {
        $this->faker = FakerGenerator::create();
        $this->user = $user;
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->user->clear();
        $this->createUsers();
    }
    private function createUser():void
    {
        $this->user->name = $this->faker->name();
        $this->user->email = $this->faker->email;
        $this->user->email_verified_at = $this->getEmailVerify();
        $this->user->password= Hash::make($this->faker->password);
        $this->user->remember_token = $this->getRememberToken();
        $this->user->created_at = Carbon::now();
        $this->user->updated_at = $this->getUpdatedAt();
        $this->user->save();
        $this->user= new User();
    }

    private function getEmailVerify(): null|Carbon
    {
        if ($this->faker->boolean)
            return Carbon::now();
        return null;
    }
    private function getRememberToken():string|null
    {
        if ($this->faker->boolean)
            return Str::random(100);
        return null;
    }
    private function getUpdatedAt():null|Carbon
    {
        $chance = $this->faker->boolean;
        if ($chance)
            return Carbon::now()->addSeconds(rand(3600,65535));
        return null;
    }
    private function createUsers():void
    {
        for ($counter = 0 ; $counter<static::COUNT; $counter++)
            $this->createUser();
    }
}
