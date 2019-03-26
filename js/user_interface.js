var ADD_TASK = Backbone.View.extend({
  template : "#modal_add_task",

  initialize : function( task , tasks ){
    this.model = task.clone()
    this.collection = tasks
    this.render()
  },

  render : function(){
    var tpl_c = _.template( $(this.template).html() )
    this.$el = $(tpl_c({
      task : this.model
    })).modal('show')

    var self = this
    $(this.$el).on('hidden.bs.modal' , function(){
      $(this).remove()
    })
  },

  events : {
    "click #save_task" : function(){
      var self = this
      this.model.save(null , {
        success : function(){
          $(self.$el).modal('hide')
        }
      })
    },

    "keyup #title" : function( e){
      this.model.set('title' , $(e.target).val())
    },

    "keyup #description" : function( e){
      this.model.set('description' , $(e.target).val())
    }
  }
})

$(document).ready(function(){
  $('#add_task').on('click' , function(){
    new ADD_TASK( new TASK , new TASKS )
  })
})