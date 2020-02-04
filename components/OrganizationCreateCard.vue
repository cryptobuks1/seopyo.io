<template>
  <b-card>
    <users-icon size="48" class="mb-3" col />
    <h5>Do you want to create an organization?</h5>
    <b-button size="sm" variant="primary">Create Now!</b-button>
  </b-card>
</template>
<script>
import { UsersIcon } from 'vue-feather-icons'
export default {
  name: 'OrganizationCreateCard',
  components: {
    UsersIcon
  }
}
</script>
<style lang="scss" scoped>
@import '../assets/styles/variables';

.card {
  border-radius: $border-radius-lg;

  .card-body {
    text-align: center;

    svg {
      color: $primary;
      path:nth-child(3),
      path:nth-child(4) {
        color: $secondary;
      }
    }

    .btn {
      text-transform: uppercase;
      font-size: $font-size-sm;
      font-weight: $font-weight-bold;
    }
  }
}
</style>
