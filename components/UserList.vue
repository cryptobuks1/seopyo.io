<template>
  <div class="user-list">
    <div class="d-flex justify-content-between align-items-center mb-3">
      <h6 v-html="title" class="font-weight-bold mb-0" />
      <b-button :to="{ name: 'collections' }" v-if="data.length > 5" size="sm" variant="primary">All</b-button>
    </div>
    <div class="user-list-items">
      <UserCard :user="user" v-for="user in data" :key="user.hid" type="horizontal" />
    </div>
  </div>
</template>
<script>
import UserCard from '../components/UserCard'

export default {
  name: 'UserList',
  components: {
    UserCard
  },
  props: {
    title: {
      default() {
        return ''
      },
      type: String
    },
    data: {
      default() {
        return []
      },
      type: Array
    }
  }
}
</script>
<style lang="scss">
@import '../assets/styles/variables';

.user-list {
  .user-list {
    &-item {
      padding: $spacer-sm;
      border: 1px solid $border-color;
      border-radius: $border-radius;

      + .user-list-item {
        margin-top: $spacer-sm;
      }
    }

    &-heading {
      margin-left: $spacer-sm;
    }

    &-title {
      margin: 0 0 $spacer-xs;
    }

    &-meta {
      display: flex;

      &-item {
        color: $body-color-faded;
        font-size: $font-size-xs;

        + .user-list-meta-item {
          margin-left: $spacer-sm;
          padding-left: $spacer-sm;
          border-left: 1px solid $border-color;
        }
      }
    }
  }
}
</style>
