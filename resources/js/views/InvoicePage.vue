<template>
  <main class="bg-white max-w-5xl mx-auto px-2 lg:px-4 pt-24 pb-10">
    <div class="flex flex-col-reverse lg:flex-row justify-between mb-10">
      <div>
        <h5 class="font-bold">Sender's Name</h5>
        <h5>Sender's Address</h5>
        <h5>Tax Number - 124e24521324</h5>
      </div>
      <div class="mb-5 lg:mb-0">
        <h1 class="text-3xl font-bold">INVOICE</h1>
        <p class="lg:text-right">#S124213</p>
      </div>
    </div>

    <div class="flex flex-col lg:flex-row justify-between mb-10">
      <div>
        <p class="text-gray-500">Bill to</p>
        <h5 class="font-bold">Receiver's Name</h5>
        <h5>Receiver's Address</h5>
        <h5>VAT Number - 124e24521324</h5>
      </div>
      <div class="mt-5 lg:mt-0">
        <h1 class="lg:text-right font-bold">Date: 01-10-24</h1>
        <p class="lg:text-right font-bold">Amount: $400.00</p>
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
        <tr v-for="n in 5" :key="n">
          <td class="p-2">Item {{ n }}</td>
          <td class="text-right p-2">{{ n }}</td>
          <td class="text-right p-2">${{ n }}00.00</td>
          <td class="text-right p-2">${{ n * n }}00.00</td>
        </tr>
      </tbody>
    </table>

    <div class="flex justify-end mt-8">
      <div>
        <p class="text-right mt-5">Subtotal: $1000.00</p>
        <p class="text-right">Tax: $100.00</p>
        <p class="text-right font-bold">Total: $1100.00</p>
      </div>
    </div>
  </main>
</template>
