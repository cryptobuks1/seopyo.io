import faker from 'faker'
import times from 'lodash/times'
import sample from 'lodash/sample'

import { generateHid } from './helpers'

import userList from './UserList'
import bookmarkList from './BookmarkList'
import collectionList from './CollectionList'

export default times(50, () => {
  const obj = {
    hid: generateHid(),
    type: faker.helpers.randomize(['add', 'remove', 'subscribe'])
  }

  const user = sample(userList)
  const bookmark = sample(bookmarkList)
  const collection = sample(collectionList)

  if (obj.type === 'add' || obj.type === 'remove') {
    obj.user = user
    obj.bookmark = bookmark
    obj.collection = collection
  } else if (obj.type === 'subscribe') {
    obj.user = user
    obj.collection = collection
  }

  return obj
})
