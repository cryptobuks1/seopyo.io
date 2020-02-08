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
      followers: faker.random.number({ min: 0, max: 4000 }),
      collections: faker.random.number({ min: 0, max: 100 }),
      organizations: faker.random.number({ min: 0, max: 24 })
    }
  }

  obj.full_name = `${obj.first_name} ${obj.last_name}`

  return obj
})
