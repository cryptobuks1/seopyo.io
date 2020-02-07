<template>
  <b-card
    v-if="collection"
    :img-src="collection.cover_image"
    :img-alt="collection.name"
    :title="collection.name"
    :overlay="!!collection.cover_image"
    :bg-variant="!collection.cover_image ? 'light' : ''"
    :text-variant="!collection.cover_image ? 'black' : 'white'"
    :class="{ 'card-collection': true, 'has-cover-image': !!collection.cover_image }"
  >
    <b-card-text v-html="collection.description" v-if="collection.description" />

    <div class="card-collection-meta">
      <div v-b-tooltip.hover :title="`${collection.statistics.stars} Star`" class="card-collection-meta-item">
        <star-icon size="14" /> <b v-html="collection.statistics.stars" />
      </div>
      <div v-b-tooltip.hover :title="`${collection.statistics.followers} Followers`" class="card-collection-meta-item">
        <users-icon size="14" /> <b v-html="collection.statistics.followers" />
      </div>
    </div>
  </b-card>
</template>
<script>
import { StarIcon, UsersIcon } from 'vue-feather-icons'
export default {
  name: 'CollectionCard',
  components: {
    StarIcon,
    UsersIcon
  },
  props: {
    type: {
      default() {
        return 'vertical'
      },
      type: String
    },
    collection: {
      default() {
        return []
      },
      type: Object
    }
  }
}
</script>
<style lang="scss" scoped>
@import '../assets/styles/variables';

.card-collection {
  overflow: hidden;
  border-radius: $border-radius-lg;

  &.has-cover-image {
    min-height: 150px;
  }

  .card-title {
    font-size: $font-size-lg;
  }

  .card-img {
    object-fit: cover;
    object-position: center;
  }

  .card-body {
    display: flex;
    flex-direction: column;
    justify-content: flex-end;

    &.card-img-overlay {
      background-image: linear-gradient(0deg, rgba(0, 0, 0, 0.65) 10%, transparent);
    }
  }

  &-meta {
    display: inline-flex;

    &-item {
      display: grid;
      align-items: center;
      white-space: nowrap;
      grid-auto-flow: column;
      grid-gap: $spacer-xs / 2;
      color: $body-color-faded;
      font-size: $font-size-sm;

      + .card-collection-meta-item {
        margin-left: $spacer-sm;
        padding-left: $spacer-sm;
        border-left: 1px solid $border-color;
      }
    }
  }
}
</style>
