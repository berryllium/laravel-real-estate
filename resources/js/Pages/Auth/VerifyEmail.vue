<template>
  <div>You need to verify email</div>
  <div>
    <Link
      :href="route('verification.send', {})"
      method="post"
      as="button"
      class="text-indigo-600 dark:text-indigo-400"
    >
      Resend
    </Link>
  </div>
</template>

<script setup>
import {Link} from '@inertiajs/vue3'
</script>