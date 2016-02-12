<?php
class default_search extends \SYSTEM\PAGE\Page {
    var $param = null;
    public function __construct($param) {
        $this->param = $param;}
        
    public function html(){
        $vars = array();
        $vars['title'] = $this->param;
        $vars['search'] = '';
        $elements = \SYSTEM\PAGE\text::search($this->param, 'yeminy');
        foreach($elements as $element){
            $vars['search'] .= article::preview($element);}
        $vars = array_merge($vars, \SYSTEM\PAGE\text::tag('time'));
        return SYSTEM\PAGE\replace::replaceFile((new PPAGE('default_search/tpl/search.tpl'))->SERVERPATH(), $vars);
    }
}