// on the client
Template.postsList.helpers({
  posts: function() {
    return Posts.find();
  }
});
