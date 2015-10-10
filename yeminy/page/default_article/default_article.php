<?php
class default_article extends \SYSTEM\PAGE\Page {
    var $id = null;
    public function __construct($id) {
        $this->id = $id;}

    public function html(){
        $element = \SYSTEM\PAGE\text::get_adv($this->id);
        return SYSTEM\PAGE\replace::replace(article::full($element), \SYSTEM\PAGE\text::tag('time'));
    }
}