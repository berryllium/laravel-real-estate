<template>
  <header class="border-b border-gray-200 dark:border-gray-900 bg-white dark:bg-gray-800 w-full">
    <div class="container mx-auto">
      <nav class="p-4 flex items-center justify-between">
        <div class="text-lg font-medium">
          <Link :href="route('listing.index')">Listings</Link>
        </div>
        <div class="text-xl text-indigo-600 dark:text-indigo-300 font-bold text-center">
          <Link :href="route('listing.index')">LaraZillow</Link>
        </div>
        <div v-if="user" class="flex items-center gap-4">
          <div class="text-sm text-gray-500">{{ user.name }}</div>
          <Link :href="route('listing.create')" class="button-primary">+ New Listing</Link>
          <div>
            <Link :href="route('logout')" method="delete" as="button">Logout</Link>
          </div>
        </div>
        <div v-else>
          <Link :href="route('login')">Sign In</Link>
        </div>
      </nav>
    </div>
  </header>

  <main class="container mx-auto p-4 w-full">
    <div v-if="flashSuccess" class="mb-4 border rounded-md shadow-md border-green-300 dark:border-green-800 bg-green-50 dark:br-green-900 p-2">
      {{ flashSuccess }}
    </div>
    <slot />
  </main>
</template>

<script setup>

import {computed} from 'vue'
import {Link, usePage} from '@inertiajs/vue3'
const page = usePage()
const flashSuccess = computed(
  () => page.props.flash.success,
)
const user = computed(
  () => page.props.user,
)
</script>