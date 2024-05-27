<template>
  <main class="bg-white max-w-5xl mx-auto px-2 lg:px-4 pt-24 pb-10">
    <div class="flex flex-col-reverse lg:flex-row justify-between mb-10">
      <div>
        <h5 class="font-bold">{{ invoice.supplier?.name}}</h5>
        <h5>{{ invoice.supplier?.address }}</h5>
      </div>
      <div class="mb-5 lg:mb-0">
        <h1 class="text-3xl font-bold">INVOICE</h1>
        <p class="lg:text-right">#{{ invoice.invoice_number }}</p>
      </div>
    </div>

    <div class="flex flex-col lg:flex-row justify-between mb-10">
      <div>
        <p class="text-gray-500">Bill to</p>
        <h5 class="font-bold">{{ invoice.customer?.name }}</h5>
        <h5>{{ invoice.customer?.address}}</h5>
      </div>
      <div class="mt-5 lg:mt-0">
        <h1 class="lg:text-right font-bold">Date: {{ invoice.invoice_date }}</h1>
        <p class="lg:text-right font-bold">Amount: GHS {{ invoice.total?.toFixed(2) }}</p>
      </div>
    </div>
    <table class="w-full">
      <thead class="bg-gray-700">
        <tr>
          <th class="text-left text-white p-2">Item</th>
          <th class="text-right text-white p-2">Quantity</th>
          <th class="text-right text-white p-2">Price</th>
          <th class="text-right text-white p-2">Amount</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="invoice_item in invoice.invoice_items" :key="invoice_item.id">
          <td class="p-2">Item {{ invoice_item.product.name }}</td>
          <td class="text-right p-2">{{ invoice_item.quantity }}</td>
          <td class="text-right p-2">GHS {{ invoice_item.product.price.toFixed(2) }}</td>
          <td class="text-right p-2">GHS {{ (invoice_item.quantity * invoice_item.product.price).toFixed(2) }} </td>
        </tr>
      </tbody>
    </table>

    <div class="flex justify-end mt-8">
      <div>
        <p class="text-right mt-5">Subtotal: GHS {{ store.totalPrice.toFixed(2) }}</p>
        <p class="text-right">Tax: GHS {{ store.tax.toFixed(2) }}</p>
        <p class="text-right font-bold">Total: GHS {{ store.grandTotal }}</p>
      </div>
    </div>
  </main>
</template>

<script setup lang="ts">
import { onMounted, computed } from "vue";
import {invoiceStore} from "../store/invoices";
import {useRoute} from "vue-router";

const store = invoiceStore();
const route = useRoute();

onMounted(() => {
    const id = parseInt(route.params.id as string, 10);
    store.getInvoiceById(id);
});

const invoice = computed(() => store.invoice);
</script>
