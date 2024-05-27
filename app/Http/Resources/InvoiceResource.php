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
            'invoice_number' => $this->invoice_number,
            'invoice_items' => $this->invoiceItems,
            'invoice_date' => $this->invoice_date,
            'status' => $this->status,
            'total' => $this->total,
            'customer' => $this->customer,
            'supplier' => $this->supplier,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
