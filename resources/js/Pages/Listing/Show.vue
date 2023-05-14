<template>
  <div>
    <Address :listing="listing" />
  </div>
</template>

<script setup>
import Address from '@/Components/Address.vue'
defineProps({
  listing: Array,
})
</script>