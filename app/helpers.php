<?php 


    function parseLink($body)
    {       
        
    	if($body == null){
    		return;
    	}

        if(!isset(explode('--link=', $body)[1])){
            return $body;
        }
        
        $link = explode('--link=', $body)[1];

        $link = explode(' ', $link)[0];	

        if(!isset(explode('--naam=', $link)[1])){
            
            return $body;
        } 
        $nameOfLink = explode('--naam=', $link)[1];
        $nameOfLink = explode(' ', $nameOfLink)[0];
      
        $text = str_replace("--link=$link", "<a class='bold text-color-secondary' target=_blank href=http://$link > $nameOfLink </a> " , $body);
   
        $text = str_replace("--naam=$nameOfLink", "" , $text);
        return $text;
      

        	
        

    }