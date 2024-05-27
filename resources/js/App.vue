<template>
  <app-header/>
  <router-view/>
  <app-footer/>
</template>

<script setup lang="ts">
import AppHeader from './components/AppHeader.vue';
import AppFooter from './components/AppFooter.vue';
</script>

<style scoped>
</style>
