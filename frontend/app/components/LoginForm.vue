<script setup lang="ts">
import { ref } from "vue";

const email = ref("");
const password = ref("");
const submitted = ref(false);

const submit = () => {
  submitted.value = true;
};
</script>

<template>
  <form class="space-y-5" @submit.prevent="submit">
    <div>
      <label
        for="login-email"
        class="mb-2 block text-sm font-medium text-slate-700"
        >Email</label
      >
      <input
        id="login-email"
        v-model="email"
        type="email"
        required
        autocomplete="email"
        class="w-full rounded-lg border border-slate-300 px-4 py-3 outline-none transition focus:border-indigo-600 focus:ring-2 focus:ring-indigo-100"
        placeholder="you@example.com" />
    </div>
    <div>
      <label
        for="login-password"
        class="mb-2 block text-sm font-medium text-slate-700"
        >Password</label
      >
      <input
        id="login-password"
        v-model="password"
        type="password"
        required
        minlength="6"
        autocomplete="current-password"
        class="w-full rounded-lg border border-slate-300 px-4 py-3 outline-none transition focus:border-indigo-600 focus:ring-2 focus:ring-indigo-100"
        placeholder="Enter your password" />
    </div>
    <button
      type="submit"
      class="w-full rounded-lg bg-indigo-600 px-4 py-3 font-semibold text-white transition hover:bg-indigo-700">
      Login
    </button>
    <p
      v-if="submitted"
      class="rounded-lg bg-emerald-50 p-3 text-sm text-emerald-700">
      Login form ready. Backend authentication এখনো connect করা হয়নি।
    </p>
  </form>
</template>
