<?php
/**
 * @param {int} $pageId
 * example string "[row]Hello This is on a new row.[/row]"
 */ 

function convertShortcodes($pageId){
    //Testing Purposes
    //$bodyInput = PagesContent::get(Auth::user()->id, $pageId, 'body', true);
    
    $bodyInput = PagesContent::get(Auth::user()->id, $pageId, 'body', true);
    //This will be the main outout to HTML
    $bodyOutput = $bodyInput;
    /**
     * Steps To Convert:
     * 1. Get The Body Input
     * 2. In Order do the following:
     *    1. For each shortcode listed in the array, scan $bodyInput for a startTag and endTag.
     *    2. Check for matches of shortcodes
     *    2. Check if shortcode has paramters
     *    3. If not, just replace the start and end tags with the correct HTML. 
     *    4. If It does, run the specific function that is built for that shortcode. Then Return the HTML.
     * 
     */ 
    
require_once 'models/shortcodes/shortcode_converter_functions.php';
    
    // Step 1
    foreach($shortcodesList as $shortcode){
            //Check if $shortcode['startTag'] is in body text
            //Get the start positon of the start tag
            $startTagPosStart = strpos($shortcode['startTag'], $bodyOutput);
            
            //Count the start tag string length,then minus charachter length to get the Start tag End positon
            $startTagPosStartEnd = strlen($shortcode['startTag']) + $startTagPosStart;
            
            //Check if exists
        //Found error, find a better way to see if exists, a tag can start at line '0'
            if (!$startTagPosStart){
                
                //Establish Shortcode name for use below
                $shortcode_name = $shortcode['name'];
                //Check if the shortcode allows variables
                if($shortcode['variables'] == true){
                    /**
                     * This is where it will have to find the right shortcode function to call, and run it.
                     */ 
                    
                    //Call dynamic function based on the name of shortcode
                    $bodyOutput = $shortcode_name($shortcode, $bodyOutput);
                } else{
                    /**
                     * Just Replace the Start and End Tags with the appropriate HTML
                     */
                    //replace start tag
                    $bodyOutput = str_replace($shortcode['startTag'], $shortcodesOutputNoVariable[$shortcode_name]['startTag'], $bodyOutput);
                    
                    //replace end tag
                    $bodyOutput = str_replace($shortcode['endTag'], $shortcodesOutputNoVariable[$shortcode_name]['endTag'], $bodyOutput);
                     
                } 
            }
        $bodyOutput = $bodyOutput;
    }
    
    //This will be the main outout to HTML
    if(isset($bodyOutput)){
        echo $bodyOutput;
    }
}
?>