<?php

namespace App\Http\Controllers;

use App\Http\Resources\InvoiceResource;
use App\Models\Invoice;

class InvoiceController extends Controller
{
    public function index()
    {
        $invoices = Invoice::query()->with(['customer', 'supplier'])->get();

        return InvoiceResource::collection($invoices);
    }

    public function show(Invoice $invoice)
    {
        return new InvoiceResource($invoice);
    }
}
