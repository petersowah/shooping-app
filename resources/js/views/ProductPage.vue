<template>
  <main class="bg-white max-w-7xl mx-auto pt-20 pb-10">
    <div class="px-2 lg:px-4 mb-2 block lg:hidden">
      <div class="flex items-center">
        <div class="rounded-full h-14 w-14 bg-gray-200 flex justify-center items-center font-bold text-xl">{{
                store.supplierInitials(product)
            }}</div>
        <div class="ml-4">
          <h1 class="text-xl font-bold">{{  product.supplier?.name }}</h1>
          <p class="text-sm text-gray-500">Visit store</p>
        </div>
      </div>
    </div>
    <div class="lg:grid grid-cols-2">
    <div class="relative">
      <img :src="product.image" :alt="product.name" class="w-full rounded-sm lg:rounded-xl lg:h-[600px] object-cover object-center" />
      <button class="absolute top-2 right-2 p-2 rounded-md hover:bg-white">
        <img src="../assets/icons/heart.svg" class="h-5 w-5" alt="wishlist icon"/>
      </button>
    </div>

    <div class="px-2 lg:px-4">
      <div class="px-2 lg:px-4 mb-2 hidden lg:block">
      <div class="flex items-center">
        <div class="rounded-full h-14 w-14 bg-gray-200 flex justify-center items-center font-bold text-xl">{{
                store.supplierInitials(product)
            }}</div>
        <div class="ml-4">
          <h1 class="text-xl font-bold">{{  product.supplier?.name }}</h1>
          <p class="text-sm text-gray-500">Visit store</p>
        </div>
      </div>
    </div>
      <h1 class="text-2xl font-bold mt-4 lg:mt-0">{{ product.name }}</h1>
      <p class="text-sm text-gray-500 mt-2">
       {{ product.description }}
      </p>
      <p class="text-3xl text-gray-800 mt-2 font-black">
         GHS {{ product.price?.toFixed(2) }}
      </p>

      <button
        class="bg-black text-white text-sm font-medium rounded-md leading-5 justify-center items-center hover:bg-gray-800 p-2 mt-2"
        @click="cart.addToCart(product)"
      >
        Add to cart
      </button>
    </div>
  </div>
  </main>
</template>
<script setup lang="ts">
import { productStore } from '../store/products';
import { cartStore } from "../store/cart";
import { onMounted, computed } from "vue";
import { useRoute } from 'vue-router';

const store = productStore();
const cart = cartStore();
const route = useRoute();
onMounted(() => {
    const id  = parseInt(route.params.id as string, 10);
  store.getProductById(id);
});

const product = computed(() => store.product);
// const inWishList = false;
</script>
