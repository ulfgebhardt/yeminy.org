<?php
class default_article extends \SYSTEM\PAGE\Page {
    var $id = null;
    public function __construct($id) {
        $this->id = $id;}

    public function html(){
        return SYSTEM\PAGE\replace::replace(article::full($this->id), \SYSTEM\PAGE\text::tag('time'));
    }
}