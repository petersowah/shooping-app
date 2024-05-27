<template>
  <header
    class="fixed inset-x-0 z-50 w-full bg-white border border-gray-100 border-1"
  >
    <div
      class="flex items-center justify-between max-w-7xl mx-auto px-2 lg:px-4 py-2"
    >
      <router-link to="/" class="text-4xl font-black">Logo</router-link>
      <div class="flex gap-x-2">
        <router-link
          class="flex text-sm font-medium rounded-md leading-5 justify-center items-center hover:bg-gray-200 p-2"
          to="/invoices"
        >
          Invoices
          <img src="../assets/icons/user.svg" class="h-5 w-5 ml-2" />
        </router-link>
        <router-link
          class="flex text-sm font-medium rounded-md leading-5 justify-center items-center hover:bg-gray-200 p-2 relative"
          to="/cart"
        >
          Cart
          <img src="../assets/icons/cart.svg" class="h-5 w-5 ml-2" />
          <span
            v-if="store.cartCount"
            class="absolute -top-2 -right-2 bg-red-500 text-white rounded-full h-5 w-5 flex items-center justify-center"
            >{{ store.cartCount }}</span>
        </router-link>
      </div>
    </div>
  </header>
</template>
<script setup lang="">
import { cartStore } from '../store/cart';

const store = cartStore();
</script>