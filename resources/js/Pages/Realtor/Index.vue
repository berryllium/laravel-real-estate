<template>
  <h1 class="mb-4 text-3xl">Your Listings</h1>
  <section class="mb-8">
    Filters
  </section>
  <section class="grid grid-cols-1 gap-2 lg:grid-cols-2">
    <Box v-for="listing in listings" :key="listing.id">
      <div class="flex flex-col justify-between gap-2 md:flex-row md:items-center">
        <div>
          <div class="items-center gap-2 xl:flex">
            <Price :price="listing.price" class="text-2xl font-medium" />
            <ListingSpace :listing="listing" />
          </div>
          <ListingAddress :listing="listing" class="text-gray-500" />
        </div>
        <div class="flex items-center gap-1 text-gray-600 dark:text-gray-300">
          <Link :href="route('listing.index')" class="text-xs font-medium button-outline">Preview</Link>
          <Link :href="route('listing.index')" class="text-xs font-medium button-outline">Edit</Link>
          <Link 
            :href="route('realtor.listing.destroy', { listing:listing.id })" 
            as="button" 
            method="delete" 
            class="text-xs font-medium button-outline"
          >
            Delete
          </Link>
        </div>
      </div>
    </Box>
  </section>
</template>

<script setup>
import ListingAddress from '@/Components/ListingAddress.vue'
import ListingSpace from '@/Components/ListingSpace.vue'
import Price from '@/Components/Price.vue'
import Box from '@/Components/UI/Box.vue'
import { Link } from '@inertiajs/vue3'

defineProps({
  listings: Array,
})
</script>