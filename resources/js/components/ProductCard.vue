<template>
  <router-link
      class="m-0 grid mb-2 grid-rows-1 break-inside-avoid border border-gray-200 rounded-xl overflow-hidden pb-2"
      :to="{
          name: 'product',
          params: { id: product.id },
        }"
  >
    <img
        :src="product.image"
        :alt="product.name"
        class="w-full block "
    />

    <div class="pt-2 px-2">
      <h1 class="text-sm font-bold">{{ product.name }}</h1>
      <div class="flex items-center mt-1">
        <div class="rounded-full h-8 w-8 bg-gray-200 flex justify-center items-center font-bold ">
            {{ store.supplierInitials(product) }}
        </div>
        <p class="text-gray-500 ml-2 text-xs">{{ product.supplier?.name }}</p>
      </div>
    </div>
  </router-link>
</template>
<script setup lang="ts">
import { Product } from '../types';
import { productStore } from '../store/products';

const store = productStore();

defineProps<{
  product: Product;
}>();
</script>
