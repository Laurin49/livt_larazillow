<template>
  <div class="grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 2xl:grid-cols-5">
    <Listing v-for="listing in listings" :key="listing.id" :listing="listing" />
  </div>
</template>

<script setup>
import Listing from '@/Pages/Listing/Index/Components/Listing.vue'
defineProps({
  listings: Array,
})
</script>
