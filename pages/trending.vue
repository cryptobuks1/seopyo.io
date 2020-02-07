<template>
  <div class="page-trending py-sm-5">
    <section class="trending-users mb-5">
      <user-list :data="userList" direction="horizontal">
        <template slot="title">
          <h3 class="font-weight-bold mb-0">Trending Users</h3>
        </template>
      </user-list>
    </section>
    <section class="trending-collections mb-5">
      <collection-list :data="collectionList" direction="horizontal">
        <template slot="title">
          <h3 class="font-weight-bold mb-0">Trending Collections</h3>
        </template>
      </collection-list>
    </section>
  </div>
</template>

<script>
import take from 'lodash/take'

import { userList, collectionList } from '../mock'
import UserList from '../components/UserList'
import CollectionList from '../components/CollectionList'

export default {
  components: {
    UserList,
    CollectionList
  },
  data() {
    return {
      userList: take(userList, 9),
      collectionList: take(collectionList, 8)
    }
  }
}
</script>
