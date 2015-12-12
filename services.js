angular.module('starter.services', [])

/**
 * A simple example service that returns some data.
 */
.factory('Friends', function() {
  // Might use a resource here that returns a JSON array

  // Some fake testing data
  var friends = [
    { id: 0, name: 'Friend 1' },
    { id: 1, name: 'Friend 2' },
    { id: 2, name: 'Friend 3' },
    { id: 3, name: 'Friend 4' },
    { id: 4, name: 'Friend 5' },
    { id: 5, name: 'Friend 6' },
    { id: 6, name: 'Friend 7' },
    { id: 7, name: 'Friend 8' },
  ];

  return {
    all: function() {
      return friends;
    },
    get: function(friendId) {
      // Simple index lookup
      return friends[friendId];
    }
  }
});
