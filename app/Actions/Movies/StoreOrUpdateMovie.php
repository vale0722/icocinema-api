<?php

namespace App\Actions\Movies;

use App\Actions\StoreOrUpdateModel;
use App\Helpers\FilesHelper;
use App\Models\Movie;
use Illuminate\Support\Arr;
use phpDocumentor\Reflection\Types\Static_;

class StoreOrUpdateMovie extends StoreOrUpdateModel
{
     public function execute(): self
    {
        /** @var Movie model */
        $this->model = $this->model ?? new Movie();
        $this->model->name = $this->data['name'];
        $this->model->duration = $this->data['duration'];
        $this->model->description = $this->data['description'];
        $this->model->min_age = $this->data['min_age'];
        $this->model->release_date = $this->data['release_date'];
        $this->model->genre_id = $this->data['genre_id'];

        if (Arr::has($this->data, 'image')) {
            $file = FilesHelper::save('movies', Arr::get($this->data, 'image'));
            $this->model->image = $file;
        }
        $this->model->save();

        return $this;
    }
}
