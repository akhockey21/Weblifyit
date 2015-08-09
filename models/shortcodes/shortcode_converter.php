<?php
/**
 * @param {int} $pageId
 * example string "[row]Hello This is on a new row.[/row]"
 */ 
function convertShortcodes($pageId){
    //Testing Purposes
    //$bodyInput = PagesContent::get(Auth::user()->id, $pageId, 'body', true);
    
    $bodyInput = PagesContent::get(Auth::user()->id, $pageId, 'body', true);
    
    
    /**
     * Steps To Convert:
     * 1. Get The Body Input
     * 2. In Order do the following:
     *    1. Create an array of all items in between these brackets '[' and ']'
     *    2. Check for matches of shortcodes, if none, remove the item from the arrays
     *    2. Check if shortcode has paramters
     *    3. If not, just replace the start and end tags with the correct HTML. 
     *    4. If It does, run the specific function that is built for that shortcode. Then Return the HTML.
     * 
     */ 
    
//List the shortcodes and the options associated
$shortcodesList = array(
    'row' => array(
        'startTag' => '[row]',
        'endTag' => '[/row]',
        'variables' => false,
    ),
    'header2' => array(
        'startTag' => '[h2',
        'endTag' => '[/h2]',
        'variables' => true,
    )
);
 
//for shortcodes with no variables, list HTML replacement
$shortcodesOutputNoVariable = array(
    'row' => array(
        'startTag' => '<div class="row'>,
        'endTag' => '</div>',
    )
); 
    function get_string_between($string, $start, $end){
    $string = " ".$string;
    $ini = strpos($string,$start);
    if ($ini == 0) return "";
    $ini += strlen($start);
    $len = strpos($string,$end,$ini) - $ini;
    return substr($string,$ini,$len);
}

    $fullstring = "this is my [tag]dog[/tag]";
    $parsed = get_string_between($fullstring, "[tag]", "[/tag]");

    echo $parsed; // (result = dog)
    
    /**
     * Each shortcode with variables will have their own function to replace the string data with the correct HMTL.
     * @param {Type} $data 
     */ 
    function header2($data){
        
    }
    
    
}
    /**
     * Check if there are shortcodes, return an array
     * @param {array} $shortcodesList
     * @param {text} $input 
     *
    function isThereShortcodes($shortcodesList, $input){
        $shortcodesUsed = array;
        foreach($shortcodesList as $key => $value){
            if (strpos($input, $value['startTag']) !== false && strpos($input, $value['endTag']) !== false && $value['variables'] == false){
                /**
                 * Call the shortcode function without the variables
                 *
                $shortcodesUsed[$value['name']];
            }
            elseif (strpos($input, $value['startTag']) !== false && strpos($input, $value['endTag']) !== false && $value['variables'] == true){
                /**
                 * Call the shortcode function WITH the variables
                 * 
                $shortcodesUsed[$value['name']];
            }
        }
        return $shortcodesUsed;
    }
    
    return isThereShortcodes($shortcodesList, $bodyInput);
}
    
    
   */ 


?>