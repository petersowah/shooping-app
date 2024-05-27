<template>
  <main class="bg-white max-w-7xl mx-auto px-2 lg:px-4 pt-20 pb-10">
    <div class="gap-x-2 columns-2 lg:columns-4">
        <ProductCard v-for="product in products" :key="product.id" :product="product"/>
    </div>
  </main>
</template>
<script setup lang="ts">
import {productStore} from '../store/products';
import ProductCard from "../components/ProductCard.vue";
import {onMounted, computed} from "vue";

const store = productStore();

onMounted(() => {
    store.getProducts();
});

const products = computed(() => store.products);
</script>
