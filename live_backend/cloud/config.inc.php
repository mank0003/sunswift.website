<?php

$config = array(
		'host' => ':/tmp/mysql.sock',
		'user' => 'root',
		'pass' => '',
		'database' => 'sunswift_live',
		'table' => 'log',
		'eventtable' => 'events'
	)
if (!function_exists('apache_request_headers')) { 
        function apache_request_headers() { 
            foreach($_SERVER as $key=>$value) { 
                if (substr($key,0,5)=="HTTP_") { 
                    $key=str_replace(" ","-",ucwords(strtolower(str_replace("_"," ",substr($key,5))))); 
                    $out[$key]=$value; 
                }else{ 
                    $out[$key]=$value; 
        } 
            } 
            return $out; 
        } 
}
?>