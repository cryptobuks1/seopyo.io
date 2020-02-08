<template>
  <b-row class="page-index">
    <b-col sm="3" class="border-right py-sm-5 mt-4 mt-sm-0 d-none d-sm-block">
      <user-nav class="mb-4" />
      <collection-list :data="collectionList" class="mb-4">
        <template slot="actions">
          <b-button :to="{ name: 'collections' }" v-if="collectionList.length > 5" size="sm" variant="primary">
            All
          </b-button>
        </template>
      </collection-list>
      <organization-list :data="organizationList">
        <template slot="actions">
          <b-button :to="{ name: 'organizations' }" v-if="organizationList.length > 5" size="sm" variant="primary">
            All
          </b-button>
        </template>
      </organization-list>
    </b-col>

    <b-col sm="6" class="page-index-content py-sm-5 mt-4 mt-sm-0">
      <feed-list :data="feedList" title="Recent Activity" />
    </b-col>

    <b-col sm="3" class="border-left py-sm-5 mt-4 mt-sm-0 d-none d-sm-block">
      <user-list :data="userList" title="Explore Users" />
    </b-col>
  </b-row>
</template>

<script>
import take from 'lodash/take'

import UserNav from '../components/UserNav'
import UserList from '../components/UserList'
import FeedList from '../components/FeedList'
import CollectionList from '../components/CollectionList'
import OrganizationList from '../components/OrganizationList'
import { userList, feedList, collectionList, organizationList } from '../mock'

export default {
  components: {
    UserNav,
    UserList,
    FeedList,
    CollectionList,
    OrganizationList
  },
  data() {
    return {
      userList: take(userList, 5),
      feedList: take(feedList, 30),
      collectionList: take(collectionList, 5),
      organizationList: take(organizationList, 0)
    }
  }
}
</script>

<style lang="scss" scoped>
@import '../assets/styles/variables';

.page-index {
  &-content {
    min-height: 100vh;
  }
}
</style>
