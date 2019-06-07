<?php

namespace App\Repositories;

use App\Models\TypeImage;

class TypeImageRepository extends BaseRepository
{
    /**
     * Create a new TypeImageRepository instance.
     *
     * @param TypeImage $typeimage
     */
    public function __construct(TypeImage $typeimage)
    {
        $this->model = $typeimage;
    }
}
