<script setup lang="ts">
import { ArrowUpRight, Users, Zap } from "@lucide/vue";
</script>

<template>
  <section id="about" class="border-t border-slate-200 bg-white py-24">
    <div
      class="mx-auto grid max-w-7xl gap-14 px-6 md:grid-cols-[0.8fr_1.2fr] md:items-center">
      <div>
        <p class="text-sm font-bold uppercase tracking-widest text-indigo-600">
          Built for momentum
        </p>
        <h2
          class="mt-3 text-3xl font-black tracking-tight text-slate-950 md:text-4xl">
          Less setup. More meaningful work.
        </h2>
        <NuxtLink
          to="/features"
          class="mt-7 inline-flex items-center gap-2 font-bold text-indigo-700 transition hover:gap-3"
          >See how it works <ArrowUpRight :size="18"
        /></NuxtLink>
      </div>
      <div>
        <div class="space-y-5 text-lg leading-8 text-slate-600">
          <p>
            NuxtCraft is a considered starting point for teams that care about
            craft, speed and a product experience that feels trustworthy from
            day one.
          </p>
          <p>
            Use the components as-is or shape them into your own SaaS, agency
            platform or ecommerce experience.
          </p>
        </div>
        <div class="mt-10 grid gap-4 sm:grid-cols-2">
          <div class="rounded-xl border border-slate-200 bg-slate-50 p-5">
            <Users :size="20" class="text-indigo-600" />
            <p class="mt-4 text-2xl font-black text-slate-950">12k+</p>
            <p class="mt-1 text-sm text-slate-600">Builders supported</p>
          </div>
          <div class="rounded-xl border border-slate-200 bg-slate-50 p-5">
            <Zap :size="20" class="text-amber-500" />
            <p class="mt-4 text-2xl font-black text-slate-950">99.9%</p>
            <p class="mt-1 text-sm text-slate-600">Uptime target</p>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>
