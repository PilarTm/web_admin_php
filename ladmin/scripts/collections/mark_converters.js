var MARK_CONVERTER_COLLECTIONS = Backbone.Collection.extend({
  model : MARK_CONVERTERS_MODEL,
  url : "/api/mark_converters",
  parse : function(a){
    return a.data
  }
})