<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class InvoiceResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'customer' => $this->customer,
            'supplier' => $this->supplier,
            'invoice_items' => $this->invoice_items,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
