<template>
  <b-card :img-src="user.avatar" :img-alt="user.full_name" class="card-user-overview" img-left>
    <b-row>
      <b-col sm="">
        <h3 v-html="user.full_name" class="mb-1" />
        <div class="text-muted mb-2">from Melbourbe</div>
        <div class="actions">
          <b-button v-if="!isUserHimself" variant="outline-primary" size="sm">Follow</b-button>
          <b-button v-else :to="{ name: 'account-edit' }" variant="outline-secondary" size="sm">
            <edit-3-icon size="16" /> Edit Profile
          </b-button>
        </div>
      </b-col>
      <b-col sm="auto">
        <div class="meta">
          <div class="meta-item">
            <div class="meta-item-title">Collections</div>
            <div class="meta-item-content"><b v-html="user.statistics.collections" /></div>
          </div>
          <div class="meta-item">
            <div class="meta-item-title">Followers</div>
            <div class="meta-item-content"><b v-html="user.statistics.followers" /></div>
          </div>
          <div class="meta-item">
            <div class="meta-item-title">Organizations</div>
            <div class="meta-item-content"><b v-html="user.statistics.organizations" /></div>
          </div>
        </div>
      </b-col>
    </b-row>
  </b-card>
</template>
<script>
import { Edit3Icon } from 'vue-feather-icons'

export default {
  name: 'UserOverviewCard',
  components: {
    Edit3Icon
  },
  props: {
    user: {
      default() {
        return []
      },
      type: Object
    },
    isUserHimself: {
      default() {
        return false
      },
      type: Boolean
    }
  }
}
</script>
<style lang="scss" scoped>
@import '../assets/styles/variables';

.card-user-overview {
  padding: $spacer;

  .card-img-left {
    padding: $spacer-sm;
    align-self: center;
    border-radius: 50%;
    width: $spacer * 8;
    height: $spacer * 8;
    border: 1px solid $border-color;
  }

  .meta {
    display: inline-flex;

    &-item {
      text-align: center;

      &-title {
        font-size: $font-size-xs;
        margin-bottom: $spacer-xs;
        text-transform: uppercase;
        font-weight: $font-weight-bold;
      }

      &-content {
        display: grid;
        color: $secondary;
        align-items: center;
        white-space: nowrap;
        grid-gap: $spacer-xs;
        grid-auto-flow: column;
        font-size: $font-size-lg;
      }

      + .meta-item {
        margin-left: $spacer;
        padding-left: $spacer;
        border-left: 1px solid $border-color;
      }
    }
  }
}
</style>
