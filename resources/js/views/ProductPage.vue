<template>
  <main class="bg-white max-w-7xl mx-auto pt-20 pb-10">
    <div class="px-2 lg:px-4 mb-2 block lg:hidden">
      <div class="flex items-center">
        <div class="rounded-full h-14 w-14 bg-gray-200"></div>
        <div class="ml-4">
          <h1 class="text-xl font-bold">Seller's name</h1>
          <p class="text-sm text-gray-500">Visit store</p>
        </div>
      </div>
    </div>
    <div class="lg:grid grid-cols-2">
    <div class="relative">
      <img :src="product.image" :alt="product.name" class="w-full rounded-sm lg:rounded-xl lg:h-[600px] object-cover object-center" />
      <button class="absolute top-2 right-2 p-2 rounded-md hover:bg-white">
        <img src="../assets/icons/heart.svg" class="h-5 w-5" />
      </button>
    </div>

    <div class="px-2 lg:px-4">
      <div class="px-2 lg:px-4 mb-2 hidden lg:block">
      <div class="flex items-center">
        <div class="rounded-full h-14 w-14 bg-gray-200"></div>
        <div class="ml-4">
          <h1 class="text-xl font-bold">Seller's name</h1>
          <p class="text-sm text-gray-500">Visit store</p>
        </div>
      </div>
    </div>
      <h1 class="text-2xl font-bold mt-4 lg:mt-0">{{ product.name }}</h1>
      <p class="text-sm text-gray-500 mt-2">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam,
        voluptates. Lorem ipsum dolor sit amet consectetur adipisicing elit.
        Quisquam, voluptates. Lorem ipsum dolor sit amet consectetur adipisicing
        elit. Quisquam, voluptates. Lorem ipsum dolor sit amet consectetur
        adipisicing elit. Quisquam, voluptates. Lorem ipsum dolor sit amet
        consectetur adipisicing elit. Quisquam, voluptates. Lorem ipsum dolor
        sit amet consectetur adipisicing elit. Quisquam, voluptates.
      </p>
      <p class="text-3xl text-gray-800 mt-2 font-black">
        $100
        <sup class="text-sm">.99</sup>
      </p>
      <button
        class="bg-black text-white text-sm font-medium rounded-md leading-5 justify-center items-center hover:bg-gray-800 p-2 mt-2"
        @click="store.addToCart(product)"
      >
        Add to cart
      </button>
    </div>
  </div>
  </main>
</template>
<script setup lang="ts">
import { cartStore } from '../store/cart';

const store = cartStore();

const product = {
  name: "a hot air balloon shaped like a dog",
  image: "https://assets.codepen.io/12005/dog-balloon.jpg",
};
// const inWishList = false;
</script>
