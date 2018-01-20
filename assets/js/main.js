var myCustomFieldController = Marionette.Object.extend( {
  
    initialize: function() {
      // ...
    },

    validate: function( model ) {

        // ...
        
        // Do Validation Here...
        
        // If validation fails...
        var modelID       = model.get( 'id' );
        var errorID       = 'custom-field-error';
        var errorMessage  = 'This is an error message';
        var fieldsChannel = Backbone.Radio.channel( 'fields' );
        
        // Add Error
        fieldsChannel.request( 'add:error', modelID, errorID, errorMessage );
    }
});
