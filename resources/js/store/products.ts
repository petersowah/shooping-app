import { defineStore } from "pinia";
import { Product } from "../types";
import http from "../api";
export const productStore = defineStore("product", {
  state: () => ({
    products: [
      {
        id: 1,
        name: "A windmil",
        image: "https://assets.codepen.io/12005/windmill.jpg",
      },
      {
        id: 2,
        name: "The Clifton Suspension Bridge",
        image: "https://assets.codepen.io/12005/suspension-bridge.jpg",
      },
      {
        id: 3,
        name: "Sunset and boats",
        image: "https://images.unsplash.com/photo-1716271585655-854131e3d4b6?q=80&w=2827&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
      },
      {
        id: 4,
        name: "a river in the snow",
        image: "https://assets.codepen.io/12005/snowy.jpg",
      },
      {
        id: 5,
        name: "a single checked balloon",
        image: "https://assets.codepen.io/12005/bristol-balloons1.jpg",
      },
      {
        id: 6,
        name: "three hot air balloons in a blue sky",
        image: "https://assets.codepen.io/12005/bristol-balloons2.jpg",
      },
      {
        id: 7,
        name: "View from a hot air balloon of other balloons",
        image: "https://assets.codepen.io/12005/abq-balloons.jpg",
      },
      {
        id: 8,
        name: "a balloon fairground ride",
        image: "https://assets.codepen.io/12005/disney-balloon.jpg",
      },
      {
        id: 9,
        name: "sunrise over a harbor",
        image: "https://assets.codepen.io/12005/sunset.jpg",
      },
      {
        id: 10,
        name: "the Toronto light up sign at night",
        image: "https://images.unsplash.com/photo-1716271585655-854131e3d4b6?q=80&w=2827&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
      },
      {
        id: 11,
        name: "a hot air balloon shaped like a dog",
        image: "https://assets.codepen.io/12005/dog-balloon.jpg",
      },
    ] as Product[],
    product: {} as Product
  }),
  getters: {},
  actions: {
    async getProducts() {
      const { data } = await http.get("/products");
      return this.products = data;
    },
    async getProductById(id: number) {
      const { data } = await http.get(`/products/${id}`);
      return this.product = data;
    }
  },
});
