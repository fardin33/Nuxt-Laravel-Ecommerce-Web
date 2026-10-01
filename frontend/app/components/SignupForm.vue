<script setup lang="ts">
import { ref } from "vue";

const name = ref("");
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
        for="signup-name"
        class="mb-2 block text-sm font-medium text-slate-700"
        >Full name</label
      >
      <input
        id="signup-name"
        v-model="name"
        type="text"
        required
        autocomplete="name"
        class="w-full rounded-lg border border-slate-300 px-4 py-3 outline-none transition focus:border-indigo-600 focus:ring-2 focus:ring-indigo-100"
        placeholder="Your name" />
    </div>
    <div>
      <label
        for="signup-email"
        class="mb-2 block text-sm font-medium text-slate-700"
        >Email</label
      >
      <input
        id="signup-email"
        v-model="email"
        type="email"
        required
        autocomplete="email"
        class="w-full rounded-lg border border-slate-300 px-4 py-3 outline-none transition focus:border-indigo-600 focus:ring-2 focus:ring-indigo-100"
        placeholder="you@example.com" />
    </div>
    <div>
      <label
        for="signup-password"
        class="mb-2 block text-sm font-medium text-slate-700"
        >Password</label
      >
      <input
        id="signup-password"
        v-model="password"
        type="password"
        required
        minlength="6"
        autocomplete="new-password"
        class="w-full rounded-lg border border-slate-300 px-4 py-3 outline-none transition focus:border-indigo-600 focus:ring-2 focus:ring-indigo-100"
        placeholder="At least 6 characters" />
    </div>
    <button
      type="submit"
      class="w-full rounded-lg bg-indigo-600 px-4 py-3 font-semibold text-white transition hover:bg-indigo-700">
      Create account
    </button>
    <p
      v-if="submitted"
      class="rounded-lg bg-emerald-50 p-3 text-sm text-emerald-700">
      Signup form ready. Backend registration এখনো connect করা হয়নি।
    </p>
  </form>
</template>
