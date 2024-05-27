import { defineStore } from "pinia";
import { Invoice } from "../types";
import http from "../api";
export const invoiceStore = defineStore("invoice", {
  state: () => ({
    invoices: [] as Invoice[],
    invoice: {} as Invoice,
  }),
  getters: {},
  actions: {
    async fetchInvoices() {
      const {data} = await http.get("/invoices");
      return this.invoices = data
    },
    async fetchInvoiceById(id: number) {
      const {data} = await http.get(`/invoices/${id}`);
      return this.invoice = data
    },
  },
});
