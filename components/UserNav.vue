<template>
  <b-nav vertical>
    <b-nav-item active><home-icon size="18" /> Home</b-nav-item>
    <b-nav-item><user-icon size="18" /> Profile</b-nav-item>
    <b-nav-item><users-icon size="18" /> Follows</b-nav-item>
    <b-nav-item><star-icon size="18" /> Stars</b-nav-item>
    <b-nav-item><settings-icon size="18" /> Settings</b-nav-item>
  </b-nav>
</template>
<script>
import { HomeIcon, UserIcon, UsersIcon, StarIcon, SettingsIcon } from 'vue-feather-icons'

export default {
  components: {
    HomeIcon,
    UserIcon,
    UsersIcon,
    StarIcon,
    SettingsIcon
  }
}
</script>
<style lang="scss" scoped>
@import '../assets/styles/variables';

.nav {
  .nav-item {
    .nav-link {
      padding-left: 0;
      color: $gray-600;
      align-items: center;
      display: inline-grid;
      grid-auto-flow: column;
      grid-gap: $spacer / 2;
      justify-content: flex-start;
      grid-auto-columns: min-content;

      &:hover,
      &.active {
        color: $body-color;
      }
    }
  }
}
</style>
