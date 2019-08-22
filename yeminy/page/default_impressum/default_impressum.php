<?php
class default_impressum implements \SYSTEM\PAGE\Page {
    public static function title(){
        return null;}
    public static function meta(){
        return array();}
    public static function js(){
        return array();}
    public static function css(){
        return array();}
    public function html(){
        $vars = \SYSTEM\PAGE\text::tag('webcraft');
        return SYSTEM\PAGE\replace::replaceFile((new PPAGE('default_impressum/tpl/impressum.tpl'))->SERVERPATH(), $vars);
    }
}