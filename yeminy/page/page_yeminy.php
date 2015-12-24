<?php
class page_yeminy extends \SYSTEM\API\api_default {
    public static function get_apigroup(){
        return 1;}
    public static function get_class($params = null){
        return self::class;}
    public static function get_default_state(){
        return 'start';}
        
    public static function default_page($_escaped_fragment_ = NULL){
        return (new default_page())->html($_escaped_fragment_);}
        
    public static function page_list($tag = null){
        return (new default_list($tag))->html();}
     
    public static function page_article($id){
        return (new default_article($id))->html();}
    
    public static function page_search($param){
        return (new default_search($param))->html();}
    
    public static function page_impressum(){
        return (new default_impressum())->html();}
}