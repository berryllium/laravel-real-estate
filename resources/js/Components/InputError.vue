<template>
  <div class="input-error">{{ props.error }}</div>
</template>

<script setup>
const props = defineProps({
  error: String,
})
</script>