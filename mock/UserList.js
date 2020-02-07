import faker from 'faker'
import times from 'lodash/times'
import { generateHid } from './helpers'

export default times(20, () => {
  const obj = {
    hid: generateHid(),
    first_name: faker.name.firstName(),
    last_name: faker.name.lastName(),
    email: faker.internet.email(),
    avatar: faker.internet.avatar(),
    statistics: {
      followers: faker.random.number(),
      collections: faker.random.number()
    }
  }

  obj.full_name = `${obj.first_name} ${obj.last_name}`

  return obj
})
