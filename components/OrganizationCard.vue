<template>
  <b-card
    :title="organization.name"
    :img-src="organization.cover_image"
    :class="`organization-card organization-card-${type}`"
    :img-alt="organization.name"
    img-top
  >
    <template v-slot:header>
      <b-img :src="user.avatar" :alt="user.full_name" width="48" rounded="circle"></b-img>
    </template>

    <b-card-text>
      This card has supporting text below as a natural lead-in to additional content.
    </b-card-text>

    <b-card-text class="small text-muted">Last updated 3 mins ago</b-card-text>
  </b-card>
</template>
<script>
export default {
  name: 'UserCard',
  components: {},
  props: {
    type: {
      default() {
        return 'vertical'
      },
      type: String
    },
    user: {
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

.user-card {
  padding: $spacer-sm;

  + .user-card {
    margin-top: $spacer;
  }

  .card-header,
  .card-body {
    border: 0;
    padding: 0;
    background-color: transparent;
  }

  .card-header {
    padding-bottom: $spacer-sm;

    > img {
      width: 48px;
      height: 48px;
      display: block;
      text-indent: -1000rem;
    }
  }

  .user-card {
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

        + .user-card-meta-item {
          margin-left: $spacer-sm;
          padding-left: $spacer-sm;
          border-left: 1px solid $border-color;
        }
      }
    }

    &-title {
      margin-bottom: $spacer / 2;
    }
  }

  &-horizontal {
    flex-direction: row;

    .card-header {
      padding-bottom: 0;
      padding-right: $spacer-sm;
    }
  }
}
</style>
