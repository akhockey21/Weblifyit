/*
 *  Document   : uiDraggable.js
 *  Author     : pixelcave
 *  Description: Custom javascript code used in Draggable Blocks page
 */

var UiDraggable = function() {

    return {
        init: function() {
            /* Initialize draggable and sortable blocks, check out more examples at https://jqueryui.com/sortable/ */
          $('#sortable').sortable({
    connectWith: "#other",
    axis: 'y',
    update: function (event, ui) {
        var data = $(this).sortable('serialize');

        // POST to server using $.post or $.ajax
        $.ajax({
            data: data,
            type: 'POST',
            url: 'test.php' 
        });
    }
});
    
    $('#other').sortable({
    connectWith: "#sortable",
    axis: 'y',
    update: function (event, ui) {
        var data = $(this).sortable('serialize');
    }
});
        }
    };
}();