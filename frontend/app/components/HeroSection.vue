<script setup lang="ts">
import { ArrowRight, BadgeCheck, Play, ShieldCheck, Timer } from "@lucide/vue";
</script>

<template>
  <section
    class="relative overflow-hidden border-b border-slate-200 bg-slate-50">
    <div
      class="absolute inset-0 bg-[radial-gradient(circle_at_75%_15%,rgba(99,102,241,0.14),transparent_34%)]" />
    <div
      class="relative mx-auto grid max-w-7xl gap-14 px-6 py-20 md:grid-cols-[1.1fr_0.9fr] md:items-center md:py-28">
      <div>
        <div
          class="mb-7 inline-flex items-center gap-2 rounded-full border border-indigo-200 bg-white px-3 py-1.5 text-xs font-bold uppercase tracking-widest text-indigo-700 shadow-sm">
          <BadgeCheck :size="14" /> Product-ready foundation
        </div>

        <h1
          class="max-w-3xl text-5xl font-black leading-[1.05] tracking-tight text-slate-950 md:text-7xl">
          Build the next thing people
          <span class="text-indigo-600">love to use.</span>
        </h1>

        <p class="mt-7 max-w-xl text-lg leading-8 text-slate-600">
          NuxtCraft gives your team a fast, reliable starting point for SaaS
          products, internal tools and high-converting digital experiences.
        </p>

        <div class="mt-9 flex flex-wrap items-center gap-4">
          <NuxtLink
            to="/signup"
            class="inline-flex items-center gap-2 rounded-lg bg-slate-950 px-6 py-3.5 font-bold text-white shadow-xl shadow-slate-300 transition hover:-translate-y-0.5 hover:bg-indigo-700">
            Start building <ArrowRight :size="18" />
          </NuxtLink>
          <NuxtLink
            to="/features"
            class="inline-flex items-center gap-2 rounded-lg border border-slate-300 bg-white px-6 py-3.5 font-bold text-slate-800 transition hover:border-indigo-300 hover:text-indigo-700">
            <Play :size="17" /> Explore platform
          </NuxtLink>
        </div>

        <div
          class="mt-10 flex flex-wrap gap-x-7 gap-y-3 text-sm font-semibold text-slate-600">
          <span class="inline-flex items-center gap-2"
            ><ShieldCheck :size="17" class="text-emerald-600" />
            Production-ready</span
          >
          <span class="inline-flex items-center gap-2"
            ><Timer :size="17" class="text-indigo-600" /> Deploy in
            minutes</span
          >
        </div>
      </div>

      <div
        class="relative rounded-2xl border border-slate-200 bg-white p-3 shadow-2xl shadow-indigo-100">
        <div class="rounded-xl bg-slate-950 p-6 text-white md:p-8">
          <div
            class="flex items-center justify-between border-b border-white/10 pb-5">
            <div>
              <p class="text-sm font-bold">Workspace overview</p>
              <p class="mt-1 text-xs text-slate-400">Monday, October 1, 2026</p>
            </div>
            <span
              class="rounded-full bg-emerald-400/10 px-3 py-1 text-xs font-bold text-emerald-300"
              >All systems normal</span
            >
          </div>
          <div class="grid grid-cols-2 gap-3 py-6">
            <div class="rounded-lg bg-white/10 p-4">
              <p class="text-xs text-slate-400">Active users</p>
              <p class="mt-2 text-2xl font-black">24.8k</p>
              <p class="mt-1 text-xs text-emerald-300">+18.4%</p>
            </div>
            <div class="rounded-lg bg-white/10 p-4">
              <p class="text-xs text-slate-400">Conversion</p>
              <p class="mt-2 text-2xl font-black">8.42%</p>
              <p class="mt-1 text-xs text-emerald-300">+4.6%</p>
            </div>
          </div>
          <div class="flex h-28 items-end gap-2 rounded-lg bg-white/5 p-4">
            <span
              v-for="height in [35, 48, 42, 66, 54, 78, 68, 92, 80, 100]"
              :key="height"
              class="flex-1 rounded-t bg-indigo-400/80"
              :style="{ height: `${height}%` }" />
          </div>
        </div>
      </div>
    </div>
  </section>
</template>
