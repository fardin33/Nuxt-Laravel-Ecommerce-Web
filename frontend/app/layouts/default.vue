<template>
  <div class="min-h-screen flex flex-col">
    <!-- Global Navbar -->
    <AppNavbar />

    <main class="flex-grow">
      <slot />
    </main>

    <!-- Global Footer -->
    <AppFooter />
  </div>
</template>
