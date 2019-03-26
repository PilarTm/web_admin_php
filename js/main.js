Backbone.emulateHTTP = true;
Backbone.emulateJSON = true;

sprints_coll = new SPRINTS;
tasks_free = new TASKS_FREE;
tasks_in_sprint = new TASKS_IN_SPRINT;

sprints_coll.fetch()
tasks_free.fetch()
tasks_in_sprint.fetch()

$(document).ready(function(){
  new SPRINTS_VIEW( sprints_coll , tasks_in_sprint )
  new BACKLOG_VIEW( tasks_free , tasks_in_sprint )
})