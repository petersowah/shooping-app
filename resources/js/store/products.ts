import { defineStore } from "pinia";
import { Product } from "../types";
import http from "../api";
export const productStore = defineStore("product", {
  state: () => ({
    products: [] as Product[],
    product: {} as Product,
      loading: false,
  }),
  getters: {
  },
  actions: {
    async getProducts() {
        this.loading = true;
        const { data } = await http.get("/products");
        this.loading = false;
        return this.products = data;
    },
    async getProductById(id: number) {
        this.loading = true;
      const { data } = await http.get(`/products/${id}`);
        this.loading = false;
      return this.product = data;
    },
      supplierInitials(product: Product) {
        return product.supplier?.name.split(" ").map((name: string) => name[0]).join("");
      }
  },
});
