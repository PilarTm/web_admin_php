var CONVERTER_MODEL = Backbone.Model.extend({
  defaults : {
    id : 0,
    ip : "",
    port : 0,
    login : "",
    password : "",
    title : "",
    model_id : 0,
    is_ecxluded : false,
    place_id : 0
  },

  url : function(){
    return "/api/converters/" + this.get('id')
  },

  get_title : function(){
    if( !this.get('title') ){
      return this.get('ip') + ":"+this.get('port')
    }
    return this.get('title')
  },

  validate : function(){
    if( !this.get('ip') ){
      return "empty ip"
    }
    if( !this._validate_ip() ){
      return "invalid ip"
    }

    if( !this._validate_port() ){
      return "invalid port"
    }

    if( isNaN(this.get('port')) ){
      return "port is not number"
    }
    if( !this.get('model_id') ){
      return "invalid model"
    }

  },

  _validate_port : function(){
    return this.get('port') > 0 && this.get('port') <= 65535
  },

  _validate_ip : function(){
    var ipformat = /^(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)$/;
    return this.get('ip').match(ipformat)
  }

})
