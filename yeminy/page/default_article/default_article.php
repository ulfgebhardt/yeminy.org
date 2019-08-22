<?php
class default_article implements \SYSTEM\PAGE\Page {
    var $id = null;
    public function __construct($id) {
        $this->id = $id;}
    
    public static function title(){
        return null;}
    public static function meta(){
        return array();}

    public static function js(){
        return array();}
    public static function css(){
        return array();}

    public function html(){
        return SYSTEM\PAGE\replace::replace(article::full($this->id), \SYSTEM\PAGE\text::tag('time'));
    }
}