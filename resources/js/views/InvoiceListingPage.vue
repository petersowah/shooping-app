<template>
  <main class="bg-white max-w-7xl mx-auto px-2 lg:px-4 pt-20 pb-10">
    <h2 class="text-2xl font-bold mb-4">Invoices ({{ invoices.length }})</h2>
      <InvoiceItem v-for="invoice in invoices" :key="invoice.id" :invoice/>
  </main>
</template>
<script setup lang="ts">
import {invoiceStore} from "../store/invoices";
import InvoiceItem from "../components/InvoiceItem.vue";
import {onMounted, computed} from "vue";

const store = invoiceStore();

onMounted(() => {
    store.getInvoices();
});

const invoices = computed(() => store.invoices);
</script>
