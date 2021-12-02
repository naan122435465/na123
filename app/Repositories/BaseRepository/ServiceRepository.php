<?php

namespace App\Repositories\BaseRepository;

use App\Repositories\RepositoryInterfaces\ServiceInterface;

class ServiceRepository extends BaseRepository implements ServiceInterface
{
    public function getModel()
    {
        return \App\Models\Service::class;
    }
}