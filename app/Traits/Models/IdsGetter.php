<?php namespace App\Traits\Models ;?>
<?php

use Illuminate\Database\Eloquent\Collection;

trait IdsGetter
{
    public function getIds():array
    {
        $result = [] ;
        /** @var Collection $items */
        $items =$this->get('id');
        $items->each(function (self $item) use (&$result){
            array_push(
                $result,
                $item->getAttribute('id')
            );
        });
        return $result;
    }
}
