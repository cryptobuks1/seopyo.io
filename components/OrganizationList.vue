<template>
  <div class="organization-list">
    <div class="d-flex justify-content-between align-items-center mb-3">
      <slot name="title">
        <h6 class="font-weight-bold mb-0">My Organizations</h6>
      </slot>
      <slot name="actions" />
    </div>
    <div v-if="data && data.length > 0">
      <b-list-group v-if="direction === 'vertical'" class="organization-list-items">
        <b-list-group-item v-for="organization in data" :key="get(organization, 'hid')">
          <b-link
            :to="{ name: 'organizations-hid', params: { hid: get(organization, 'hid') } }"
            :title="get(organization, 'name')"
          >
            {{ get(organization, 'name') }}
          </b-link>
        </b-list-group-item>
      </b-list-group>
      <div v-else class="organization-list-items">
        <b-row
          v-for="(group, index) in chunk(data, 12 / cols)"
          :key="index"
          :class="{ 'mb-4': index !== data / cols - 1 }"
        >
          <b-col v-for="organization in group" :key="organization.hid" :cols="cols">
            <organization-card :organization="organization" type="horizontal" />
          </b-col>
        </b-row>
      </div>
    </div>
    <OrganizationCreateCard v-else />
  </div>
</template>
<script>
import get from 'lodash/get'
import chunk from 'lodash/chunk'

import OrganizationCard from './OrganizationCard'
import OrganizationCreateCard from './OrganizationCreateCard'

export default {
  name: 'OrganizationList',
  components: { OrganizationCard, OrganizationCreateCard },
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
