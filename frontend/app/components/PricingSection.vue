<script setup lang="ts">
import { Check } from "@lucide/vue";

const plans = [
  {
    name: "Starter",
    price: "$19",
    description: "ছোট project এবং personal launch-এর জন্য।",
    features: ["১টি project", "Email support", "Basic analytics"],
    featured: false,
  },
  {
    name: "Growth",
    price: "$49",
    description: "দ্রুত growing team-এর জন্য সবচেয়ে balanced plan।",
    features: ["১০টি project", "Priority support", "Advanced analytics"],
    featured: true,
  },
  {
    name: "Scale",
    price: "$99",
    description: "বড় team এবং production workload-এর জন্য।",
    features: ["Unlimited project", "Dedicated support", "Team permissions"],
    featured: false,
  },
];
</script>

<template>
  <section id="pricing" class="border-t border-slate-200 bg-slate-50 py-24">
    <div class="mx-auto max-w-7xl px-6">
      <div class="mx-auto mb-12 max-w-2xl text-center">
        <p class="text-sm font-bold uppercase tracking-widest text-indigo-600">
          Simple pricing
        </p>
        <h2
          class="mt-3 text-3xl font-black tracking-tight text-slate-950 md:text-4xl">
          Start small. Scale with confidence.
        </h2>
        <p class="mt-4 text-slate-600">
          Clear plans for every stage, with no surprise usage fees.
        </p>
      </div>

      <div class="grid gap-6 md:grid-cols-3">
        <article
          v-for="plan in plans"
          :key="plan.name"
          class="relative flex flex-col rounded-2xl border p-8"
          :class="
            plan.featured
              ? 'border-indigo-600 bg-indigo-600 text-white shadow-xl'
              : 'border-slate-200 bg-white'
          ">
          <span
            v-if="plan.featured"
            class="absolute right-6 top-6 rounded-full bg-white/15 px-3 py-1 text-[10px] font-bold uppercase tracking-wider text-white"
            >Most popular</span
          >
          <p class="text-lg font-black">{{ plan.name }}</p>
          <p class="mt-4 text-4xl font-black">
            {{ plan.price
            }}<span class="text-sm font-medium opacity-70">/mo</span>
          </p>
          <p
            class="mt-4 text-sm"
            :class="plan.featured ? 'text-indigo-100' : 'text-slate-600'">
            {{ plan.description }}
          </p>
          <ul class="mt-8 space-y-3 text-sm">
            <li
              v-for="feature in plan.features"
              :key="feature"
              class="flex items-center gap-2">
              <Check
                :size="16"
                :class="
                  plan.featured ? 'text-indigo-200' : 'text-emerald-600'
                " />
              {{ feature }}
            </li>
          </ul>
          <NuxtLink
            to="/signup"
            class="mt-8 rounded-lg px-4 py-3 text-center text-sm font-semibold transition"
            :class="
              plan.featured
                ? 'bg-white text-indigo-700 hover:bg-indigo-50'
                : 'bg-slate-900 text-white hover:bg-slate-700'
            ">
            Get started
          </NuxtLink>
        </article>
      </div>
    </div>
  </section>
</template>
