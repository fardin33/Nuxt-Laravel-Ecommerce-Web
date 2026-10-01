<template>
  <section
    class="flex min-h-[70vh] items-center justify-center bg-slate-50 px-6 py-16">
    <div
      class="w-full max-w-md rounded-2xl border border-slate-200 bg-white p-8 shadow-sm">
      <p
        class="text-sm font-semibold uppercase tracking-widest text-indigo-600">
        Welcome back
      </p>
      <h1 class="mt-2 text-3xl font-bold text-slate-900">Login to NuxtCraft</h1>
      <p class="mt-3 text-slate-600">আপনার account-এ প্রবেশ করুন।</p>
      <div class="mt-8"><LoginForm /></div>
      <p class="mt-6 text-center text-sm text-slate-600">
        নতুন user?
        <NuxtLink
          to="/signup"
          class="font-semibold text-indigo-600 hover:text-indigo-700"
          >Sign up</NuxtLink
        >
      </p>
    </div>
  </section>
</template>
