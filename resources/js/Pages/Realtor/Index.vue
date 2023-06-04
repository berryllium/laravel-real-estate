<template>
  <h1 class="mb-4 text-3xl">Your Listings</h1>
  <section class="mb-8">
    <RealtorFilters :filters="filters" />
  </section>
  <section class="grid grid-cols-1 gap-2 lg:grid-cols-2">
    <Box v-for="listing in listings.data" :key="listing.id" :class="{'border-dashed': listing.deleted_at}">
      <div class="flex flex-col justify-between gap-2 md:flex-row md:items-center">
        <div>
          <div class="items-center gap-2 xl:flex">
            <Price :price="listing.price" class="text-2xl font-medium" />
            <ListingSpace :listing="listing" />
          </div>
          <ListingAddress :listing="listing" class="text-gray-500" />
        </div>
        <div class="flex items-center gap-1 text-gray-600 dark:text-gray-300">
          <Link :href="route('listing.show', { listing:listing.id })" class="text-xs font-medium button-outline">Preview</Link>
          <Link :href="route('realtor.listing.edit', { listing:listing.id })" class="text-xs font-medium button-outline">Edit</Link>
          <Link 
            v-if="!listing.deleted_at"
            :href="route('realtor.listing.destroy', { listing:listing.id })" 
            as="button" 
            method="delete" 
            class="text-xs font-medium button-outline"
          >
            Delete
          </Link>
          <Link 
            v-else
            :href="route('realtor.listing.restore', { listing:listing.id })" 
            as="button" 
            method="put" 
            class="text-xs font-medium button-outline"
          >
            Restore
          </Link>
        </div>
      </div>
    </Box>
  </section>
  <section v-if="listings.data.length" class="w-full flex justify-center mt-4 mb-4">
    <Pagination :links="listings.links" />
  </section>
</template>

<script setup>
import ListingAddress from '@/Components/ListingAddress.vue'
import ListingSpace from '@/Components/ListingSpace.vue'
import Price from '@/Components/Price.vue'
import Box from '@/Components/UI/Box.vue'
import { Link } from '@inertiajs/vue3'
import RealtorFilters from '@/Pages/Realtor/Index/Components/RealtorFilters.vue'
import Pagination from '@/Components/UI/Pagination.vue'

defineProps({
  listings: Object,
  filters: Object,
})
</script>