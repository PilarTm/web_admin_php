var MODEL_E_COUNTERS_MODEL = Backbone.Model.extend({
  defaults : {
    id : 0,
    title : "",
    mark_id : 0
  },

  url : function(){
    return "/api/model_e_counters/" + this.get('id')
  }
})