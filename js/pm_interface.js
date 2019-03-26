var SPRINTS_VIEW = Backbone.View.extend({

  el  : "#sprints",

  template : "#sprints_tpl",

  collection : new SPRINTS,

  initialize : function( sprints ){
    this.collection = sprints
    this.listenTo( this.collection , "sync" , this.render )
    this.render()
  },

  render : function(){
    var tpl_c = _.template( $(this.template).html() )
    $(this.$el).empty().append(tpl_c({
      sprints : this.collection
    }))

    if( typeof $( ".sprint_tasks" ).data('uiSortable') != "undefined" ){
      $( ".sprint_tasks" ).sortable('destroy')
    }

    $( ".sprint_tasks" ).sortable({
      revert: false,
    });

  },

  events : {
    "click #start_sprint" : function( e ){
      var cid = $(e.target).closest('li').attr('id')
      var model = this.collection.get(cid)
      if( typeof model != "undefined" ){
        if( this.collection.where({ active : true }).length ){
          alert( "Уже есть запущенный спринт" )
          return
        }else if( model.is_all_task_timed() ){
          alert( "Есть неоцененные задачи" )
          return
        }else if( model.is_exceeded_limit() ){
          alert( "Есть неоцененные задачи" )
          return
        }else if( !model.is_isset_tasks() ){
          alert( "Нет ни одной задачи в спринте" )
          return
        }
      }
    },

    "click #add_sprint" : function(){
      new MODAL_EDIT_SPRINT( new SPRINT , this.collection );
    }
  }

})


var MODAL_TIME_ESTIMATE = Backbone.View.extend({
  template : "#modal_time_estimate",

  initialize : function( task ){
    this.model = task.clone()
    this.render()
  },


  render : function(){
    var tpl_c = _.template( $(this.template).html() )
    this.$el = $(tpl_c({
      task : this.model
    })).modal('show')

    $(this.$el).on('hidden.bs.modal' , function(){
      $(this).remove()
    })
  },

  events : {
    "keyup #time_estimate" : function(e){

      this.model.set('time_estimate' , $(e.target).val().trim() )

      var cl_dis = this.model.__valid_time_estimate() ? "removeClass" : "addClass"
      var cl_suc = this.model.__valid_time_estimate() ? "addClass" : "removeClass"
      $('#save_time')[cl_dis]("btn-disabled")[cl_suc]("btn-success")
    },

    "click #save_time" : function(){
      if( this.model.__valid_time_estimate() ){
        var self = this
        this.model.save(null , {
          success : function(){
            $(self.$el).modal('hide')
          }
        })
        return
      }
      return
    }
  }
})



var BACKLOG_VIEW = Backbone.View.extend({
  el : "#backlog",

  template : "#backlog_tpl",

  initialize : function( tasks ){
    this.collection = tasks
    this.listenTo( this.collection , "sync" , this.render )
    this.render()
  },

  render : function(){
    var tpl_c = _.template( $(this.template).html() )
    $(this.$el).empty().append(tpl_c({
      tasks : this.collection
    }))

    if( typeof $( "#backlog li" ).data('uiDraggable') != "undefined" ){
      $( "#backlog li" ).draggable('destroy')
    }

    $( "#backlog li" ).draggable({
      connectToSortable: ".sprint_tasks",
      helper: "clone",
      revert: "invalid",

      stop : function(event , ui){
        var moved = $(ui.helper).closest('ul').hasClass('sprint_tasks')
        if( moved ){
          // Удаляем из backlog задачу и направляем ее в спринт
        }
      }
    });
    $( "ul, li" ).disableSelection();
  },

  events : {
    "click .time_estimate" : function( e ){
      var cid = $(e.target).closest('li').attr('id')
      var model = this.collection.get(cid)
      if( typeof model != "undefined" ){
        new MODAL_TIME_ESTIMATE( model ) 
      }
    }
  }
})