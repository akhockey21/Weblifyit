<?php
/**
 * @param {int} $pageId
 * example string "[row]Hello This is on a new row.[/row]"
 */ 
function convertShortcodes($pageId){
    //Testing Purposes
    //$bodyInput = PagesContent::get(Auth::user()->id, $pageId, 'body', true);
    
    $bodyInput = PagesContent::get(Auth::user()->id, $pageId, 'body', true);
    
    $shortcodesList = array(
        'row' => array(
            'startTag' => '[row]',
            'endTag' => '[/row]',
            'variables' => false,
            'name' => 'row'
        ),
        'test' => array(
            'startTag' => '[test',
            'endTag' => '[/test]',
            'variables' => true,
            'name' => 'test'
        )
    );
    
    /**
     * Check if there are shortcodes, return an array
     * @param {array} $shortcodesList
     * @param {text} $input 
     */ 
    function isThereShortcodes($shortcodesList, $input){
        $shortcodesUsed = array;
        foreach($shortcodesList as $key => $value){
            if (strpos($input, $value['startTag']) !== false && strpos($input, $value['endTag']) !== false && $value['variables'] == false){
                /**
                 * Call the shortcode function without the variables
                 */ 
                $shortcodesUsed[$value['name']];
            }
            elseif (strpos($input, $value['startTag']) !== false && strpos($input, $value['endTag']) !== false && $value['variables'] == true){
                /**
                 * Call the shortcode function WITH the variables
                 */ 
                $shortcodesUsed[$value['name']];
            }
        }
        return $shortcodesUsed;
    }
    
    return isThereShortcodes($shortcodesList, $bodyInput);
}
    
    



?>