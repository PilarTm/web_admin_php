var MARK_CONCENTRATOR_COLLECTIONS = Backbone.Collection.extend({
  model : MARK_CONCENTRATOR_MODEL,
  url : "/api/mark_concentrator",
  parse : function(a){
    return a.data
  }
})