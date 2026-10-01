<script setup lang="ts">
import { Gauge, Layers3, ShieldCheck } from "@lucide/vue";

const features = [
  {
    title: "Move from idea to MVP faster",
    desc: "A clear Nuxt structure, sensible defaults and reusable UI patterns keep your team shipping instead of wiring boilerplate.",
    icon: Layers3,
    label: "Composable by default",
  },
  {
    title: "Performance users can feel",
    desc: "Server rendering, route-level code splitting and a lean visual system give every screen a confident first impression.",
    icon: Gauge,
    label: "Fast by design",
  },
  {
    title: "A foundation you can trust",
    desc: "Typed forms, SEO-ready pages and a scalable component boundary make it easier to grow from first release to full product.",
    icon: ShieldCheck,
    label: "Ready for production",
  },
];
</script>

<template>
  <section id="features" class="border-t border-slate-200 bg-white py-24">
    <div class="mx-auto max-w-7xl px-6">
      <div
        class="mb-14 flex flex-col justify-between gap-5 md:flex-row md:items-end">
        <div class="max-w-2xl">
          <p
            class="text-sm font-bold uppercase tracking-widest text-indigo-600">
            Why NuxtCraft
          </p>
          <h2
            class="mt-3 text-3xl font-black tracking-tight text-slate-950 md:text-4xl">
            Everything your first serious release needs.
          </h2>
        </div>
        <p class="max-w-md text-base leading-7 text-slate-600">
          From the first screen to the first thousand users, every layer is
          designed to stay understandable.
        </p>
      </div>

      <div class="grid gap-6 md:grid-cols-3">
        <article
          v-for="feature in features"
          :key="feature.title"
          class="rounded-2xl border border-slate-200 bg-slate-50 p-8 transition hover:-translate-y-1 hover:border-indigo-200 hover:bg-white hover:shadow-xl hover:shadow-slate-200/70">
          <div class="flex items-center justify-between">
            <div
              class="flex h-12 w-12 items-center justify-center rounded-xl bg-indigo-100 text-indigo-700">
              <component :is="feature.icon" :size="24" :stroke-width="1.8" />
            </div>
            <span
              class="text-xs font-bold uppercase tracking-wider text-slate-400"
              >0{{ features.indexOf(feature) + 1 }}</span
            >
          </div>
          <p
            class="mt-8 text-xs font-bold uppercase tracking-wider text-indigo-600">
            {{ feature.label }}
          </p>
          <h3 class="mt-3 text-xl font-black text-slate-950">
            {{ feature.title }}
          </h3>
          <p class="mt-3 text-sm leading-7 text-slate-600">
            {{ feature.desc }}
          </p>
        </article>
      </div>
    </div>
  </section>
</template>
