<template>
  <form @submit.prevent="update">
    <div>
      <span>Beds</span>
      <span><input v-model.number="form.beds" type="text" /></span>
    </div>
    <div v-if="form.errors.beds" class="error">{{ form.errors.beds }}</div>
    <div>
      <span>Baths</span>
      <span><input v-model.number="form.baths" type="text" /></span>
    </div>
    <div v-if="form.errors.baths" class="error">{{ form.errors.baths }}</div>
    <div>
      <span>Area</span>
      <span><input v-model.number="form.area" type="text" /></span>
    </div>
    <div v-if="form.errors.area" class="error">{{ form.errors.area }}</div>
    <div>
      <span>City</span>
      <span><input v-model="form.city" type="text" /></span>
    </div>
    <div v-if="form.errors.city" class="error">{{ form.errors.city }}</div>
    <div>
      <span>Code</span>
      <span><input v-model="form.code" type="text" /></span>
    </div>
    <div v-if="form.errors.code" class="error">{{ form.errors.code }}</div>
    <div>
      <span>Street</span>
      <span><input v-model="form.street" type="text" /></span>
    </div>
    <div v-if="form.errors.street" class="error">{{ form.errors.street }}</div>
    <div>
      <span>Street_nr</span>
      <span><input v-model="form.street_nr" type="text" /></span>
    </div>
    <div v-if="form.errors.street_nr" class="error">{{ form.errors.street_nr }}</div>
    <div>
      <span>Price</span>
      <span><input v-model.number="form.price" type="text" /></span>
    </div>
    <div v-if="form.errors.price" class="error">{{ form.errors.price }}</div>
    <div>
      <input type="submit" value="Edit" />
    </div>
  </form>
</template>

<script setup>
import { useForm } from '@inertiajs/vue3'
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
const update = () => form.put(route('listing.update', {listing: props.listing.id}))
</script>

<style scoped>
  div {
    display: flex;
    justify-content: space-between;
    width: 300px;
  }
  .error {
    color: red;
  }
</style>