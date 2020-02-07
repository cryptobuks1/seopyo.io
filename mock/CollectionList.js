import faker from 'faker'
import times from 'lodash/times'
import startCase from 'lodash/startCase'
import { generateHid } from './helpers'

export default times(20, () => {
  return {
    hid: generateHid(),
    name: startCase(faker.hacker.adjective()),
    cover_image: faker.helpers.randomize([faker.image.nightlife(), null]),
    statistics: {
      stars: faker.random.number(),
      followers: faker.random.number()
    }
  }
})
