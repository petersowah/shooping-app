export interface Product {
    id: number
    name: string
    price: number
    description: string
    image: string
}

export interface Invoice {
    id: number
    items: Product[]
    total: number
}

