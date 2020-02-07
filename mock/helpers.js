import faker from 'faker'
import head from 'lodash/head'
import split from 'lodash/split'
import upperCase from 'lodash/upperCase'

export const generateHid = () => upperCase(head(split(faker.random.uuid(), '-'))).replace(/\s/gim, '')
