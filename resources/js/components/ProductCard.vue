<script setup>
    const defineProps = ({
        bannerUrl: String,
    });
</script>

<template>
    <div>
        <img class="h-auto max-w-full rounded-lg" :src="bannerUrl" alt="product image" />
    </div>
</template>

<style scoped>

</style>
