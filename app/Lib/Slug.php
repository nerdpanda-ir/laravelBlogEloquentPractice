<?php namespace App\Lib ; ?>
<?php
class Slug
{
    public static function getSlugWithOutDashed(string $slug)
    {
        return str_replace('-',' ',$slug);
    }
}
