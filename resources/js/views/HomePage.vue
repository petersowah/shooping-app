<template>
  <main class="bg-white max-w-7xl mx-auto px-2 lg:px-4 pt-20 pb-10">
    <div class="gap-x-2 columns-2 lg:columns-4">
      <router-link
        v-for="product in products"
        :key="product.id"
        class="m-0 grid mb-2 grid-rows-1 break-inside-avoid"
        :to="{
          name: 'product',
          params: { id: product.id },
        }"
      >
        <img
          :src="product.image"
          :alt="product.name"
          class="w-full block rounded-xl"
        />

        <div class="pt-2 px-2">
          <h1 class="text-sm font-bold">{{ product.name }}</h1>
          <div class="flex items-center mt-1">
            <div class="rounded-full h-8 w-8 bg-gray-200"></div>
            <p class="text-gray-500 ml-2 text-xs">Seller's name</p>
          </div>
        </div>
      </router-link>
    </div>
  </main>
</template>
<script setup lang="ts">
import { productStore } from '../store/products';

const store = productStore();

const products = store.products;
</script>
