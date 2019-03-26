var SPRINT = Backbone.Model.extend({

  defaults : {
    id : 0,
    name : "",
    date_start : "",
    is_archive : false,
    is_active : false,
  },

  is_all_task_timed : function(){
    return this.get('tasks').where({ })
  },

  is_exceeded_limit : function(){
    return this.get('tasks').pluck('time_estimate')
  },

  url : function(){
    return base_url + 'api/sprint/' + this.get('id')
  }

})