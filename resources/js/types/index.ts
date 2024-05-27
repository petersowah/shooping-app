export interface Product {
    id: number
    name: string
    slug: string
    price: number
    image: string
    description: string
    sku: string
    active: boolean
    quantity: number
    supplier: Supplier
}

export interface Supplier {
    id: number
    name: string
    email: string
    phone: string
    address: string
    code: string
}

export interface Customer{
    id: number
    name: string
    email: string
    phone: string
    address: string
}

export interface Invoice {
    id: number
    invoice_number: string
    invoice_items: InvoiceItem[]
    invoice_date: string
    status: string
    total: number
    customer: Customer
    supplier: Supplier
}

export interface InvoiceItem {
    product: Product
    invoice: Invoice
    quantity: number
}

