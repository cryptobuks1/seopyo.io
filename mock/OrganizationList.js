import faker from 'faker'
import take from 'lodash/take'
import times from 'lodash/times'
import { generateHid } from './helpers'

import { userList } from './'

export default times(20, () => {
  return {
    hid: generateHid(),
    name: `${faker.company.companyName()}${faker.company.companySuffix()}`,
    users: take(userList, 4),
    cover_image: 'https://placeimg.com/1280/300/any',
    logo_image: 'https://placeimg.com/128/128/tech'
  }
})
