<template>
  <form @submit.prevent="register">
    <div class="w-1/2 mx-auto">
      <div>
        <div class="mt-4">
          <label for="name" class="label">Your name</label>
          <input id="name" v-model="form.name" type="text" class="input" />
          <div class="input-error">{{ form.errors.name }}</div>
        </div>
        <div class="mt-4">
          <label for="email" class="label">E-mail</label>
          <input id="email" v-model="form.email" type="text" class="input" />
          <div class="input-error">{{ form.errors.email }}</div>
        </div>
        <div class="mt-4">
          <label for="password" class="label">Password</label>
          <input id="password" v-model="form.password" type="password" class="input" />
          <div class="input-error">{{ form.errors.password }}</div>
        </div>
        <div class="mt-4">
          <label for="password_confirmation" class="label">Confirm password</label>
          <input id="password_confirmation" v-model="form.password_confirmation" type="password" class="input" />
          <div class="input-error">{{ form.errors.password_confirmation }}</div>
        </div>
        <div class="mt-4">
          <button class="button-primary w-full" type="submit">Create account</button>
        </div>
      </div>
  </div></form>
</template>

<script setup>
import {useForm} from '@inertiajs/vue3'
const form = useForm({
  name: null,
  email: null,
  password: null,
  password_confirmation: null,
})
// eslint-disable-next-line no-undef
const register = () => form.post('')
</script>