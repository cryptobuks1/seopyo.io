<template>
  <div class="organization-list">
    <div class="d-flex justify-content-between align-items-center mb-3">
      <h6 class="font-weight-bold mb-0">My Organizations</h6>
      <b-button :to="{ name: 'organizations' }" v-if="data.length > 5" size="sm" variant="primary">All</b-button>
    </div>
    <b-list-group v-if="data && data.length > 0">
      <b-list-group-item v-for="organization in data" :key="get(organization, 'hid')">
        <b-link
          :to="{ name: 'organizations-hid', params: { hid: get(organization, 'hid') } }"
          :title="get(organization, 'name')"
        >
          {{ get(organization, 'name') }}
        </b-link>
      </b-list-group-item>
    </b-list-group>
    <OrganizationCreateCard />
  </div>
</template>
<script>
import get from 'lodash/get'
import OrganizationCreateCard from './OrganizationCreateCard'

export default {
  name: 'OrganizationList',
  components: { OrganizationCreateCard },
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
