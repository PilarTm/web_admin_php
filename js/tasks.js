var TASKS = Backbone.Collection.extend({
  model : TASK
})

var TASKS_FREE = Backbone.Collection.extend({
  model : TASK,
  url : base_url + "api/task_free/"
})
var TASKS_IN_SPRINT = Backbone.Collection.extend({
  model : TASK,
  url : base_url + "api/task_in_sprint/"
})