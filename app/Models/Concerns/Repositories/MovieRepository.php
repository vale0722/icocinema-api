<?php

namespace App\Models\Concerns\Repositories;

use App\Actions\Movies\MovieActions;

trait MovieRepository
{
    public static function actions(): MovieActions
    {
        return new MovieActions();
    }
}
