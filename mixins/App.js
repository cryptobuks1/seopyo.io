import Vue from 'vue'

export default Vue.mixin({
  data() {
    return {
      get isMobile() {
        if (process.server) return false

        const media = window.matchMedia('(max-width: 767px)')
        return media && media.matches
      }
    }
  }
})
