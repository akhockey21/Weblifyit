CKEDITOR.plugins.add( 'row', {
    icons: 'row',
    init: function( editor ) {
        editor.addCommand( 'insertrow', {
            exec: function( editor ) {
                var now = new Date();
                editor.insertHtml( '[row]      [/row]' );
            }
        });
        editor.ui.addButton( 'row', {
            label: 'Insert row',
            command: 'insertrow',
            toolbar: 'insert'
        });
    }
}); 