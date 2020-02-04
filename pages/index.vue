<template>
  <b-row class="page-index">
    <b-col sm="3" class="border-right py-sm-5 mt-4 mt-sm-0 d-none d-sm-block">
      <UserNav class="mb-4" />
      <CollectionList :data="collectionList" class="mb-4" />
      <OrganizationList :data="organizationList" />
    </b-col>

    <b-col sm="6" class="page-index-content py-sm-5 mt-4 mt-sm-0">
      <FeedList :data="feedList" title="Recent Activity" />
    </b-col>

    <b-col sm="3" class="border-left py-sm-5 mt-4 mt-sm-0 d-none d-sm-block">
      <UserList :data="userList" title="Explore Users" />
    </b-col>
  </b-row>
</template>

<script>
import { userList, feedList, collectionList, organizationList } from '../mock'
import UserNav from '../components/UserNav'
import UserList from '../components/UserList'
import FeedList from '../components/FeedList'
import CollectionList from '../components/CollectionList'
import OrganizationList from '../components/OrganizationList'

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
      userList,
      feedList,
      collectionList,
      organizationList
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
