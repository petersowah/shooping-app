<template>
  <div
      class="flex flex-col lg:flex-row lg:items-center w-full py-5 border-b border-gray-200"
  >
    <div class="w-full lg:w-[400px]">
      <div class="flex justify-between w-full mb-1">
        <h5 class="text-base font-medium">Reference:</h5>
        <p class="text-base">{{ invoice.invoice_number }}</p>
      </div>
      <div class="flex justify-between w-full mb-1">
        <h5 class="text-base font-medium">Due Date:</h5>
        <p class="text-base">{{ invoice.invoice_date }}</p>
      </div>
      <div class="flex justify-between w-full mb-1">
        <h5 class="text-base font-medium">Name:</h5>
        <p class="text-base">{{ invoice.customer?.name }}</p>
      </div>
      <div class="flex justify-between w-full mb-1">
        <h5 class="text-base font-medium">Total:</h5>
        <p class="text-xl font-bold">GHS {{ invoice.total.toFixed(2) }}</p>
      </div>
    </div>

    <div class="flex gap-x-2 mt-2 lg:ml-20">
      <router-link
          :to="{ name: 'invoice', params: { id: invoice.id } }"
          class="bg-black text-white px-4 py-2 rounded-md w-full flex justify-center items-center"
      >
        View
      </router-link>
      <button class="bg-red-500 text-white px-4 py-2 rounded-md">
        <img src="../assets/icons/trash.svg" alt="delete" class="h-7 w-7"/>
      </button>
    </div>
  </div>
</template>
<script setup lang="ts">
import { Invoice } from "../types";

defineProps<{
  invoice: Invoice;
}>();
</script>
