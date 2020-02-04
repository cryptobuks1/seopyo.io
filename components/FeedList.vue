<template>
  <div v-if="data" class="feed-list">
    <div class="d-flex justify-content-between align-items-center mb-3">
      <h6 v-html="title" class="font-weight-bold mb-0" />
    </div>
    <div class="feed-list-items">
      <b-media
        :key="feed.hid"
        v-for="feed in data"
        :class="{ added: feed.type === 'add', removed: feed.type === 'remove', subscribed: feed.type === 'subscribe' }"
      >
        <template v-slot:aside>
          <b-img
            :src="get(feed, 'bookmark.meta.image', get(feed, 'collection.icon_image'))"
            :alt="get(feed, 'bookmark.meta.title')"
            width="64"
            class="media-image rounded"
          ></b-img>
        </template>

        <div v-if="feed.type === 'add'">
          <b-link :to="{ name: 'users-hid-profile', params: { hid: get(feed, 'user.hid') } }">
            {{ get(feed, 'user.first_name') }}
          </b-link>
          added
          <a :href="get(feed, 'bookmark.url')" target="_blank" rel="nofollow">{{ get(feed, 'bookmark.meta.title') }}</a>
          to
          <b-link :to="{ name: 'collections-hid', params: { hid: get(feed, 'collection.hid') } }">
            {{ get(feed, 'collection.name') }}
          </b-link>
        </div>
        <div v-else-if="feed.type === 'remove'">
          <a href="#">{{ get(feed, 'user.first_name') }}</a> removed
          <a href="#">{{ get(feed, 'bookmark.meta.title') }}</a> from
          <a href="#">{{ get(feed, 'collection.name') }}</a>
        </div>
        <div v-else-if="feed.type === 'subscribe'">
          <a href="#">{{ get(feed, 'user.first_name') }}</a> subscribed to
          <a href="#">{{ get(feed, 'collection.name') }}</a>
        </div>
        <div class="media-meta">2 hour ago</div>
      </b-media>
    </div>
    <div class="feed-list-actions py-4 text-center">
      <b-button ref="btnLoadMore" @click="$refs.btnLoadMore.innerHTML = 'loading..'" variant="primary" block>
        load more..
      </b-button>
    </div>
  </div>
</template>
<script>
import get from 'lodash/get'

export default {
  name: 'FeedList',
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
.media {
  margin-bottom: $spacer;

  &:last-child {
    margin-bottom: 0;
  }

  &-image {
    width: 4rem;
    height: 4rem;
    object-fit: cover;
    object-position: center;
  }

  &-meta {
    color: $text-muted;
    font-size: $font-size-xs;
  }
}
</style>
