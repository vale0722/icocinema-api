<?php

namespace App\Actions\Movies;

use Illuminate\Database\Eloquent\Model;

class MovieActions
{
    public function storeOrUpdate(array $data, Model $model = null): StoreOrUpdateMovie
    {
         return (new StoreOrUpdateMovie($data, $model))->execute();
    }
}
