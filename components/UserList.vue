<template>
  <div class="user-list">
    <div class="d-flex justify-content-between align-items-center mb-3">
      <slot name="title">
        <h6 v-html="title" class="font-weight-bold mb-0" />
      </slot>
      <slot name="actions" />
    </div>
    <div v-if="direction === 'vertical'" class="user-list-items">
      <user-card :user="user" v-for="user in data" :key="user.hid" type="horizontal" />
    </div>
    <div v-else class="user-list-items">
      <b-row
        v-for="(group, index) in chunk(data, 12 / cols)"
        :key="index"
        :class="{ 'mb-4': index !== data / cols - 1 }"
      >
        <b-col v-for="user in group" :key="user.hid" :cols="cols">
          <user-card :user="user" type="horizontal" />
        </b-col>
      </b-row>
    </div>
  </div>
</template>
<script>
import chunk from 'lodash/chunk'

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
    },
    direction: {
      default() {
        return 'vertical'
      },
      type: String
    },
    cols: {
      default() {
        return 4
      },
      type: Number
    }
  },
  methods: {
    chunk
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
