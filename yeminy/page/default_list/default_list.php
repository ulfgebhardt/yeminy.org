<?php
class default_list implements \SYSTEM\PAGE\Page {
    var $tag = null;
    public function __construct($tag = null) {
        $this->tag = $tag;}

    public static function title(){
        return null;
    }
    public static function meta(){
        return array();
    }

    public static function js(){
        return array(   new PPAGE('default_list/js/default_list.js'));}
    
    public static function css(){
        return array();
    }

    public function html(){
        $vars = array();
        $vars['title'] = $this->tag ? ucfirst($this->tag) : 'Neuheiten';
        $elements = \SYSTEM\PAGE\text::tag_adv($this->tag ? $this->tag : 'yeminy');
        $vars['list'] = '';
        foreach($elements as $element){
            $vars['list'] .= article::preview($element);}
        $vars = array_merge($vars, \SYSTEM\PAGE\text::tag('time'));
        return SYSTEM\PAGE\replace::replaceFile((new PPAGE('default_list/tpl/default_list.tpl'))->SERVERPATH(), $vars);
    }
}