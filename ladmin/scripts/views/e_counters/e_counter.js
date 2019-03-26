var _e_counter = new E_COUNTERS_MODEL({ id : id })
var converter = new CONVERTER_MODEL()
var concentrator = new CONCENTRATOR_MODEL()
var model = new MODEL_E_COUNTERS_MODEL()
$(document).ready(function(){
  
  _e_counter.fetch({success : function(){
    converter.set({ id : _e_counter.get('converter_id') })
    concentrator.set({ id : _e_counter.get('concentrator_id') })
    converter.fetch()
    concentrator.fetch()
    model.set({ id : _e_counter.get('model_id') })
    model.fetch()
  }})
  new E_COUNTER_INFO( _e_counter , converter , model , concentrator )
  new E_COUNTER_TITLE( _e_counter )


})