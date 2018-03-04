<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 11/14/2017
 * Time: 7:59 PM
 */

class Common_library{
    function __construct(){
        $CI =& get_instance();
    }

    /* *
     *  Function name: commonSession
     *  Functionality: set session as using uri segment.
     * */

    function commonSession(){
        $CI =& get_instance();
        if(!empty($CI->uri->segments[3])){
            $method = $CI->uri->segments[3];
            $data['page'] = $method;
        }else if(!empty($CI->uri->segments[2])){
            $method = $CI->uri->segments[2];
            $data['page'] = $method;
        }else{
            $method = $CI->uri->segments[1];
            $data['page'] = $method;
        }

        return $data['page'];

    }
}