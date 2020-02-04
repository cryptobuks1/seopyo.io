<template>
  <div class="page-index">
    <b-row>
      <b-col cols="4">
        <UserList :data="userList" title="Follows" />
      </b-col>
      <b-col cols="8">
        <FeedList :data="feedList" title="Recent Activity" />
      </b-col>
    </b-row>
  </div>
</template>

<script>
import { userList, feedList } from '@/mock'
import UserList from '@/components/UserList'
import FeedList from '@/components/FeedList'

export default {
  components: {
    UserList,
    FeedList
  },
  data() {
    return {
      userList,
      feedList
    }
  }
}
</script>
