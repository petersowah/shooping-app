import { defineStore } from "pinia";
import {Invoice, InvoiceItem} from "../types";
import http from "../api";
export const invoiceStore = defineStore("invoice", {
  state: () => ({
    invoices: [] as Invoice[],
    invoice: {} as Invoice,
      loading: false,
  }),
  getters: {
      totalPrice() {
          return this.invoice.invoice_items?.reduce((acc:number, item:InvoiceItem) => {
              return acc + item.product.price * item.quantity;
          }, 0) || 0;
      },
      tax() {
          return this.totalPrice * 0.15;
      },
        grandTotal() {
            return (this.totalPrice + this.tax).toFixed(2);
        }
  },
  actions: {
    async getInvoices() {
        this.loading = true;
      const {data} = await http.get("/invoices");
        this.loading = false;
      return this.invoices = data
    },
    async getInvoiceById(id: number) {
        this.loading = true;
      const {data} = await http.get(`/invoices/${id}`);
        this.loading = false;
      return this.invoice = data
    },
  },
});
