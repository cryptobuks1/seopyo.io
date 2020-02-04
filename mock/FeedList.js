import sample from 'lodash/sample'

import userList from './UserList'
import bookmarkList from './BookmarkList'
import collectionList from './CollectionList'

export default [
  {
    type: 'add',
    user: sample(userList),
    bookmark: sample(bookmarkList),
    collection: sample(collectionList)
  },
  {
    type: 'subscribe',
    user: sample(userList),
    collection: sample(collectionList)
  },
  {
    type: 'subscribe',
    user: sample(userList),
    collection: sample(collectionList)
  },
  {
    type: 'add',
    user: sample(userList),
    bookmark: sample(bookmarkList),
    collection: sample(collectionList)
  },
  {
    type: 'add',
    user: sample(userList),
    bookmark: sample(bookmarkList),
    collection: sample(collectionList)
  },
  {
    type: 'remove',
    user: sample(userList),
    bookmark: sample(bookmarkList),
    collection: sample(collectionList)
  },
  {
    type: 'subscribe',
    user: sample(userList),
    collection: sample(collectionList)
  },
  {
    type: 'remove',
    user: sample(userList),
    bookmark: sample(bookmarkList),
    collection: sample(collectionList)
  },
  {
    type: 'add',
    user: sample(userList),
    bookmark: sample(bookmarkList),
    collection: sample(collectionList)
  },
  {
    type: 'remove',
    user: sample(userList),
    bookmark: sample(bookmarkList)
  }
]
