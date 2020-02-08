<template>
  <b-row class="page-index">
    <b-col sm="3" class="border-right py-sm-5 mt-4 mt-sm-0 d-none d-sm-block">
      <user-nav class="mb-4" />
    </b-col>
    <b-col sm="" class="page-index-content py-sm-5 mt-4 mt-sm-0">
      <div class="pl-4">
        <h3>Edit Account</h3>
        <b-form @submit="onSubmit" @reset="onReset" v-if="show">
          <b-form-group
            id="input-group-1"
            label="Email address:"
            label-for="input-1"
            description="We'll never share your email with anyone else."
          >
            <b-form-input
              id="input-1"
              v-model="form.email"
              type="email"
              required
              placeholder="Enter email"
            ></b-form-input>
          </b-form-group>

          <b-form-group id="input-group-2" label="Your Name:" label-for="input-2">
            <b-form-input id="input-2" v-model="form.name" required placeholder="Enter name"></b-form-input>
          </b-form-group>

          <b-form-group id="input-group-3" label="Food:" label-for="input-3">
            <b-form-select id="input-3" v-model="form.food" :options="foods" required></b-form-select>
          </b-form-group>

          <b-form-group id="input-group-4">
            <b-form-checkbox-group id="checkboxes-4" v-model="form.checked">
              <b-form-checkbox value="me">Check me out</b-form-checkbox>
              <b-form-checkbox value="that">Check that out</b-form-checkbox>
            </b-form-checkbox-group>
          </b-form-group>

          <b-button type="submit" variant="primary">Submit</b-button>
          <b-button type="reset" variant="danger">Reset</b-button>
        </b-form>
      </div>
    </b-col>
  </b-row>
</template>

<script>
import sample from 'lodash/sample'

import { userList } from '../../mock'
import UserNav from '../../components/UserNav'

export default {
  components: {
    UserNav
  },
  data() {
    return {
      user: sample(userList),
      form: {
        email: '',
        name: '',
        food: null,
        checked: []
      },
      foods: [{ text: 'Select One', value: null }, 'Carrots', 'Beans', 'Tomatoes', 'Corn'],
      show: true
    }
  },
  methods: {
    onSubmit(evt) {
      evt.preventDefault()
      alert(JSON.stringify(this.form))
    },
    onReset(evt) {
      evt.preventDefault()
      // Reset our form values
      this.form.email = ''
      this.form.name = ''
      this.form.food = null
      this.form.checked = []
      // Trick to reset/clear native browser form validation state
      this.show = false
      this.$nextTick(() => {
        this.show = true
      })
    }
  }
}
</script>

<style lang="scss" scoped>
@import '../../assets/styles/variables';
</style>
