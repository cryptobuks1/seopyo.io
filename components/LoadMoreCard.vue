<template>
  <b-card
    :title="title"
    @click="handler"
    class="card-load-more"
    body-class="d-flex align-items-center justify-content-center flex-column"
  >
    <arrow-down-icon size="1.5x" />
  </b-card>
</template>
<script>
import { ArrowDownIcon } from 'vue-feather-icons'

export default {
  name: 'LoadMoreCard',
  components: {
    ArrowDownIcon
  },
  props: {
    title: {
      default() {
        return null
      },
      type: [String, null]
    },
    handler: {
      default() {
        return () => {}
      },
      type: Function
    }
  }
}
</script>
<style lang="scss" scoped>
@import '../assets/styles/variables';

.card-load-more {
  cursor: pointer;
}
</style>
