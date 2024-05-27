import { defineStore } from "pinia";
import { Product } from "../types";
export const cartStore = defineStore("cart", {
  state: () => ({
    cart: [] as Product[],
  }),
  getters: {
    cartCount: (state) => state.cart.length || 0
  },
  actions: {
    addToCart(product: Product) {
      this.cart.push(product);
      window.alert("Added to cart");
    }
  },
});
