<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class PokeneaImageCollection extends ResourceCollection
{
    public function toArray($request)
    {
        return [
            'data' => $this->collection,
            'additionalData' => [
                'api_version' => '1.0.0',
                'ip' => $_SERVER['REMOTE_ADDR'],
                'docker_container' => gethostbyname(gethostname()),
            ],
        ];
    }
}