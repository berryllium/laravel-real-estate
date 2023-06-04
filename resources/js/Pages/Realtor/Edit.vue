<template>
  <form @submit.prevent="update">
    <div class="grid grid-cols-6 gap-4">
      <div class="col-span-2">
        <label class="label">Beds</label>
        <input v-model.number="form.beds" type="text" class="input" />
        <InputError v-if="form.errors.beds" :error="form.errors.beds" />
      </div>
      
      <div class="col-span-2">
        <label class="label">Baths</label>
        <input v-model.number="form.baths" type="text" class="input" />
        <InputError v-if="form.errors.baths" :error="form.errors.baths" />
      </div>
      
      <div class="col-span-2">
        <label class="label">Area</label>
        <input v-model.number="form.area" type="text" class="input" />
        <InputError v-if="form.errors.area" :error="form.errors.area" />
      </div>
      
      <div class="col-span-4">
        <label class="label">City</label>
        <input v-model.number="form.city" type="text" class="input" />
        <InputError v-if="form.errors.city" :error="form.errors.city" />
      </div>
      
      <div class="col-span-2">
        <label class="label">Code</label>
        <input v-model.number="form.code" type="text" class="input" />
        <InputError v-if="form.errors.code" :error="form.errors.code" />
      </div>
      
      <div class="col-span-4">
        <label class="label">Street</label>
        <input v-model.number="form.street" type="text" class="input" />
        <InputError v-if="form.errors.street" :error="form.errors.street" />
      </div>
      
      <div class="col-span-2">
        <label class="label">Street nr</label>
        <input v-model.number="form.street_nr" type="text" class="input" />
        <InputError v-if="form.errors.street_nr" :error="form.errors.street_nr" />
      </div>
      
      <div class="col-span-6">
        <label class="label">Price</label>
        <input v-model.number="form.price" type="text" class="input" />
        <InputError v-if="form.errors.price" :error="form.errors.price" />
      </div>
      <div>
        <input type="submit" value="Edit" class="button-primary" />
      </div>
    </div>
  </form>
</template>

<script setup>
import { useForm } from '@inertiajs/vue3'
import InputError from '@/Components/InputError.vue'
const props = defineProps({
  listing: Object,
})
const form = new useForm({
  beds: props.listing.beds,
  baths: props.listing.baths,
  area: props.listing.area,
  city: props.listing.city,
  street: props.listing.street,
  code: props.listing.code,
  street_nr: props.listing.street_nr,
  price: props.listing.price,
})
const update = () => form.put(route('realtor.listing.update', {listing: props.listing.id}))
</script>