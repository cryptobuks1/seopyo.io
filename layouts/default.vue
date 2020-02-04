<template>
  <div>
    <div ref="appFrame" class="app-frame">
      <header class="app-header">
        <b-container>
          <b-navbar ref="appNavbar" toggleable="lg" class="app-navbar">
            <b-navbar-brand :to="{ name: 'index' }">
              <Logo />
            </b-navbar-brand>

            <b-navbar-toggle ref="navbarToggle" @click="evtToggleHandler" target="nav-collapse"> </b-navbar-toggle>

            <b-collapse id="nav-collapse" is-nav>
              <b-navbar-nav class="ml-auto">
                <b-nav-item :to="{ name: 'index' }" active>home</b-nav-item>
                <b-nav-item :to="{ name: 'trending' }">trending</b-nav-item>
                <b-nav-item :to="{ name: 'collections-explore' }">collections</b-nav-item>
                <b-nav-item :to="{ name: 'account' }">account</b-nav-item>
              </b-navbar-nav>
            </b-collapse>
          </b-navbar>
        </b-container>
      </header>
      <div class="app-content">
        <b-container>
          <nuxt />
        </b-container>
      </div>
      <footer class="app-footer">
        Footer
      </footer>
    </div>
  </div>
</template>

<script>
import Logo from '../components/Logo'
// import App from '../mixins/App'

export default {
  components: {
    Logo
  },
  /* mixins: {
    App
  }, */
  mounted() {
    const media = window.matchMedia('(max-width: 767px)')
    if (media && media.matches) {
      this.$refs.appFrame.classList.add('platform-mobile')
      this.$refs.appNavbar.classList.add('fixed-top')
    } else {
      this.$refs.appFrame.classList.add('platform-desktop')
    }
  },
  methods: {
    evtToggleHandler() {
      if (!this.$refs.navbarToggle.toggleState) {
        window.document.body.style.overflow = 'hidden'
      } else {
        window.document.body.style.overflow = null
      }
    }
  }
}
</script>

<style lang="scss">
@import '../assets/styles/base';
</style>
