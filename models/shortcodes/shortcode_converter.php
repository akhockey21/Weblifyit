<?php

class convertShortcodes {
    
    /**
     * Variables we are working with
     */ 
    var $bodyInput;
    var $shortcodesList; 
    var $bodyOutput;
    var $shortcodesOutputNoVariable;
    var $pageId;
    
    
    
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
        $this->bodyOutput = $body;
        // 1
        $header2Tags = $this->get_string_between($body, $data['startTag'], $data['endTag']);
        
        //2
        $text = $this->get_string_between($header2Tags, "[text]", "[/text]");
        
        //3
        $tagStartPos = strpos($this->bodyOutput, $data['startTag']);
        $tagEndPos = strpos($this->bodyOutput, $data['endTag']) + strlen($data['endTag']);
        
        //4
        $header2FullTag = substr($this->bodyOutput, $tagStartPos, $tagEndPos - $tagStartPos);
        
        //5
        $this->bodyOutput = str_replace($header2FullTag, "<h2>$text</h2>", $this->bodyOutput);
        
        
        return $this->bodyOutput;
    }
    
    
    /**
    * @param {int} $pageId
    * example string "[row]Hello This is on a new row.[/row]"
    */ 
    function convertShortcodesToHtml($pageId){
        
        $this->bodyInput = PagesContent::get(Auth::user()->id, $pageId, 'body', true);
        //This will be the main outout to HTML
        $this->bodyOutput = $this->bodyInput;
    
        //List the shortcodes and the options associated
        $this->shortcodesList = array(
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
        $this->shortcodesOutputNoVariable = array(
            'row' => array(
                'startTag' => "<div class=\"row\">",
                'endTag' => '</div>'
            )
        );
        
        
        /**
        * Steps To Convert:
        * 1. Get The Body Input
        * 2. In Order do the following:
        *    1. For each shortcode listed in the array, scan $bodyInput                for a startTag and endTag.
        *    2. Check for matches of shortcodes
        *    2. Check if shortcode has paramters
        *    3. If not, just replace the start and end tags with the                  correct HTML. 
        *    4. If It does, run the specific function that is built for                   that shortcode. Then Return the HTML.
        * 
        */ 
        
            // Step 1
        foreach($this->shortcodesList as $shortcode){
            //Check if $shortcode['startTag'] is in body text
            //Get the start positon of the start tag
            $startTagPosStart = strpos($shortcode['startTag'], $this->bodyOutput);
            
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
                        $this->bodyOutput = $this->{"$shortcode_name"}($shortcode, $this->bodyOutput);
                        
                       // $shortcode_name($shortcode, $this->bodyOutput);
                    } else{
                        /**
                        * Just Replace the Start and End Tags with the appropriate HTML
                        */
                        //replace start tag
                        $this->bodyOutput = str_replace($shortcode['startTag'], $this->shortcodesOutputNoVariable[$shortcode_name]['startTag'], $this->bodyOutput);
                    
                        //replace end tag
                        $this->bodyOutput = str_replace($shortcode['endTag'], $this->shortcodesOutputNoVariable[$shortcode_name]['endTag'], $this->bodyOutput);
                     
                    } 
                }
            $this->bodyOutput = $this->bodyOutput;
        }
        
        //This will be the main outout to HTML
        if(isset($this->bodyOutput)){
            echo $this->bodyOutput;
        }
        
    }
     
}

?>