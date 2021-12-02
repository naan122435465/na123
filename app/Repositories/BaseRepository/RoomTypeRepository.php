<?php

namespace App\Repositories\BaseRepository;

use App\Repositories\RepositoryInterfaces\RoomTypeInterface;

class RoomTypeRepository extends BaseRepository implements RoomTypeInterface 
{
    public function getModel()
    {
        return \App\Models\RoomType::class;
    }
}