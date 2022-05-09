<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PokeneaImageResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'image' => $this->resource['image'],
            'phrase' => $this->resource['phrase']
        ];
    }
}
