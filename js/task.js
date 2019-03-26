var TASK = Backbone.Model.extend({
  defaults : {
    id : 0,
    title : "",
    description : "",
    time_estimate : "",
    is_close : 0
  },

  url : function(){
    return base_url + "api/task/" + this.get('id')
  },

  __valid_time_estimate : function(){
    var reg_h_or_m = new RegExp(/^([0-9]*)(h|m)$/)
    var reg_h_and_m = new RegExp(/^([0-9]*)h ([0-9]*)m$/)

    return reg_h_or_m.test( this.get('time_estimate') ) ||
      reg_h_and_m.test( this.get('time_estimate') )
  }

})