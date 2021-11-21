<?php namespace App\Lib ; ?>
<?php
use Faker\Factory as FakerGenerator ;
use Faker\Generator as Faker;
use Illuminate\Support\Carbon;

class RandomDateTime
{
    private static Faker $faker;
    public const DATE_FORMAT = 'Y-m-d H:i:s';
    private static function createFakerInstance():void
    {
        if (!isset(static::$faker))
            static::$faker = FakerGenerator::create();
    }
    public static function get():string|null
    {
        static::createFakerInstance();
        if(static::$faker->boolean)
            return Carbon::now()
                    ->addSeconds(rand(60,6000))
                    ->format(static::DATE_FORMAT);
        return null;
    }
}
