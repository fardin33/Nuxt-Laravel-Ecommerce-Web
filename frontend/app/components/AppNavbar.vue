<script setup lang="ts">
import { Menu, X } from "@lucide/vue";
import { ref } from "vue";

const isMenuOpen = ref(false);

const closeMenu = () => {
  isMenuOpen.value = false;
};
</script>

<template>
  <header
    class="sticky top-0 z-50 border-b border-slate-200/80 bg-white/90 backdrop-blur-xl">
    <div class="mx-auto flex h-20 max-w-7xl items-center justify-between px-6">
      <NuxtLink to="/" class="flex items-center gap-3" @click="closeMenu">
        <span
          class="flex h-10 w-10 items-center justify-center rounded-xl bg-slate-950 text-lg font-black text-white"
          >N</span
        >
        <span class="text-xl font-black tracking-tight text-slate-950"
          >NuxtCraft</span
        >
      </NuxtLink>

      <nav
        class="hidden items-center gap-1 rounded-full border border-slate-200 bg-slate-50 p-1 md:flex"
        aria-label="Primary navigation">
        <NuxtLink
          to="/features"
          exact-active-class="bg-white text-indigo-700 shadow-sm"
          class="rounded-full px-4 py-2 text-sm font-semibold text-slate-600 transition hover:text-indigo-700"
          >Features</NuxtLink
        >
        <NuxtLink
          to="/pricing"
          exact-active-class="bg-white text-indigo-700 shadow-sm"
          class="rounded-full px-4 py-2 text-sm font-semibold text-slate-600 transition hover:text-indigo-700"
          >Pricing</NuxtLink
        >
        <NuxtLink
          to="/about"
          exact-active-class="bg-white text-indigo-700 shadow-sm"
          class="rounded-full px-4 py-2 text-sm font-semibold text-slate-600 transition hover:text-indigo-700"
          >About us</NuxtLink
        >
      </nav>

      <div class="hidden items-center gap-5 md:flex">
        <NuxtLink
          to="/login"
          exact-active-class="text-indigo-700"
          class="text-sm font-semibold text-slate-600 transition hover:text-indigo-700"
          >Log in</NuxtLink
        >
        <NuxtLink
          to="/signup"
          exact-active-class="bg-indigo-700"
          class="rounded-lg bg-indigo-600 px-5 py-2.5 text-sm font-bold text-white shadow-lg shadow-indigo-200 transition hover:bg-indigo-700"
          >Start building</NuxtLink
        >
      </div>

      <button
        type="button"
        class="rounded-lg p-2 text-slate-700 md:hidden"
        :aria-expanded="isMenuOpen"
        aria-label="Toggle navigation"
        @click="isMenuOpen = !isMenuOpen">
        <X v-if="isMenuOpen" :size="22" />
        <Menu v-else :size="22" />
      </button>
    </div>

    <div
      v-if="isMenuOpen"
      class="border-t border-slate-200 bg-white px-6 py-4 md:hidden">
      <nav class="flex flex-col gap-1" aria-label="Mobile navigation">
        <NuxtLink
          to="/features"
          exact-active-class="bg-indigo-50 text-indigo-700"
          class="rounded-lg px-4 py-3 text-sm font-semibold text-slate-700"
          @click="closeMenu"
          >Features</NuxtLink
        >
        <NuxtLink
          to="/pricing"
          exact-active-class="bg-indigo-50 text-indigo-700"
          class="rounded-lg px-4 py-3 text-sm font-semibold text-slate-700"
          @click="closeMenu"
          >Pricing</NuxtLink
        >
        <NuxtLink
          to="/about"
          exact-active-class="bg-indigo-50 text-indigo-700"
          class="rounded-lg px-4 py-3 text-sm font-semibold text-slate-700"
          @click="closeMenu"
          >About us</NuxtLink
        >
        <NuxtLink
          to="/login"
          exact-active-class="bg-indigo-50 text-indigo-700"
          class="rounded-lg px-4 py-3 text-sm font-semibold text-slate-700"
          @click="closeMenu"
          >Log in</NuxtLink
        >
        <NuxtLink
          to="/signup"
          class="mt-2 rounded-lg bg-indigo-600 px-4 py-3 text-center text-sm font-bold text-white"
          @click="closeMenu"
          >Start building</NuxtLink
        >
      </nav>
    </div>
  </header>
</template>
