<template>
  <main class="bg-white max-w-7xl mx-auto px-2 lg:px-4 pt-20 pb-10">
    <h2 class="text-2xl font-bold mb-4">Invoices (4)</h2>
    <div
      v-for="n in 4"
      :key="n"
      class="flex flex-col lg:flex-row lg:items-center w-full py-5 border-b border-gray-200"
    >
      <div class="w-full lg:w-[400px]">
        <div class="flex justify-between w-full mb-1">
          <h5 class="text-base font-medium">Reference:</h5>
          <p class="text-base">S123412</p>
        </div>
        <div class="flex justify-between w-full mb-1">
          <h5 class="text-base font-medium">Due Date:</h5>
          <p class="text-base">02-11-24</p>
        </div>
        <div class="flex justify-between w-full mb-1">
          <h5 class="text-base font-medium">Name:</h5>
          <p class="text-base">Peter Mensah</p>
        </div>
        <div class="flex justify-between w-full mb-1">
          <h5 class="text-base font-medium">Total:</h5>
          <p class="text-xl font-bold">$100.00</p>
        </div>
      </div>

      <div class="flex gap-x-2 mt-2 lg:ml-20">
        <router-link
          :to="{ name: 'invoice', params: { id: n } }"
          class="bg-black text-white px-4 py-2 rounded-md w-full flex justify-center items-center"
        >
          View
        </router-link>
        <button class="bg-red-500 text-white px-4 py-2 rounded-md">
          <img src="../assets/icons/trash.svg" alt="delete" class="h-7 w-7" />
        </button>
      </div>
    </div>
  </main>
</template>
<script setup lang="ts">
import { invoiceStore } from "../store/invoices";

const store = invoiceStore();

const invoices = store.invoices;
</script>
