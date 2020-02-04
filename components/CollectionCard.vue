<template>
  <div class="user-card">
    <b-card
      overlay
      img-src="https://picsum.photos/900/250/?image=3"
      img-alt="Card Image"
      text-variant="white"
      title="Image Overlay"
      sub-title="Subtitle"
    >
      <b-card-text>
        Some quick example text to build on the card and make up the bulk of the card's content.
      </b-card-text>
    </b-card>
  </div>
</template>
<script>
export default {
  name: 'CollectionCard',
  props: {
    collection: {
      default() {
        return []
      },
      type: Object
    }
  }
}
</script>
<style lang="scss">
@import '../assets/styles/variables';

.user-list {
  .user-list {
    &-item {
      padding: $spacer-sm;
      border: 1px solid $border-color;
      border-radius: $border-radius;

      + .user-list-item {
        margin-top: $spacer-sm;
      }
    }

    &-heading {
      margin-left: $spacer-sm;
    }

    &-title {
      margin: 0 0 $spacer-xs;
    }

    &-meta {
      display: flex;

      &-item {
        color: $body-color-faded;
        font-size: $font-size-xs;

        + .user-list-meta-item {
          margin-left: $spacer-sm;
          padding-left: $spacer-sm;
          border-left: 1px solid $border-color;
        }
      }
    }
  }
}
</style>
