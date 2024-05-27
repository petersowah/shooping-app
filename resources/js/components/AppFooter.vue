<template>
  <footer class="bg-white border border-gray-100 border-1">
    <div
      class="max-w-7xl mx-auto px-2 lg:px-4 py-6 flex justify-between items-center"
    >
      <router-link to="/">
        <h1 class="font-black text-4xl tracking-wide text-b">LOGO</h1>
      </router-link>
      <p class="text-xs text-gray-500">@{{ new Date().getFullYear() }} peter-logo</p>
    </div>
  </footer>
</template>
