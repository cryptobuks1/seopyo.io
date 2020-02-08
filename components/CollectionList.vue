<template>
  <div class="collection-list">
    <div class="d-flex justify-content-between align-items-center mb-3">
      <slot name="title">
        <h6 class="font-weight-bold mb-0">My Collections</h6>
      </slot>
      <slot name="actions" />
    </div>
    <div v-if="data && data.length > 0">
      <b-list-group v-if="direction === 'vertical'" class="collection-list-items">
        <b-list-group-item v-for="collection in data" :key="get(collection, 'hid')">
          <b-link
            :to="{ name: 'collections-hid', params: { hid: get(collection, 'hid') } }"
            :title="get(collection, 'name')"
          >
            {{ get(collection, 'name') }}
          </b-link>
        </b-list-group-item>
      </b-list-group>
      <div v-else class="collection-list-items">
        <b-card-group columns>
          <collection-card
            :collection="collection"
            v-for="collection in data"
            :key="collection.hid"
            type="horizontal"
          />
          <load-more-card :handler="loadMoreHandler" title="All Collections" />
        </b-card-group>
      </div>
    </div>
  </div>
</template>
<script>
import get from 'lodash/get'
import chunk from 'lodash/chunk'

import CollectionCard from './CollectionCard'
import LoadMoreCard from './LoadMoreCard'
export default {
  name: 'CollectionList',
  components: {
    LoadMoreCard,
    CollectionCard
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
    get,
    chunk,
    loadMoreHandler() {
      alert('Load more content!')
    }
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
