var MODAL_EDIT_SPRINT = Backbone.View.extend({

  template : "#modal_sprint_tpl",

  initialize : function( sprint , sprints ){
    this.model = sprint
    this.collection = sprints
    this.render()
  },

  render : function(){
    var tpl_c = _.template( $(this.template).html() )
    this.$el = $(tpl_c({
      sprint : this.model
    })).modal('show')

    var self = this

    $(this.$el).on('shown.bs.modal' , function(){
      $( "#calendar" ).datepicker({

        firstDay: 1,

        onSelect : function(dateText){
          var curr = new Date(dateText)
          var first_day = new Date(curr.setDate(curr.getDate() - curr.getDay()+2))
          self.model.set('date_start' , dateText)
          self.model.save( null , { success : function(){
            $(self.$el).modal('hide')
          }})
        }

      });
    }).on('hidden.bs.modal' , function(){
      self.collection.fetch()
      $( "#calendar" ).datepicker( "destroy" );
      $(this).remove()
    })


  },

  events : {
    "click td" : function( e ){

      console.log($(e.target).closest('tr').find('td').first().text())

    }

  }

})