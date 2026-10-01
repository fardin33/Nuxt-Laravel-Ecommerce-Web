<template>
  <footer class="border-t border-slate-800 bg-slate-950 py-12 text-slate-400">
    <div
      class="mx-auto flex max-w-7xl flex-col gap-8 px-6 md:flex-row md:items-end md:justify-between">
      <div>
        <NuxtLink to="/" class="text-xl font-black text-white"
          >NuxtCraft</NuxtLink
        >
        <p class="mt-2 max-w-sm text-sm leading-6">
          A focused foundation for ambitious digital products.
        </p>
      </div>
      <div class="flex flex-wrap gap-5 text-sm font-semibold">
        <NuxtLink to="/features" class="transition hover:text-white"
          >Features</NuxtLink
        >
        <NuxtLink to="/pricing" class="transition hover:text-white"
          >Pricing</NuxtLink
        >
        <NuxtLink to="/about" class="transition hover:text-white"
          >About</NuxtLink
        >
        <NuxtLink to="/login" class="transition hover:text-white"
          >Log in</NuxtLink
        >
      </div>
      <p class="text-xs md:text-right">
        © 2026 NuxtCraft. All rights reserved.
      </p>
    </div>
  </footer>
</template>
