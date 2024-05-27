<template>
  <main class="bg-white max-w-7xl mx-auto px-2 lg:px-4 pt-20 pb-10">
    <router-link
      :to="{ name: 'product', params: { id: n } }"
      v-for="n in 3"
      :key="n"
      class="flex flex-col lg:flex-row gap-x-5 py-5 border-b border-gray-200"
    >
      <img
        src="https://assets.codepen.io/12005/suspension-bridge.jpg"
        alt="test"
        class=" w-full lg:w-[230px] h-[300px] lg:h-[282px] rounded-xl"
      />
      <div class="mt-5 lg:mt-0">
        <h1 class="text-2xl font-bold">Product {{ n }}</h1>
        <p class="text-gray-500">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec et nunc
          vel felis.
        </p>
        <p class="text-gray-500">Quantity: 1</p>
        <p class="text-gray-500">Price: ${{ n }}00.00</p>
      </div>
    </router-link>
  </main>
</template>
