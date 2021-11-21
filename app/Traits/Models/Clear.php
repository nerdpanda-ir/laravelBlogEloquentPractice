<?php namespace App\Traits\Models; ?>
<?php

use Illuminate\Support\Facades\Schema;

trait Clear
{
    public function clear():void
    {
        Schema::disableForeignKeyConstraints();
        $this->truncate();
        Schema::enableForeignKeyConstraints();
    }
}
