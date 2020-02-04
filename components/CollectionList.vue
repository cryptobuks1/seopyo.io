<template>
  <div class="collection-list">
    <div class="d-flex justify-content-between align-items-center mb-3">
      <h6 class="font-weight-bold mb-0">My Collections</h6>
      <b-button :to="{ name: 'collections' }" size="sm" variant="primary">All</b-button>
    </div>
    <b-list-group>
      <b-list-group-item v-for="collection in data" :key="get(collection, 'hid')">
        <b-link
          :to="{ name: 'collections-hid', params: { hid: get(collection, 'hid') } }"
          :title="get(collection, 'name')"
        >
          {{ get(collection, 'name') }}
        </b-link>
      </b-list-group-item>
    </b-list-group>
  </div>
</template>
<script>
import get from 'lodash/get'

export default {
  name: 'CollectionList',
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
  },
  methods: {
    get
  }
}
</script>
<style lang="scss" scoped>
@import '../assets/styles/variables';

.list-group {
  &-item {
    border: 0;
    padding: 0;
    margin-bottom: $spacer-xs;

    &:hover {
      color: $primary;
      background-color: transparent;
    }
  }
}
</style>
