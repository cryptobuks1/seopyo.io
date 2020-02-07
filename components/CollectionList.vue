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
        </b-card-group>
        <!--        <b-row-->
        <!--          v-for="(group, index) in chunk(data, 12 / cols)"-->
        <!--          :key="index"-->
        <!--          :class="{ 'mb-4': index !== data.length / cols }"-->
        <!--        >-->
        <!--          <b-col v-for="collection in group" :key="collection.hid" :cols="cols">-->
        <!--            <collection-card :collection="collection" type="horizontal" />-->
        <!--          </b-col>-->

        <!--          <b-col v-if="index === data.length / cols">-->
        <!--            <b-card body-class="d-flex align-items-center justify-content-between">-->
        <!--              <h4>All Collections</h4>-->
        <!--              <arrow-right-icon size="1.5x" />-->
        <!--            </b-card>-->
        <!--          </b-col>-->
        <!--        </b-row>-->
      </div>
    </div>
  </div>
</template>
<script>
import get from 'lodash/get'
import chunk from 'lodash/chunk'
// import { ArrowRightIcon } from 'vue-feather-icons'

import CollectionCard from './CollectionCard'
export default {
  name: 'CollectionList',
  components: {
    // ArrowRightIcon,
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
    chunk
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
