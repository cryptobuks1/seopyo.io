<template>
  <b-card :class="`user-card user-card-${type}`">
    <template v-slot:header>
      <b-img :src="user.avatar" :alt="user.full_name" width="48" rounded="circle"></b-img>
    </template>

    <h6 v-html="user.full_name" class="user-card-title" />
    <div class="user-card-meta">
      <div v-b-tooltip.hover :title="`${user.statistics.collections} Collection`" class="user-card-meta-item">
        <layers-icon size="14" /> <b v-html="user.statistics.collections" />
      </div>
      <div v-b-tooltip.hover :title="`${user.statistics.followers} Followers`" class="user-card-meta-item">
        <users-icon size="14" /> <b v-html="user.statistics.followers" />
      </div>
    </div>
  </b-card>
</template>
<script>
import { LayersIcon, UsersIcon } from 'vue-feather-icons'

export default {
  name: 'UserCard',
  components: {
    LayersIcon,
    UsersIcon
  },
  props: {
    type: {
      default() {
        return 'vertical'
      },
      type: String
    },
    user: {
      default() {
        return []
      },
      type: Object
    }
  }
}
</script>
<style lang="scss" scoped>
@import '../assets/styles/variables';

.user-card {
  padding: $spacer-sm;

  + .user-card {
    margin-top: $spacer;
  }

  .card-header,
  .card-body {
    border: 0;
    padding: 0;
    background-color: transparent;
  }

  .card-header {
    padding-bottom: $spacer-sm;

    > img {
      width: 48px;
      height: 48px;
      display: block;
      text-indent: -1000rem;
    }
  }

  .user-card {
    &-meta {
      display: inline-flex;

      &-item {
        display: grid;
        align-items: center;
        white-space: nowrap;
        grid-auto-flow: column;
        grid-gap: $spacer-xs / 2;
        color: $body-color-faded;
        font-size: $font-size-sm;

        + .user-card-meta-item {
          margin-left: $spacer-sm;
          padding-left: $spacer-sm;
          border-left: 1px solid $border-color;
        }
      }
    }

    &-title {
      margin-bottom: $spacer / 2;
    }
  }

  &-horizontal {
    flex-direction: row;

    .card-header {
      padding-bottom: 0;
      padding-right: $spacer-sm;
    }
  }
}
</style>
