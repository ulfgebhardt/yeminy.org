<?php
class article {
    public static function preview($element = array()){
        $element['published'] = date_format(new DateTime($element['time_create']), 'H:i d-m-Y');
        $element['ago'] = \SYSTEM\time::time_ago_string(strtotime($element['time_create']));
        return SYSTEM\PAGE\replace::replaceFile(SYSTEM\SERVERPATH(new PPAGE(),'article/tpl/preview.tpl'), $element);
    }

    public static function full($element = array()) {
        $element['published'] = date_format(new DateTime($element['time_create']), 'H:i d-m-Y');
        $element['ago'] = \SYSTEM\time::time_ago_string(strtotime($element['time_create']));
        return SYSTEM\PAGE\replace::replaceFile(SYSTEM\SERVERPATH(new PPAGE(),'article/tpl/article.tpl'), $element);
    }

}