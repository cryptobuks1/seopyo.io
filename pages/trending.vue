<template>
  <div class="page-trending">
    <section class="trending-users mb-5">
      <h3 class="app-heading mb-4">Trending Users</h3>
      <b-row>
        <b-col v-for="user in userList" :key="user.hid" cols="3">
          <UserCard :user="user" />
        </b-col>
      </b-row>
    </section>
    <section class="trending-collections mb-5">
      <h3 class="app-heading mb-4">Trending Collections</h3>
      <b-row>
        <b-col v-for="collection in collectionList" :key="collection.hid" cols="4">
          <CollectionCard :collection="collection" />
        </b-col>
      </b-row>
    </section>
  </div>
</template>

<script>
import { userList, collectionList } from '@/mock'
import UserCard from '@/components/UserCard'
import CollectionCard from '@/components/CollectionCard'

export default {
  components: {
    UserCard,
    CollectionCard
  },
  data() {
    return {
      userList,
      collectionList
    }
  }
}
</script>
