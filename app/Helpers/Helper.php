<?php

if (!function_exists('app_date_format')) {
    /**
     * Returns a human readable file size
     *
     * @param integer $bytes
     * Bytes contains the size of the bytes to convert
     *
     * @param integer $decimals
     * Number of decimal places to be returned
     *
     * @return string a string in human readable format
     *
     * */
    function app_date_format($date=null, $format)
    {
        if($date != null){
        	$timestamp = strtotime($date);
        	//$dmy = date("d-m-Y", $timestamp);
        	$dmy = date($format, $timestamp);
        	return $dmy;
        }else{
        	return $date;
        }
    
		

    }

    
                     
    
                    
                                        

}