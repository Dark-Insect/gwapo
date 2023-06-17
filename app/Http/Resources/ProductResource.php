<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Storage;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'=> $this->id,
            'firname'=> $this->firname,
            'midname'=> $this->midname,
            'lasname'=> $this->lasname,
            'birthdate'=> $this->birthdate,
            'street'=> $this->street,
            'barangay'=> $this->barangay,
            'status' => $this->status,
            'town'=> $this->town,
            'fname'=> $this->fname,
            'mname'=> $this->mname,
            
        ];
    }
}
