<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\Luckydraw;
class MobileCollection extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'slug' => $this->slug,
            'price_pkr' => $this->price_pkr,
            'price_usd' => $this->price_usd,
            'short_description' => $this->short_description,
            'long_description' => $this->long_description,
            'brand_id' => $this->brand_id,
            'category_id' => $this->category_id,
            'status_id' => $this->status_id,
            'operating_system_id' => $this->operating_system_id,
        ];
    }
}
