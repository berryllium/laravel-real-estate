<!-- eslint-disable vue/html-indent -->
<template>
  <form @submit.prevent="create">
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
        <input type="submit" value="Create" class="button-primary" />
      </div>
    </div>
  </form>
</template>

<script setup>
import { useForm } from '@inertiajs/vue3'
import InputError from '@/Components/InputError.vue'
const form = new useForm({
  beds: 0,
  baths: 0,
  area: 0,
  city: null,
  street: null,
  code: null,
  street_nr: null,
  price: 0,
})
const create = () => form.post(route('listing.store'))
</script>
