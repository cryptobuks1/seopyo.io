<template>
  <div class="app-logo">
    <span class="app-logo-main">seopyo</span>
    <span class="app-logo-ext">.io</span>
  </div>
</template>
<style lang="scss">
@import '../assets/styles/variables';

.app-logo {
  font-size: 2em;
  animation: appear;
  margin-left: -$spacer;
  font-family: Dosis, sans-serif;

  .app-logo {
    &-main {
      color: $secondary;
    }

    &-ext {
      color: $primary;
      margin-left: -0.4rem;
    }
  }
}

@keyframes appear {
  0% {
    opacity: 0;
  }

  100% {
    opacity: 1;
  }
}
</style>
