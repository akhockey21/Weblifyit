<?php
//List the shortcodes and the options associated
$shortcodesList = array(
    'row' => array(
        'startTag' => '[row]',
        'endTag' => '[/row]',
        'variables' => false,
        'name' => 'row'
    ),
    'header2' => array(
        'startTag' => '[h2]',
        'endTag' => '[/h2]',
        'variables' => true,
        'name' => 'header2'
    )
);
 
//for shortcodes with no variables, list HTML replacement
$shortcodesOutputNoVariable = array(
    'row' => array(
        'startTag' => "<div class=\"row\">",
        'endTag' => '</div>'
    )
); 
    
    
    /**
     * Gets the string in between start and end tags.
     * 
     * @param {string} $string 
     * @param {string} $start 
     * @param {string} $end 
     */ 
    function get_string_between($string, $start, $end){
        $string = " ".$string; 
        $ini = strpos($string,$start);
        if ($ini == 0) return "";
        $ini += strlen($start);
        $len = strpos($string,$end,$ini) - $ini;
    return substr($string,$ini,$len);
}
/*
    $fullstring = "this is my [tag]dog[/tag]";
    $parsed = get_string_between($fullstring, "[tag]", "[/tag]");

    echo $parsed; // (result = dog)
  */  
    /**
     * Each shortcode with variables will have their own function to replace the string data with the correct HMTL.
     * @param {Type} $data 
     * @param {Type} $body 
     */ 
    function header2($data, $body){
        /**
         * Shortcode Title: Header 2 (h2)
         * Variables: "[text][/text]"
         * Todo: 
         *  1. Get string in between start and end tag
         *  2. Get variable info
         *  3. Get start and End Tag Positon (end tag position + tag length)
         *  4. Repalce In between the start and end positons
         *  5. Replace Entire Tag and Contents With HTML Info
         */ 
        $bodyOutput = $body;
        // 1
        $header2Tags = get_string_between($body, $data['startTag'], $data['endTag']);
        
        //2
        $text = get_string_between($header2Tags, "[text]", "[/text]");
        
        //3
        $tagStartPos = strpos($bodyOutput, $data['startTag']);
        $tagEndPos = strpos($bodyOutput, $data['endTag']) + strlen($data['endTag']);
        
        //4
        $header2FullTag = substr($bodyOutput, $tagStartPos, $tagEndPos - $tagStartPos);
        
        //5
        $bodyOutput = str_replace($header2FullTag, "<h2>$text</h2>", $bodyOutput);
        
        
        return $bodyOutput;
    }
?>