<template>
  <Box>
    <template #header>Make an offer</template>
    <div>
      <form @submit.prevent="makeOffer">
        <input v-model.number="form.amount" type="text" class="text-gray-500" />
        <input
          v-model.number="form.amount"
          type="range" :min="min" :max="max" step="10000"
          class="mt-2 w-full h-4 bg-gray-400 dark:bg-gray-700 rounded-lg appereance-none cursor-pointer"
        />

        <button type="submit" class="button-outline mt-2 w-full text-sm">
          Make an offer
        </button>
      </form>
    </div>
    <div class="flex justify-between text-gray-500 mt-2">
      <div>Difference</div>
      <Price :price="difference" />
    </div>
  </Box>
</template>

<script setup>
import Price from '@/Components/Price.vue'
import Box from '@/Components/UI/Box.vue'
import { useForm } from '@inertiajs/vue3'
import { computed } from 'vue'

const props = defineProps({
  listingId: Number,
  price: Number,
})

const form = useForm({
  amount: props.price,
})

const difference = computed(() => form.amount - props.price)

const min = computed(() => Math.round(props.price / 2))
const max = computed(() => Math.round(props.price * 2))

const makeOffer = () => form.post(route('listing.offer.store', {listing: props.listingId}))
</script>