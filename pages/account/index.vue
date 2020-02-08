<template>
  <b-row class="page-index">
    <b-col sm="3" class="border-right py-sm-5 mt-4 mt-sm-0 d-none d-sm-block">
      <user-nav class="mb-4" />
      <organization-list :data="organizationList" type="icon" />
    </b-col>
    <b-col sm="" class="page-index-content py-sm-5 mt-4 mt-sm-0">
      <div class="pl-4">
        <section class="section-profile">
          <user-overview-card :user="user" :is-user-himself="true" />
        </section>
        <section class="section-feed mt-4">
          <feed-list :data="feedList" title="Recent Activity" />
        </section>
      </div>
    </b-col>
  </b-row>
</template>

<script>
import take from 'lodash/take'
import sample from 'lodash/sample'

import { userList, feedList, organizationList } from '../../mock'
import UserNav from '../../components/UserNav'
import FeedList from '../../components/FeedList'
import OrganizationList from '../../components/OrganizationList'
import UserOverviewCard from '../../components/UserOverviewCard'

export default {
  components: {
    UserNav,
    FeedList,
    OrganizationList,
    UserOverviewCard
  },
  data() {
    return {
      user: sample(userList),
      feedList: take(feedList, 20),
      organizationList: take(organizationList, 8)
    }
  }
}
</script>

<style lang="scss" scoped>
@import '../../assets/styles/variables';
</style>
