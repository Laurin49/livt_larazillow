<template>
  <Link href="/">Main Page</Link>&nbsp;&nbsp;
  <Link href="/listing">Listings</Link>&nbsp;&nbsp;
  <Link href="/listing/create">Create Listings</Link>&nbsp;&nbsp;
  <hr />
  <div v-if="flashSuccess" class="success">
    {{ flashSuccess }}
  </div>
  <slot />
</template>
<script setup>
import { computed } from 'vue'
import { Link, usePage } from '@inertiajs/inertia-vue3'

// page.props.value.flash.success
const page = usePage()
const flashSuccess = computed(
  () => page.props.value.flash.success,
)
</script>
<style scoped>
.success {
  background-color: green;
  color: white;
}
</style>