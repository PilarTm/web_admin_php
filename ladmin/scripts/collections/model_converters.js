var MODEL_CONVERTER_COLLECTIONS = Backbone.Collection.extend({
  model : MODEL_CONVERTERS_MODEL,
  url : "/api/model_converters",
  parse : function(a){
    return a.data
  }
})